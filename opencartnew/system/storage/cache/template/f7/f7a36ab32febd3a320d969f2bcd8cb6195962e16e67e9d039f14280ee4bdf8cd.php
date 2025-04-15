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

/* extension/total/point_transaction_info.twig */
class __TwigTemplate_315f7bef7b33818fa50c203e89543d93b79607318f5883aa1722133dc94813f9 extends \Twig\Template
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
      <div class=\"pull-right\">
        <a href=\"";
        // line 6
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 18
        echo ($context["text_info"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 23
        echo ($context["text_customer_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 form-control-static\">
              ";
        // line 25
        echo ($context["name"] ?? null);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 29
        echo ($context["text_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 form-control-static\">
              ";
        // line 31
        echo (((twig_get_attribute($this->env, $this->source, ($context["transaction_types"] ?? null), ($context["type"] ?? null), [], "array", true, true, false, 31) &&  !(null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["transaction_types"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["type"] ?? null)] ?? null) : null)))) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["transaction_types"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["type"] ?? null)] ?? null) : null)) : (twig_capitalize_string_filter($this->env, ($context["type"] ?? null))));
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 35
        echo ($context["text_order_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 form-control-static\">
              ";
        // line 37
        echo ($context["order_id"] ?? null);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 41
        echo ($context["text_description"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 form-control-static\">
              ";
        // line 43
        echo ($context["description"] ?? null);
        echo "
              ";
        // line 44
        if (((($context["type"] ?? null) == "aflex_award") && ($context["aflex_sales_invoice_url"] ?? null))) {
            // line 45
            echo "              <br>
              <a href=\"";
            // line 46
            echo ($context["aflex_sales_invoice_url"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["text_view_invoice"] ?? null);
            echo "</a>
              ";
        }
        // line 48
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 51
        echo ($context["text_points"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 form-control-static\">
              ";
        // line 53
        echo ($context["points"] ?? null);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 57
        echo ($context["text_refunded"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 form-control-static\">
              ";
        // line 59
        echo ($context["refunded"] ?? null);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 63
        echo ($context["text_date_added"] ?? null);
        echo "</label>
            <div class=\"col-sm-10 form-control-static\">
              ";
        // line 65
        echo ($context["date_added"] ?? null);
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 73
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/total/point_transaction_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 73,  179 => 65,  174 => 63,  167 => 59,  162 => 57,  155 => 53,  150 => 51,  145 => 48,  138 => 46,  135 => 45,  133 => 44,  129 => 43,  124 => 41,  117 => 37,  112 => 35,  105 => 31,  100 => 29,  93 => 25,  88 => 23,  80 => 18,  72 => 12,  61 => 10,  57 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/total/point_transaction_info.twig", "");
    }
}
