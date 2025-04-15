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

/* marketing/coupon_list.twig */
class __TwigTemplate_7f88b1ddde1acbcb978516127b5cacb9f336b0e75523c709789756650f551afa extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-coupon').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "name")) {
            // line 39
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 41
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 42
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        if ((($context["sort"] ?? null) == "code")) {
            // line 44
            echo "                    <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 46
            echo "                    <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
                    ";
        }
        // line 47
        echo "</td>
                  <td class=\"text-right\">";
        // line 48
        if ((($context["sort"] ?? null) == "discount")) {
            // line 49
            echo "                    <a href=\"";
            echo ($context["sort_discount"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_discount"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 51
            echo "                    <a href=\"";
            echo ($context["sort_discount"] ?? null);
            echo "\">";
            echo ($context["column_discount"] ?? null);
            echo "</a>
                    ";
        }
        // line 52
        echo "</td>

\t\t\t\t<td class=\"text-left\">";
        // line 54
        if ((($context["sort"] ?? null) == "voucher_id")) {
            // line 55
            echo "                    <a href=\"";
            echo ($context["sort_voucher_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_voucher_id"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 57
            echo "                    <a href=\"";
            echo ($context["sort_voucher_id"] ?? null);
            echo "\">";
            echo ($context["column_voucher_id"] ?? null);
            echo "</a>
                    ";
        }
        // line 58
        echo "</td>
\t\t\t\t<td class=\"text-left\">";
        // line 59
        if ((($context["sort"] ?? null) == "voucher_serialNo")) {
            // line 60
            echo "                    <a href=\"";
            echo ($context["sort_voucher_serialNo"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_voucher_serialNo"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 62
            echo "                    <a href=\"";
            echo ($context["sort_voucher_serialNo"] ?? null);
            echo "\">";
            echo ($context["column_voucher_serialNo"] ?? null);
            echo "</a>
                    ";
        }
        // line 63
        echo "</td>
\t\t\t\t
                  <td class=\"text-left\">";
        // line 65
        if ((($context["sort"] ?? null) == "date_start")) {
            // line 66
            echo "                    <a href=\"";
            echo ($context["sort_date_start"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_start"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 68
            echo "                    <a href=\"";
            echo ($context["sort_date_start"] ?? null);
            echo "\">";
            echo ($context["column_date_start"] ?? null);
            echo "</a>
                    ";
        }
        // line 69
        echo "</td>
                  <td class=\"text-left\">";
        // line 70
        if ((($context["sort"] ?? null) == "date_end")) {
            // line 71
            echo "                    <a href=\"";
            echo ($context["sort_date_end"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_end"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 73
            echo "                    <a href=\"";
            echo ($context["sort_date_end"] ?? null);
            echo "\">";
            echo ($context["column_date_end"] ?? null);
            echo "</a>
                    ";
        }
        // line 74
        echo "</td>
                  <td class=\"text-left\">";
        // line 75
        if ((($context["sort"] ?? null) == "status")) {
            // line 76
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 78
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 79
        echo "</td>
                  <td class=\"text-right\">";
        // line 80
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 84
        if (($context["coupons"] ?? null)) {
            // line 85
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 86
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 87
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 87), ($context["selected"] ?? null))) {
                    // line 88
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 88);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 90
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 90);
                    echo "\" />
                    ";
                }
                // line 91
                echo "</td>
                  <td class=\"text-left\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 92);
                echo "</td>
                  <td class=\"text-left\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 93);
                echo "</td>
                  <td class=\"text-right\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 94);
                echo "</td>
                  <td class=\"text-left\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 95);
                echo "</td>
                  <td class=\"text-left\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 96);
                echo "</td>
                  <td class=\"text-left\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 97);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "edit", [], "any", false, false, false, 98);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                ";
        } else {
            // line 102
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 103
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 106
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 111
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 112
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 118
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "marketing/coupon_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 118,  402 => 112,  398 => 111,  391 => 106,  385 => 103,  382 => 102,  379 => 101,  368 => 98,  364 => 97,  360 => 96,  356 => 95,  352 => 94,  348 => 93,  344 => 92,  341 => 91,  335 => 90,  329 => 88,  327 => 87,  324 => 86,  319 => 85,  317 => 84,  310 => 80,  307 => 79,  299 => 78,  289 => 76,  287 => 75,  284 => 74,  276 => 73,  266 => 71,  264 => 70,  261 => 69,  253 => 68,  243 => 66,  241 => 65,  237 => 63,  229 => 62,  219 => 60,  217 => 59,  214 => 58,  206 => 57,  196 => 55,  194 => 54,  190 => 52,  182 => 51,  172 => 49,  170 => 48,  167 => 47,  159 => 46,  149 => 44,  147 => 43,  144 => 42,  136 => 41,  126 => 39,  124 => 38,  115 => 32,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/coupon_list.twig", "");
    }
}
