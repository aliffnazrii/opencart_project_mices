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

/* journal3/template/account/order_list.twig */
class __TwigTemplate_d6cc29babf98fd9d03992c66d95afd05da4ba981ad2faafd336d3a4873ad91ee extends \Twig\Template
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
\t\t\t\t\t}

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
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 23
            echo "  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 23);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 23);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>
";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "pageTitlePosition"], "method", false, false, false, 26) == "top")) {
            // line 27
            echo "  
\t\t\t\t<h1 class=\"title page-title\"><span>";
            // line 28
            echo ($context["heading_title_alt"] ?? null);
            echo "</span></h1>
\t\t\t
";
        }
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 31);
        echo "
<div id=\"account-order\" class=\"container\">
  <div class=\"row\">";
        // line 33
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 34
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 35
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 36
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 37
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 40
            echo "    ";
        }
        // line 41
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 42), "get", [0 => "pageTitlePosition"], "method", false, false, false, 42) == "default")) {
            // line 43
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 45
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 46
        if (($context["orders"] ?? null)) {
            // line 47
            echo "      
\t\t\t \t<div class=\"table-responsive cart-mobile\">
\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 52
                echo "\t\t\t\t\t\t\t<tr data-url=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 52);
                echo "\">
\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"border-bottom: 1px solid #ddd\">
\t\t\t\t\t\t\t\t\t<span>";
                // line 54
                echo ($context["text_order_no"] ?? null);
                echo ":</span><br/>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 55);
                echo "\" style=\"text-decoration:none\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"link-button\">
\t\t\t\t\t\t\t\t\t\t<b style=\"font-size:20px\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 56);
                echo "</b>
\t\t\t\t\t\t\t\t\t</a><br/>
\t\t\t\t\t\t\t\t\t<span>";
                // line 58
                echo ($context["text_status"] ?? null);
                echo " : ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 58);
                echo "</span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\" style=\"border-bottom: 1px solid #ddd\">
\t\t\t\t\t\t\t\t\t<span style=\"color:#0071CE; font-size:16px\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 62);
                echo "</span><br/>
\t\t\t\t\t\t\t\t\t<span>";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 63);
                echo "</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
                <div class=\"table-responsive cart-desktop\">
\t\t\t
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 75
            echo ($context["column_order_id"] ?? null);
            echo "</td>
              <td class=\"text-center\">";
            // line 76
            echo ($context["column_customer"] ?? null);
            echo "</td>
              <td class=\"text-center\">";
            // line 77
            echo ($context["column_product"] ?? null);
            echo "</td>
              <td class=\"text-center\">";
            // line 78
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-center\">";
            // line 79
            echo ($context["column_total"] ?? null);
            echo "</td>
              <td class=\"text-center\">";
            // line 80
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 86
                echo "            <tr>
              <td class=\"text-center\">#";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 87);
                echo "</td>
              <td class=\"text-center\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 88);
                echo "</td>
              <td class=\"text-center\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 89);
                echo "</td>
              <td class=\"text-center\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 90);
                echo "</td>
              <td class=\"text-center\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 91);
                echo "</td>
              <td class=\"text-center\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 92);
                echo "</td>
              <td class=\"text-center\"><a href=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 93);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "          </tbody>
        </table>
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 100
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 101
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 104
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 106
        echo "
\t\t\t\t<!--
\t\t\t
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 110
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>

\t\t\t\t-->
\t\t\t
      ";
        // line 115
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 116
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

\t\t\t\t<script>
\t\t\t\t\t\$('.mobile tr').on('click', function(){
\t\t\t\t\t\tlet order_info_link = this.getAttribute('data-url');
\t\t\t\t\t\twindow.document.location = order_info_link;
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t
";
        // line 126
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 126,  315 => 116,  311 => 115,  301 => 110,  295 => 106,  289 => 104,  283 => 101,  279 => 100,  273 => 96,  262 => 93,  258 => 92,  254 => 91,  250 => 90,  246 => 89,  242 => 88,  238 => 87,  235 => 86,  231 => 85,  223 => 80,  219 => 79,  215 => 78,  211 => 77,  207 => 76,  203 => 75,  193 => 67,  183 => 63,  179 => 62,  170 => 58,  165 => 56,  159 => 55,  155 => 54,  149 => 52,  145 => 51,  139 => 47,  137 => 46,  132 => 45,  126 => 43,  124 => 42,  119 => 41,  116 => 40,  113 => 39,  110 => 38,  107 => 37,  104 => 36,  101 => 35,  99 => 34,  95 => 33,  90 => 31,  84 => 28,  81 => 27,  79 => 26,  76 => 25,  65 => 23,  61 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/order_list.twig", "");
    }
}
