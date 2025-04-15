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

/* extension/module/xilnex_order.twig */
class __TwigTemplate_73c7924b12c25357ed348162111d5fc018a17df9ddac5d913e08ecc9d32c4373 extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "\t\t\t\t\t<li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i>";
        // line 18
        echo ($context["text_filter"] ?? null);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-order-id\">";
        // line 22
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 23
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-xilnex-order-id\">";
        // line 27
        echo ($context["entry_xilnex_order_id"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_xilnex_order_id\" value=\"";
        // line 28
        echo ($context["filter_xilnex_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_xilnex_order_id"] ?? null);
        echo "\" id=\"input-xilnex-order-id\" class=\"form-control\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-customer\">";
        // line 32
        echo ($context["entry_customer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_customer\" value=\"";
        // line 33
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-sales-date\">";
        // line 37
        echo ($context["entry_sales_date"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_sales_date\" value=\"";
        // line 39
        echo ($context["filter_sales_date"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sales_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-sales-date\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-has-error\">";
        // line 47
        echo ($context["entry_has_error"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<select name=\"filter_has_error\" id=\"input-has-error\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 50
        if ((($context["filter_has_error"] ?? null) == "1")) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo "
\t\t\t\t\t\t\t\t";
        // line 56
        if ((($context["filter_has_error"] ?? null) == "0")) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group text-right\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-reset\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i>";
        // line 65
        echo ($context["button_reset"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i>";
        // line 66
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-9 col-md-pull-3 col-sm-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 74
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
                      \t\t\t\t\t<td class=\"text-left\">";
        // line 81
        if ((($context["sort"] ?? null) == "xo.order_id")) {
            echo "<a href=\"";
            echo ($context["sort_order_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_order_id"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      \t\t\t\t\t<td class=\"text-left\">";
        // line 82
        if ((($context["sort"] ?? null) == "xo.xilnex_order_id")) {
            echo "<a href=\"";
            echo ($context["sort_xilnex_order_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_xilnex_id"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_xilnex_order_id"] ?? null);
            echo "\">";
            echo ($context["column_xilnex_id"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      \t\t\t\t\t<td class=\"text-left\">";
        // line 83
        if ((($context["sort"] ?? null) == "customer")) {
            echo "<a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>";
        }
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 84
        echo ($context["column_outlet"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 85
        echo ($context["column_status"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 86
        echo ($context["column_sync_order_status"] ?? null);
        echo "</td>
                      \t\t\t\t\t<td class=\"text-left\">";
        // line 87
        if ((($context["sort"] ?? null) == "xo.total")) {
            echo "<a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      \t\t\t\t\t<td class=\"text-left\">";
        // line 88
        if ((($context["sort"] ?? null) == "xo.sales_date")) {
            echo "<a href=\"";
            echo ($context["sort_sales_date"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sales_date"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_sales_date"] ?? null);
            echo "\">";
            echo ($context["column_sales_date"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      \t\t\t\t\t<td class=\"text-left\">";
        // line 89
        if ((($context["sort"] ?? null) == "xo.date_added")) {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        }
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 90
        echo ($context["column_error"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 91
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 95
        if (($context["orders"] ?? null)) {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><a href=\"";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 98);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 98);
                echo "</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["order"], "xilnex_order_id", [], "any", false, false, false, 99);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 100);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["order"], "outlet", [], "any", false, false, false, 101);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 102);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 104
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "sync_order_status", [], "any", false, false, false, 104) == 1)) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">";
                    echo ($context["text_synced"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "job_id", [], "any", false, false, false, 107) > 0)) {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">";
                        echo ($context["text_syncing"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">";
                        echo ($context["text_order_not_synced"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 114);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["order"], "sales_date", [], "any", false, false, false, 115);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 116);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 118
                if (twig_get_attribute($this->env, $this->source, $context["order"], "error", [], "any", false, false, false, 118)) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-exclamation-circle fa-2x text-danger\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "error", [], "any", false, false, false, 119);
                    echo "\" data-original-title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "error", [], "any", false, false, false, 119);
                    echo "\"></i></span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 123
                if (twig_get_attribute($this->env, $this->source, $context["order"], "resync", [], "any", false, false, false, 123)) {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary button-resync\" href=\"#\" data-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "resync", [], "any", false, false, false, 124);
                    echo "\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
                    echo ($context["button_resync_order"] ?? null);
                    echo "\" data-original-title=\"";
                    echo ($context["button_resync_order"] ?? null);
                    echo "\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"8\">";
            // line 131
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 138
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 139
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
\t\$('#button-filter').on('click', function () {
\t\turl = '';

\t\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();
\t\tif (filter_order_id) {
\t\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t\t}

\t\tvar filter_xilnex_order_id = \$('input[name=\\'filter_xilnex_order_id\\']').val();
\t\tif (filter_xilnex_order_id) {
\t\t\turl += '&filter_xilnex_order_id=' + encodeURIComponent(filter_xilnex_order_id);
\t\t}

\t\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t\tif (filter_customer) {
\t\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t\t}

\t\tvar filter_sales_date = \$('input[name=\\'filter_sales_date\\']').val();
\t\tif (filter_sales_date) {
\t\t\turl += '&filter_sales_date=' + encodeURIComponent(filter_sales_date);
\t\t}

\t\tvar filter_has_error = \$('select[name=\\'filter_has_error\\']').val();
\t\tif (filter_has_error) {
\t\t\turl += '&filter_has_error=' + encodeURIComponent(filter_has_error);
\t\t}

\t\tlocation = 'index.php?route=extension/module/xilnex/order&user_token=";
        // line 177
        echo ($context["user_token"] ?? null);
        echo "' + url;
\t});

\t\$('#button-reset').on('click', function () {
\t\turl = '';
\t\tlocation = 'index.php?route=extension/module/xilnex/order&user_token=";
        // line 182
        echo ($context["user_token"] ?? null);
        echo "' + url;
\t});

\t\$('.button-resync').on('click', function (e) {
\t\te.preventDefault();
\t\tvar button = \$(this);

\t\tvar resync_url = \$(this).data('url');

\t\t\$.ajax({
\t\t\turl: resync_url,
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(button).button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(button).button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);
\t\t\t\t\t\$('#button-filter').trigger('click')
\t\t\t\t}

\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});\t
\t});

\t\$('input[name=\\'filter_customer\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 219
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t\t}
\t});
</script>";
        // line 235
        echo ($context["footer"] ?? null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/xilnex_order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 235,  558 => 219,  518 => 182,  510 => 177,  469 => 139,  465 => 138,  459 => 134,  453 => 131,  450 => 130,  447 => 129,  439 => 126,  429 => 124,  427 => 123,  423 => 121,  415 => 119,  413 => 118,  408 => 116,  404 => 115,  400 => 114,  397 => 113,  394 => 112,  388 => 110,  382 => 108,  379 => 107,  373 => 105,  371 => 104,  366 => 102,  362 => 101,  358 => 100,  354 => 99,  348 => 98,  345 => 97,  340 => 96,  338 => 95,  331 => 91,  327 => 90,  309 => 89,  291 => 88,  273 => 87,  269 => 86,  265 => 85,  261 => 84,  243 => 83,  225 => 82,  207 => 81,  197 => 74,  186 => 66,  182 => 65,  176 => 61,  170 => 59,  164 => 57,  162 => 56,  159 => 55,  153 => 53,  147 => 51,  145 => 50,  139 => 47,  126 => 39,  121 => 37,  112 => 33,  108 => 32,  99 => 28,  95 => 27,  86 => 23,  82 => 22,  75 => 18,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xilnex_order.twig", "");
    }
}
