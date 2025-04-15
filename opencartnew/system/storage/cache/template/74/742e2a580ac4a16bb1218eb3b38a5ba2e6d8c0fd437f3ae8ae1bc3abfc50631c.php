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

/* journal3/template/account/order_info.twig */
class __TwigTemplate_d847992f3ff856b6d40520981502b4a06c1138c8d88a52059a20bc7d32eb1e56 extends \Twig\Template
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

\t\t\t \t<style>
\t\t\t\t\t.cart-mobile {
\t\t\t\t\t\tvisibility: hidden;
\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t}\t\t\t

\t\t\t\t\t@media screen and (max-width: 600px) {
\t\t\t\t\t\t.cart-desktop {
\t\t\t\t\t\t\tvisibility: hidden;
\t\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t\t}

\t\t\t\t\t\t.cart-mobile {
\t\t\t\t\t\t\tvisibility: visible;
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t
<ul class=\"breadcrumb\">
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 24
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 24);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 24);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "pageTitlePosition"], "method", false, false, false, 27) == "top")) {
            // line 28
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 30);
        echo "
<div id=\"account-order\" class=\"container\">
  ";
        // line 32
        if (($context["success"] ?? null)) {
            // line 33
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 37
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 38
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 42
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 43
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 44
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 45
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 46
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 47
            echo "    ";
        } else {
            // line 48
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 49
            echo "    ";
        }
        // line 50
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 51), "get", [0 => "pageTitlePosition"], "method", false, false, false, 51) == "default")) {
            // line 52
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 54
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 58
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 63
        if (($context["invoice_no"] ?? null)) {
            echo " <b>";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "<br />
              ";
        }
        // line 64
        echo " <b>";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "<br />
              <b>";
        // line 65
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 66
        if (($context["payment_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "<br />
              ";
        }
        // line 68
        echo "              ";
        if (($context["shipping_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo " ";
        }
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 75
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 76
        if (($context["shipping_address"] ?? null)) {
            // line 77
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 78
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 82
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 83
        if (($context["shipping_address"] ?? null)) {
            // line 84
            echo "            <td class=\"text-left\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 85
        echo " </tr>
        </tbody>
      </table>

\t\t<div class=\"cart-table cart-mobile\">
\t\t\t<table class=\"table table-bordered\">
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 93
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t<div>";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
            echo " (";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 95);
            echo ")
\t\t\t\t\t\t\t\t";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
\t\t\t\t\t\t\t\t&nbsp;<small> - ";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 97);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 97);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
            echo " X ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 102);
            echo " <br/>
\t\t\t\t\t\t\t\t<b>";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 103);
            echo "</b>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"2\" style=\"border-bottom: 1px solid #ddd;\">
\t\t\t\t\t\t\t\t<div style=\"display:flex\">
\t\t\t\t\t\t\t\t\t";
            // line 110
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 110)) {
                echo " 
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 111);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\" style=\"width:100%; margin-right:5px;\"><i style=\"margin-right:5px\" class=\"fa fa-shopping-cart\"></i> ";
                echo ($context["button_reorder"] ?? null);
                echo "</a> 
\t\t\t\t\t\t\t\t\t";
            }
            // line 112
            echo " 
\t\t\t\t\t\t\t\t\t";
            // line 113
            if (twig_get_attribute($this->env, $this->source, $context["product"], "allow_return", [], "any", false, false, false, 113)) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 114);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_return"] ?? null);
                echo "\" class=\"btn btn-danger\" style=\"width:100%\"><i style=\"margin-right:5px\" class=\"fa fa-reply\"></i> ";
                echo ($context["button_return"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 122
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td class=\"text-left td-voucher\">";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 124);
            echo "</td>
\t\t\t\t\t\t\t<td class=\"text-right td-voucher\">";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 125);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t\t\t</tbody>

\t\t\t\t<tfoot>
\t\t\t\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 132
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-right\"><b>";
            // line 133
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 133);
            echo "</b></td>
\t\t\t\t\t\t<td class=\"text-right\">";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 134);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t\t\t\t</tfoot>
\t\t\t</table>
        </div>
\t\t\t
      <div class=\"table-responsive\">
        
\t\t\t\t<table class=\"table table-bordered table-hover table-order cart-desktop\">
\t\t\t
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 147
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 148
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 149
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 150
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 151
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 152
        if (($context["products"] ?? null)) {
            // line 153
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 154
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 159
            echo "          <tr class=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 159)], "method", false, false, false, 159);
            echo "\">
            <td class=\"text-left\">";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 160);
            echo "
              ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
              &nbsp;<small> - ";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 162);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 163
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 163);
            echo "</td>
            <td class=\"text-right\">";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 164);
            echo "</td>
            <td class=\"text-right\">";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 165);
            echo "</td>
            <td class=\"text-right\">";
            // line 166
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 166);
            echo "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 167
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 167)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 167);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 167);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 171
            echo "          <tr>
            <td class=\"text-left\">";
            // line 172
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 172);
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 175
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 175);
            echo "</td>
            <td class=\"text-right\">";
            // line 176
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 176);
            echo "</td>
            ";
            // line 177
            if (($context["products"] ?? null)) {
                // line 178
                echo "            <td></td>
            ";
            }
            // line 179
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 186
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 188
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 188);
            echo "</b></td>
            <td class=\"text-right\">";
            // line 189
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 189);
            echo "</td>
            ";
            // line 190
            if (($context["products"] ?? null)) {
                // line 191
                echo "            <td></td>
            ";
            }
            // line 192
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 198
        if (($context["comment"] ?? null)) {
            // line 199
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 202
            echo ($context["text_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 207
            echo ($context["comment"] ?? null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 212
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 213
            echo "      <h2 class=\"title\">";
            echo ($context["text_history"] ?? null);
            echo "</h2>
      <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 218
            echo ($context["column_date_added"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 219
            echo ($context["column_status"] ?? null);
            echo "</td>
            <td class=\"text-left\">";
            // line 220
            echo ($context["column_comment"] ?? null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 225
            if (($context["histories"] ?? null)) {
                // line 226
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 227
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 228
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 228);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 229);
                    echo "</td>
          <td class=\"text-left\">";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 230);
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "        ";
            } else {
                // line 234
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 235
                echo ($context["text_no_results"] ?? null);
                echo "</td>
        </tr>
        ";
            }
            // line 238
            echo "          </tbody>
        
      </table>
      </div>
      ";
        }
        // line 243
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 244
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 246
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 247
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 249
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  694 => 249,  689 => 247,  685 => 246,  678 => 244,  675 => 243,  668 => 238,  662 => 235,  659 => 234,  656 => 233,  647 => 230,  643 => 229,  639 => 228,  636 => 227,  631 => 226,  629 => 225,  621 => 220,  617 => 219,  613 => 218,  604 => 213,  601 => 212,  593 => 207,  585 => 202,  580 => 199,  578 => 198,  572 => 194,  565 => 192,  561 => 191,  559 => 190,  555 => 189,  551 => 188,  547 => 186,  543 => 185,  537 => 181,  530 => 179,  526 => 178,  524 => 177,  520 => 176,  516 => 175,  510 => 172,  507 => 171,  502 => 170,  483 => 167,  479 => 166,  475 => 165,  471 => 164,  467 => 163,  456 => 162,  450 => 161,  446 => 160,  441 => 159,  437 => 158,  431 => 154,  427 => 153,  425 => 152,  421 => 151,  417 => 150,  413 => 149,  409 => 148,  405 => 147,  393 => 137,  384 => 134,  380 => 133,  377 => 132,  373 => 131,  368 => 128,  359 => 125,  355 => 124,  351 => 122,  347 => 121,  344 => 120,  334 => 115,  324 => 114,  322 => 113,  319 => 112,  310 => 111,  306 => 110,  296 => 103,  290 => 102,  284 => 98,  275 => 97,  269 => 96,  263 => 95,  259 => 93,  255 => 92,  246 => 85,  240 => 84,  238 => 83,  234 => 82,  228 => 78,  222 => 77,  220 => 76,  216 => 75,  199 => 68,  190 => 66,  184 => 65,  177 => 64,  168 => 63,  160 => 58,  152 => 54,  146 => 52,  144 => 51,  139 => 50,  136 => 49,  133 => 48,  130 => 47,  127 => 46,  124 => 45,  121 => 44,  119 => 43,  114 => 42,  106 => 38,  103 => 37,  95 => 33,  93 => 32,  88 => 30,  82 => 28,  80 => 27,  77 => 26,  66 => 24,  62 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/order_info.twig", "");
    }
}
