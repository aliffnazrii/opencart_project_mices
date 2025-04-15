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

/* journal3/template/checkout/cart.twig */
class __TwigTemplate_20de3f550638c93bdf2cf1976f7633432711d14aca3669ccbf55c817186fa127 extends \Twig\Template
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
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\">
    <span >
      ";
            // line 10
            echo ($context["heading_title"] ?? null);
            echo "
    ";
            // line 11
            if (($context["weight"] ?? null)) {
                // line 12
                echo "      &nbsp;(";
                echo ($context["weight"] ?? null);
                echo ")
    ";
            }
            // line 14
            echo "    </span>
  </h1>
";
        }
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 17);
        echo "
<div id=\"checkout-cart\" class=\"container\">
  ";
        // line 19
        if (($context["attention"] ?? null)) {
            // line 20
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 29
        echo "
          ";
        // line 30
        if (($context["error_redeem"] ?? null)) {
            // line 31
            echo "          <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_redeem"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          </div>
          ";
        }
        // line 35
        echo "        
  ";
        // line 36
        if (($context["error_warning"] ?? null)) {
            // line 37
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 41
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 42
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 43
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 44
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 45
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 46
            echo "    ";
        } else {
            // line 47
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 48
            echo "    ";
        }
        // line 49
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 50), "get", [0 => "pageTitlePosition"], "method", false, false, false, 50) == "default")) {
            // line 51
            echo "      <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "
        ";
            // line 52
            if (($context["weight"] ?? null)) {
                // line 53
                echo "        &nbsp;(";
                echo ($context["weight"] ?? null);
                echo ")
        ";
            }
            // line 54
            echo " </h1>
      ";
        }
        // line 56
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"cart-page\">
        <form action=\"";
        // line 58
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"cart-table\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
              <thead>
              <tr>
                <td class=\"text-center td-image\">";
        // line 63
        echo ($context["column_image"] ?? null);
        echo "</td>
                <td class=\"text-left td-name\">";
        // line 64
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-center td-model\">";
        // line 65
        echo ($context["column_model"] ?? null);
        echo "</td>
                <td class=\"text-center td-qty\">";
        // line 66
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-center td-price\">";
        // line 67
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-center td-total\">";
        // line 68
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
              </thead>
              <tbody>

              ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            echo "                <tr>
                  <td class=\"text-center td-image\">";
            // line 75
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                echo "\" /></a> ";
            }
            echo "</td>
                  <td class=\"text-left td-name\"><a href=\"";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 76);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 76)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 77
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 77)) {
                // line 78
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                            <small>";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 79);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 79);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                      ";
            }
            // line 81
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 81)) {
                echo " <br />
                        <small>";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 82);
                echo "</small> ";
            }
            // line 83
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 83)) {
                echo " <br />
                        
            <span class=\"label label-info\">";
                // line 85
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 85);
                echo "</small> ";
            }
            // line 86
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_redeem", [], "any", false, false, false, 86)) {
                // line 87
                echo "              <div style=\"
                font-size: 1rem;
                line-height: 1.5rem;
                padding-top: 0.25rem;
                padding-bottom: 0.25rem;
                padding-left: 0.75rem;
                padding-right: 0.75rem;
                border-radius: 9999px;
                width: -moz-fit-content;
                width: fit-content;
                background-color: rgb(187, 247, 208);
                color: rgb(22, 101, 52);
              \">Redeem: ";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total_point_to_redeem", [], "any", false, false, false, 99);
                echo " pts</div>
            ";
            }
            // line 101
            echo "        </td>
                  <td class=\"text-center td-model\">";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 102);
            echo "</td>
                  <td class=\"text-center td-qty\">
                    <div class=\"input-group btn-block\">
                      <div class=\"stepper\">
                        <input type=\"text\" name=\"quantity[";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 106);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 106);
            echo "\" size=\"1\" class=\"form-control\" />
                        <span>
                      <i class=\"fa fa-angle-up\"></i>
                      <i class=\"fa fa-angle-down\"></i>
                    </span>
                      </div>
                      <span class=\"input-group-btn\">
                    <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 113
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-update\"><i class=\"fa fa-refresh\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 114
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-remove\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 114);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span>
                    </div>
                  </td>
                  <td class=\"text-center td-price\">";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 118);
            echo "</td>
                  <td class=\"text-center td-total\">";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 119);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 123
            echo "                <tr>
                  <td></td>
                  <td class=\"text-left td-voucher\">";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 125);
            echo "</td>
                  <td class=\"text-left td-voucher\"></td>
                  <td class=\"text-left td-voucher\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                      <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 130
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 130);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
                  <td class=\"text-right td-voucher\">";
            // line 132
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 132);
            echo "</td>
                  <td class=\"text-right td-voucher\">";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 133);
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"cart-bottom\">
          <div class=\"panels-total\">
              ";
        // line 142
        if ((($context["modules"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 142), "get", [0 => "cartPanelsStatus"], "method", false, false, false, 142))) {
            // line 143
            echo "                <div class=\"cart-panels\">
                  <h2 class=\"title\">";
            // line 144
            echo ($context["text_next"] ?? null);
            echo "</h2>
                  <p>";
            // line 145
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
                  <div class=\"panel-group\" id=\"accordion\"> ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 147
                echo "                          ";
                echo $context["module"];
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                  </div>
                </div>
              ";
        }
        // line 152
        echo "            <div class=\"cart-total\">
              <table class=\"table table-bordered\">
                  ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 155
            echo "                    <tr>
                      <td class=\"text-right\"><strong>";
            // line 156
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 156);
            echo ":</strong></td>
                      <td class=\"text-right\">";
            // line 157
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 157);
            echo "</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "              </table>
            </div>
          </div>
          <div class=\"buttons clearfix\">
            <div class=\"pull-left\"><a href=\"";
        // line 164
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\"><span>";
        echo ($context["button_shopping"] ?? null);
        echo "</span></a></div>
            <div class=\"pull-right\"><a href=\"";
        // line 165
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\"><span>";
        echo ($context["button_checkout"] ?? null);
        echo "</span></a></div>
          </div>
        </div>
      </div>
      ";
        // line 169
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 170
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 172
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 172,  493 => 170,  489 => 169,  480 => 165,  474 => 164,  468 => 160,  459 => 157,  455 => 156,  452 => 155,  448 => 154,  444 => 152,  439 => 149,  430 => 147,  426 => 146,  422 => 145,  418 => 144,  415 => 143,  413 => 142,  405 => 136,  396 => 133,  392 => 132,  385 => 130,  377 => 125,  373 => 123,  368 => 122,  359 => 119,  355 => 118,  346 => 114,  342 => 113,  330 => 106,  323 => 102,  320 => 101,  315 => 99,  301 => 87,  298 => 86,  292 => 85,  286 => 83,  282 => 82,  277 => 81,  274 => 80,  265 => 79,  258 => 78,  255 => 77,  247 => 76,  233 => 75,  230 => 74,  226 => 73,  218 => 68,  214 => 67,  210 => 66,  206 => 65,  202 => 64,  198 => 63,  190 => 58,  184 => 56,  180 => 54,  174 => 53,  172 => 52,  167 => 51,  165 => 50,  160 => 49,  157 => 48,  154 => 47,  151 => 46,  148 => 45,  145 => 44,  142 => 43,  140 => 42,  135 => 41,  127 => 37,  125 => 36,  122 => 35,  114 => 31,  112 => 30,  109 => 29,  101 => 25,  98 => 24,  90 => 20,  88 => 19,  83 => 17,  78 => 14,  72 => 12,  70 => 11,  66 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/checkout/cart.twig", "");
    }
}
