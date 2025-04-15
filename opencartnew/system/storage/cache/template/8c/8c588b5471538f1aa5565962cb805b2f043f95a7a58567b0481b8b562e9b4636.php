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

/* extension/module/xilnex_inventory.twig */
class __TwigTemplate_09c83dc281bf0a4e1460ede8c511eb761732e8e80b0123f107531bf5a015e1f7 extends \Twig\Template
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
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 9
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
        // line 12
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
        // line 22
        echo ($context["text_filter"] ?? null);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-order-id\">";
        // line 26
        echo ($context["entry_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_model\" value=\"";
        // line 27
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-start-date\">";
        // line 31
        echo ($context["entry_start_date"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_start_date\" value=\"";
        // line 33
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
        // line 43
        echo ($context["entry_end_date"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_end_date\" value=\"";
        // line 45
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
        // line 57
        echo ($context["button_reset"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-filter\"></i>
\t\t\t\t\t\t\t\t";
        // line 60
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
        // line 70
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 77
        echo ($context["column_date_added"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 78
        echo ($context["column_product"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 79
        echo ($context["column_option"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 80
        echo ($context["column_model"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 81
        echo ($context["column_old_quantity"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 82
        echo ($context["column_new_quantity"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 83
        echo ($context["column_remark"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 87
        if (($context["inventory_logs"] ?? null)) {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["inventory_logs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["inventory_log"]) {
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["inventory_log"], "date_added", [], "any", false, false, false, 90);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["inventory_log"], "product", [], "any", false, false, false, 91);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["inventory_log"], "option", [], "any", false, false, false, 92);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["inventory_log"], "model", [], "any", false, false, false, 93);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["inventory_log"], "old_quantity", [], "any", false, false, false, 94);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["inventory_log"], "new_quantity", [], "any", false, false, false, 95);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["inventory_log"], "remark", [], "any", false, false, false, 96);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inventory_log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"6\">";
            // line 101
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 108
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 109
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\"><!--
\t\t\$('#button-filter').on('click', function () {
\t\t\turl = '';

\t\t\tvar filter_model = \$('input[name=\\'filter_model\\']').val();
\t\t\tif (filter_model) {
\t\t\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t\t\t}

\t\t\tvar filter_start_date = \$('input[name=\\'filter_start_date\\']').val();
\t\t\tif (filter_start_date) {
\t\t\t\turl += '&filter_start_date=' + encodeURIComponent(filter_start_date);
\t\t\t}

\t\t\tvar filter_end_date = \$('input[name=\\'filter_end_date\\']').val();
\t\t\tif (filter_end_date) {
\t\t\t\turl += '&filter_end_date=' + encodeURIComponent(filter_end_date);
\t\t\t}

\t\t\tlocation = 'index.php?route=extension/module/xilnex/inventory&user_token=";
        // line 136
        echo ($context["user_token"] ?? null);
        echo "' + url;
\t\t});

\t\t\$('#button-reset').on('click', function () {
\t\t\turl = '';
\t\t\tlocation = 'index.php?route=extension/module/xilnex/inventory&user_token=";
        // line 141
        echo ($context["user_token"] ?? null);
        echo "' + url;
\t\t});
  //--></script>
\t<script type=\"text/javascript\"><!--
\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 146
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickTime: false
\t});
  //--></script>
\t";
        // line 150
        echo ($context["footer"] ?? null);
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/xilnex_inventory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 150,  313 => 146,  305 => 141,  297 => 136,  267 => 109,  263 => 108,  257 => 104,  251 => 101,  248 => 100,  245 => 99,  236 => 96,  232 => 95,  228 => 94,  224 => 93,  220 => 92,  216 => 91,  212 => 90,  209 => 89,  204 => 88,  202 => 87,  195 => 83,  191 => 82,  187 => 81,  183 => 80,  179 => 79,  175 => 78,  171 => 77,  161 => 70,  148 => 60,  142 => 57,  125 => 45,  120 => 43,  105 => 33,  100 => 31,  91 => 27,  87 => 26,  80 => 22,  68 => 12,  57 => 9,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xilnex_inventory.twig", "");
    }
}
