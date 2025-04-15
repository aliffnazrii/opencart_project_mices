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

/* journal3/template/common/cart.twig */
class __TwigTemplate_3cbff2f279f62d4aa8c855f329f871a20afa8fd799ed2f85df8cecf9eeec3ab0 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1), "get", [0 => "catalogMiniCartStatus"], "method", false, false, false, 1)) {
            // line 2
            echo "<div id=\"cart\" class=\"dropdown\">
  <a data-toggle=\"dropdown\" data-loading-text=\"";
            // line 3
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"dropdown-toggle cart-heading\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => "cartStyleCartCheckoutLink"], "method", false, false, false, 3)) {
                echo "href=\"";
                echo ($context["cart"] ?? null);
                echo "\"";
            }
            echo ">
    ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => "cartStyleCartCustomText"], "method", false, false, false, 4) == "default")) {
                // line 5
                echo "    <span id=\"cart-total\">";
                echo ($context["text_items"] ?? null);
                echo "</span>
    ";
            }
            // line 7
            echo "    <i class=\"fa fa-shopping-cart\">
      ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 8), "get", [0 => "cartStyleCartCustomText"], "method", false, false, false, 8) == "custom")) {
                // line 9
                echo "        <span class=\"cart-label\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 9), "get", [0 => "cartStyleCartLabel"], "method", false, false, false, 9);
                echo "</span>
      ";
            }
            // line 11
            echo "    </i>
    <span id=\"cart-items\" class=\"count-badge ";
            // line 12
            if ( !($context["items_count"] ?? null)) {
                echo "count-zero";
            }
            echo "\">";
            echo ($context["items_count"] ?? null);
            echo "</span>
  </a>
  <div id=\"cart-content\" class=\"dropdown-menu cart-content j-dropdown\">
    <ul>
      ";
            // line 16
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                // line 17
                echo "      <li class=\"cart-products\">
        <table class=\"table\">
          ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 20
                    echo "          <tr>
            <td class=\"text-center td-image\">";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "              <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                        echo "\"/></a>
              ";
                    }
                    // line 24
                    echo "            <td class=\"text-left td-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 24);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                    echo "</a><br /> ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 26
                            echo "            <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 26);
                            echo "</span><small> ";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 26);
                            echo "</small><br /> ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "            ";
                    }
                    // line 28
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "            
            <span>";
                        // line 30
                        echo ($context["text_recurring"] ?? null);
                        echo "</span><small> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 30);
                        echo "</small> ";
                    }
                    // line 31
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "is_redeem", [], "any", false, false, false, 31)) {
                        // line 32
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
                inline-size: max-content;
              \">Redeem: ";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "total_point_to_redeem", [], "any", false, false, false, 45);
                        echo " pts</div>
            ";
                    }
                    // line 47
                    echo "          </td>
        
            <td class=\"text-right td-qty\">x ";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 49);
                    echo "</td>
            <td class=\"text-right td-total\">";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 50);
                    echo "</td>
            <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"cart.remove('";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 51);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"cart-remove\"><i class=\"fa fa-times-circle\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 55
                    echo "          <tr>
            <td class=\"text-center\"></td>
            <td class=\"text-left\">";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 57);
                    echo "</td>
            <td class=\"text-right\">x&nbsp;1</td>
            <td class=\"text-right\">";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 59);
                    echo "</td>
            <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 60);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "        </table>
      </li>
      <li class=\"cart-totals\">
        <div>
          <table class=\"table table-bordered\">
            ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 69
                    echo "            <tr>
              <td class=\"text-right td-total-title\">";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 70);
                    echo "</td>
              <td class=\"text-right td-total-text\">";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 71);
                    echo "</td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "          </table>
          <div class=\"cart-buttons\">
            <a class=\"btn-cart btn\" href=\"";
                // line 76
                echo ($context["cart"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_cart"] ?? null);
                echo "</span></a>
            <a class=\"btn-checkout btn\" href=\"";
                // line 77
                echo ($context["checkout"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_checkout"] ?? null);
                echo "</span></a>
          </div>
        </div>
      </li>
      ";
            } else {
                // line 82
                echo "      <li>
        <p class=\"text-center cart-empty\">";
                // line 83
                echo ($context["text_empty"] ?? null);
                echo "</p>
      </li>
      ";
            }
            // line 86
            echo "    </ul>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 86,  274 => 83,  271 => 82,  261 => 77,  255 => 76,  251 => 74,  242 => 71,  238 => 70,  235 => 69,  231 => 68,  224 => 63,  213 => 60,  209 => 59,  204 => 57,  200 => 55,  195 => 54,  184 => 51,  180 => 50,  176 => 49,  172 => 47,  167 => 45,  152 => 32,  149 => 31,  143 => 30,  140 => 29,  137 => 28,  134 => 27,  124 => 26,  119 => 25,  112 => 24,  100 => 22,  98 => 21,  95 => 20,  91 => 19,  87 => 17,  85 => 16,  74 => 12,  71 => 11,  65 => 9,  63 => 8,  60 => 7,  54 => 5,  52 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/cart.twig", "");
    }
}
