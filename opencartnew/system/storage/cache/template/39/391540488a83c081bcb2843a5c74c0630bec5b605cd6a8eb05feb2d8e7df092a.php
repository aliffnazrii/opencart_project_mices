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

/* extension/module/xilnex_customer_group_history.twig */
class __TwigTemplate_cdf10f7e19ee270dcd068ed8bc1a1f8cb0fc808737c60a7ab3e0f90d1d856342 extends \Twig\Template
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
        if ( !($context["table_only"] ?? null)) {
            // line 2
            echo ($context["header"] ?? null);
            echo ($context["column_left"] ?? null);
            echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<h1>";
            // line 6
            echo ($context["heading_title"] ?? null);
            echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 9
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 10
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t<i class=\"fa fa-filter\"></i>
\t\t\t\t\t\t\t";
            // line 23
            echo ($context["text_filter"] ?? null);
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-customer\">";
            // line 27
            echo ($context["entry_customer"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_customer\" value=\"";
            // line 28
            echo ($context["filter_customer"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_customer"] ?? null);
            echo "\" id=\"input-customer\" class=\"form-control\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-telephone\">";
            // line 32
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_telephone\" value=\"";
            // line 33
            echo ($context["filter_telephone"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-start-date\">";
            // line 37
            echo ($context["entry_start_date"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_start_date\" value=\"";
            // line 39
            echo ($context["filter_start_date"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_start_date"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-start-date\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-end-date\">";
            // line 49
            echo ($context["entry_end_date"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_end_date\" value=\"";
            // line 51
            echo ($context["filter_end_date"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_end_date"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-end-date\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group text-right\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-reset\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t\t\t\t\t";
            // line 63
            echo ($context["button_reset"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-filter\"></i>
\t\t\t\t\t\t\t\t";
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
\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t";
            // line 76
            echo ($context["heading_title"] ?? null);
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
";
        }
        // line 80
        echo "\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 84
        echo ($context["column_date_added"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 85
        echo ($context["column_customer"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 86
        echo ($context["column_telephone"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 87
        echo ($context["column_old_customer_group"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 88
        echo ($context["column_new_customer_group"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 89
        echo ($context["column_description"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 90
        echo ($context["column_updated_by"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 94
        if (($context["customer_group_histories"] ?? null)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_group_histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group_history"]) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["customer_group_history"], "date_added", [], "any", false, false, false, 97);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><a href=\"";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["customer_group_history"], "customer_url", [], "any", false, false, false, 98);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group_history"], "customer", [], "any", false, false, false, 98);
                echo "</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["customer_group_history"], "telephone", [], "any", false, false, false, 99);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["customer_group_history"], "old_customer_group", [], "any", false, false, false, 100);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["customer_group_history"], "new_customer_group", [], "any", false, false, false, 101);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["customer_group_history"], "description", [], "any", false, false, false, 102);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["customer_group_history"], "updated_by_name", [], "any", false, false, false, 103);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group_history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"6\">";
            // line 108
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 111
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 115
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 116
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
";
        // line 118
        if ( !($context["table_only"] ?? null)) {
            // line 119
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\"><!--
\t\t\$('#button-filter').on('click', function () {
\t\t\turl = '';

\t\t\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t\t\tif (filter_customer) {
\t\t\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t\t\t}

\t\t\tvar filter_telephone = \$('input[name=\\'filter_telephone\\']').val();
\t\t\tif (filter_telephone) {
\t\t\t\turl += '&filter_telephone=' + encodeURIComponent(filter_telephone);
\t\t\t}

\t\t\tvar filter_start_date = \$('input[name=\\'filter_start_date\\']').val();
\t\t\tif (filter_start_date) {
\t\t\t\turl += '&filter_start_date=' + encodeURIComponent(filter_start_date);
\t\t\t}

\t\t\tvar filter_end_date = \$('input[name=\\'filter_end_date\\']').val();
\t\t\tif (filter_end_date) {
\t\t\t\turl += '&filter_end_date=' + encodeURIComponent(filter_end_date);
\t\t\t}

\t\t\tlocation = 'index.php?route=extension/module/xilnex/tierHistory&user_token=";
            // line 149
            echo ($context["user_token"] ?? null);
            echo "' + url;
\t\t});

\t\t\$('#button-reset').on('click', function () {
\t\t\turl = '';
\t\t\tlocation = 'index.php?route=extension/module/xilnex/tierHistory&user_token=";
            // line 154
            echo ($context["user_token"] ?? null);
            echo "' + url;
\t\t});
  //--></script>
\t<script type=\"text/javascript\"><!--
\t\t\$('.date').datetimepicker({
\t\t\tlanguage: '";
            // line 159
            echo ($context["datepicker"] ?? null);
            echo "',
\t\t\tpickTime: false
\t\t});
  //--></script>

\t\t<script type=\"text/javascript\"><!--
\t\t\$('input[name=\\'filter_customer\\']').autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
            // line 168
            echo ($context["user_token"] ?? null);
            echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\tlabel: item['name'],
\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t\t},
\t\t\t'select': function(item) {
\t\t\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t\t\t}
\t\t});
\t\t//--></script>

\t";
            // line 186
            echo ($context["footer"] ?? null);
            echo "

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "extension/module/xilnex_customer_group_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 186,  354 => 168,  342 => 159,  334 => 154,  326 => 149,  294 => 119,  292 => 118,  287 => 116,  283 => 115,  277 => 111,  271 => 108,  268 => 107,  265 => 106,  256 => 103,  252 => 102,  248 => 101,  244 => 100,  240 => 99,  234 => 98,  230 => 97,  227 => 96,  222 => 95,  220 => 94,  213 => 90,  209 => 89,  205 => 88,  201 => 87,  197 => 86,  193 => 85,  189 => 84,  183 => 80,  176 => 76,  163 => 66,  157 => 63,  140 => 51,  135 => 49,  120 => 39,  115 => 37,  106 => 33,  102 => 32,  93 => 28,  89 => 27,  82 => 23,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  47 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xilnex_customer_group_history.twig", "");
    }
}
