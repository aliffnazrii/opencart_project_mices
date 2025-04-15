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
class __TwigTemplate_bd7dadb13ff62bf0094e8af7a484ea443c3b99a167158f06f3d7223625316c06 extends \Twig\Template
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
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "    <li>
      <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">
        ";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "get", [0 => "pageTitlePosition"], "method", false, false, false, 11) == "top")) {
            // line 12
            echo "  <h1 class=\"title page-title\">
    <span>
      ";
            // line 14
            echo ($context["heading_title"] ?? null);
            echo "
    </span>
  </h1>
";
        }
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 18);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 20
        if (($context["success"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 23
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 26
        echo "  <div class=\"row\">
    ";
        // line 27
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 28
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 29
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 30
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 31
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 34
            echo "    ";
        }
        // line 35
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 36), "get", [0 => "pageTitlePosition"], "method", false, false, false, 36) == "default")) {
            // line 37
            echo "        <h1 class=\"title page-title\">
          ";
            // line 38
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 41
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 44
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 48
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 49
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 53
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 54
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 58
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 59
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-wishlist\">
            <a href=\"";
        // line 63
        echo ($context["wishlist"] ?? null);
        echo "\">
              ";
        // line 64
        echo ($context["text_wishlist"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 69
        if (($context["credit_cards"] ?? null)) {
            // line 70
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 72
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 76
                echo "              <li>
                <a href=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 77);
                echo "\">
                  ";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 78);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "          </ul>
        </div>
      ";
        }
        // line 85
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 87
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 91
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 92
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 96
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 97
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 100
        if (($context["reward"] ?? null)) {
            // line 101
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 102
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 103
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 107
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 108
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 109
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 113
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 114
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>

\t\t\t\t<li\tclass=\"edit-points\">
\t\t\t\t<a\thref=\"";
        // line 119
        echo ($context["point"] ?? null);
        echo "\">
\t\t\t\t";
        // line 120
        echo ($context["text_point"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li\tclass=\"edit-vouchers\">
\t\t\t\t<a\thref=\"";
        // line 124
        echo ($context["voucher"] ?? null);
        echo "\">
\t\t\t\t";
        // line 125
        echo ($context["text_my_coupon"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 130
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 131
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 140
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 143
        if ( !($context["tracking"] ?? null)) {
            // line 144
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 145
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 146
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 150
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 151
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 152
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 156
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 157
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 161
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 165
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 169
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 170
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 175
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 177
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 180
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
        return array (  432 => 180,  426 => 177,  421 => 175,  413 => 170,  409 => 169,  402 => 165,  396 => 161,  389 => 157,  385 => 156,  378 => 152,  374 => 151,  371 => 150,  364 => 146,  360 => 145,  357 => 144,  355 => 143,  349 => 140,  337 => 131,  333 => 130,  325 => 125,  321 => 124,  314 => 120,  310 => 119,  302 => 114,  298 => 113,  291 => 109,  287 => 108,  284 => 107,  277 => 103,  273 => 102,  270 => 101,  268 => 100,  262 => 97,  258 => 96,  251 => 92,  247 => 91,  240 => 87,  236 => 85,  231 => 82,  221 => 78,  217 => 77,  214 => 76,  210 => 75,  204 => 72,  200 => 70,  198 => 69,  190 => 64,  186 => 63,  179 => 59,  175 => 58,  168 => 54,  164 => 53,  157 => 49,  153 => 48,  146 => 44,  139 => 41,  133 => 38,  130 => 37,  128 => 36,  123 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 31,  108 => 30,  105 => 29,  103 => 28,  99 => 27,  96 => 26,  90 => 23,  86 => 21,  84 => 20,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
