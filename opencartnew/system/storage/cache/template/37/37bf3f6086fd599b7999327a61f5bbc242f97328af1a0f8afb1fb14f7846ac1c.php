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
class __TwigTemplate_387fb054162e033c238fbde7b0267d43f17d299b71b6775a9c4503324282a732 extends \Twig\Template
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
            echo " <h2 class=\"title\">";
            echo ($context["text_my_account"] ?? null);
            echo "</h2>
";
        }
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 14);
        echo "
<div id=\"account-account\" class=\"container\">
  ";
        // line 16
        if (($context["success"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-success alert-dismissible\">
      <i class=\"fa fa-check-circle\"></i>
      ";
            // line 19
            echo ($context["success"] ?? null);
            echo "
    </div>
  ";
        }
        // line 22
        echo "  <div class=\"row\">
    ";
        // line 23
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"account-page ";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "pageTitlePosition"], "method", false, false, false, 32) == "default")) {
            // line 33
            echo "        <h1 class=\"title page-title\">
          ";
            // line 34
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 37
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"my-account\">
        <h2 class=\"title\">
          ";
        // line 40
        echo ($context["text_my_account"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-info\">
            <a href=\"";
        // line 44
        echo ($context["edit"] ?? null);
        echo "\">
              ";
        // line 45
        echo ($context["text_edit"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-pass\">
            <a href=\"";
        // line 49
        echo ($context["password"] ?? null);
        echo "\">
              ";
        // line 50
        echo ($context["text_password"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-address\">
            <a href=\"";
        // line 54
        echo ($context["address"] ?? null);
        echo "\">
              ";
        // line 55
        echo ($context["text_address"] ?? null);
        echo "
            </a>
          </li>
          <li><a href=\"";
        // line 58
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      ";
        // line 61
        if (($context["credit_cards"] ?? null)) {
            // line 62
            echo "        <div class=\"my-cards\">
          <h2 class=\"title\">
            ";
            // line 64
            echo ($context["text_credit_card"] ?? null);
            echo "
          </h2>
          <ul class=\"list-unstyled account-list\">
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 68
                echo "              <li>
                <a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 69);
                echo "\">
                  ";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 70);
                echo "
                </a>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "          </ul>
        </div>
      ";
        }
        // line 77
        echo "      <div class=\"my-orders\">
        <h2 class=\"title\">
          ";
        // line 79
        echo ($context["text_my_orders"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li class=\"edit-order\">
            <a href=\"";
        // line 83
        echo ($context["order"] ?? null);
        echo "\">
              ";
        // line 84
        echo ($context["text_order"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-downloads\">
            <a href=\"";
        // line 88
        echo ($context["download"] ?? null);
        echo "\">
              ";
        // line 89
        echo ($context["text_download"] ?? null);
        echo "
            </a>
          </li>
          ";
        // line 92
        if (($context["reward"] ?? null)) {
            // line 93
            echo "            <li class=\"edit-rewards\">
              <a href=\"";
            // line 94
            echo ($context["reward"] ?? null);
            echo "\">
                ";
            // line 95
            echo ($context["text_reward"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 99
        echo "          <li class=\"edit-returns\">
            <a href=\"";
        // line 100
        echo ($context["return"] ?? null);
        echo "\">
              ";
        // line 101
        echo ($context["text_return"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-transactions\">
            <a href=\"";
        // line 105
        echo ($context["transaction"] ?? null);
        echo "\">
              ";
        // line 106
        echo ($context["text_transaction"] ?? null);
        echo "
            </a>
          </li>
          <li class=\"edit-recurring\">
            <a href=\"";
        // line 110
        echo ($context["recurring"] ?? null);
        echo "\">
              ";
        // line 111
        echo ($context["text_recurring"] ?? null);
        echo "
            </a>
          </li>
        

        </ul>
      </div>
      <div class=\"my-affiliates\">
        <h2 class=\"title\">
          ";
        // line 120
        echo ($context["text_my_affiliate"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          ";
        // line 123
        if ( !($context["tracking"] ?? null)) {
            // line 124
            echo "            <li class=\"affiliate-add\">
              <a href=\"";
            // line 125
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 126
            echo ($context["text_affiliate_add"] ?? null);
            echo "
              </a>
            </li>
          ";
        } else {
            // line 130
            echo "            <li class=\"affiliate-edit\">
              <a href=\"";
            // line 131
            echo ($context["affiliate"] ?? null);
            echo "\">
                ";
            // line 132
            echo ($context["text_affiliate_edit"] ?? null);
            echo "
              </a>
            </li>
            <li class=\"affiliate-track\">
              <a href=\"";
            // line 136
            echo ($context["tracking"] ?? null);
            echo "\">
                ";
            // line 137
            echo ($context["text_tracking"] ?? null);
            echo "
              </a>
            </li>
          ";
        }
        // line 141
        echo "        </ul>
      </div>
      <div class=\"my-newsletter\">
        <h2 class=\"title\">
          ";
        // line 145
        echo ($context["text_my_newsletter"] ?? null);
        echo "
        </h2>
        <ul class=\"list-unstyled account-list\">
          <li>
            <a href=\"";
        // line 149
        echo ($context["newsletter"] ?? null);
        echo "\">
              ";
        // line 150
        echo ($context["text_newsletter"] ?? null);
        echo "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 155
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 157
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 160
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
        return array (  398 => 160,  392 => 157,  387 => 155,  379 => 150,  375 => 149,  368 => 145,  362 => 141,  355 => 137,  351 => 136,  344 => 132,  340 => 131,  337 => 130,  330 => 126,  326 => 125,  323 => 124,  321 => 123,  315 => 120,  303 => 111,  299 => 110,  292 => 106,  288 => 105,  281 => 101,  277 => 100,  274 => 99,  267 => 95,  263 => 94,  260 => 93,  258 => 92,  252 => 89,  248 => 88,  241 => 84,  237 => 83,  230 => 79,  226 => 77,  221 => 74,  211 => 70,  207 => 69,  204 => 68,  200 => 67,  194 => 64,  190 => 62,  188 => 61,  180 => 58,  174 => 55,  170 => 54,  163 => 50,  159 => 49,  152 => 45,  148 => 44,  141 => 40,  134 => 37,  128 => 34,  125 => 33,  123 => 32,  118 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  98 => 24,  94 => 23,  91 => 22,  85 => 19,  81 => 17,  79 => 16,  74 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
