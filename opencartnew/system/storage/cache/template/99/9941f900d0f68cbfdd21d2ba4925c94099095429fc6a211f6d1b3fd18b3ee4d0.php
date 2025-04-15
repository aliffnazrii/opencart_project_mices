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

/* extension/module/xilnex_products.twig */
class __TwigTemplate_91c87e771d55899860b6302910061a760fa590503cac2ad25b5345d19bc13ffe extends \Twig\Template
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

\t\t\t\t\t\t<div class=\"form-group text-right\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-reset\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i>";
        // line 27
        echo ($context["button_reset"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i>";
        // line 28
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
        // line 36
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 43
        echo ($context["column_product"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 44
        echo ($context["column_option"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 45
        echo ($context["column_model"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 46
        echo ($context["column_quantity"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 47
        echo ($context["column_price"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 48
        echo ($context["column_outlet"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 49
        echo ($context["column_date_modified"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 53
        if (($context["products"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 56);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 57);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 58);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 59);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 60);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["product"], "outlet", [], "any", false, false, false, 61);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_modified", [], "any", false, false, false, 62);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"6\">";
            // line 67
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 74
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 75
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
\t\tlocation = 'index.php?route=extension/module/xilnex/productOutlets&user_token=";
        // line 92
        echo ($context["user_token"] ?? null);
        echo "' + url;
\t});

\t\$('#button-reset').on('click', function () {
\t\turl = '';
\t\tlocation = 'index.php?route=extension/module/xilnex/productOutlets&user_token=";
        // line 97
        echo ($context["user_token"] ?? null);
        echo "' + url;
\t});
</script>
";
        // line 100
        echo ($context["footer"] ?? null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/xilnex_products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 100,  244 => 97,  236 => 92,  216 => 75,  212 => 74,  206 => 70,  200 => 67,  197 => 66,  194 => 65,  185 => 62,  181 => 61,  177 => 60,  173 => 59,  169 => 58,  165 => 57,  161 => 56,  158 => 55,  153 => 54,  151 => 53,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  120 => 43,  110 => 36,  99 => 28,  95 => 27,  86 => 23,  82 => 22,  75 => 18,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xilnex_products.twig", "");
    }
}
