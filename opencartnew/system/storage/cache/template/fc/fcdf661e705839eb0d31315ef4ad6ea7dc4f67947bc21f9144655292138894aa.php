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

/* extension/module/acilit.twig */
class __TwigTemplate_59acad320fd45f64627b90737774d968291beb11a03fee1d9249e8c960254207 extends \Twig\Template
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
        echo ($context["pull_settings_url"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["help_pull_settings"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></a>
                <button type=\"submit\" form=\"form-acilit-setting\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 23
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 28
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-acilit-setting\"  class=\"form-horizontal\">
                    <fieldset>
                        <legend>";
        // line 35
        echo ($context["text_general"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"app-id\">";
        // line 37
        echo ($context["entry_username"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_acilit_username\" id=\"username\" class=\"form-control\" value=\"";
        // line 39
        echo ($context["module_acilit_username"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"app-id\">";
        // line 44
        echo ($context["entry_password"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_acilit_password\" id=\"password\" class=\"form-control\" value=\"";
        // line 46
        echo ($context["module_acilit_password"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"status\">";
        // line 51
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 53
        if (($context["module_acilit_status"] ?? null)) {
            // line 54
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"1\" checked=\"checked\" /> ";
            // line 55
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"0\" /> ";
            // line 58
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 61
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"1\" /> ";
            // line 62
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"0\" checked=\"checked\" /> ";
            // line 65
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 68
        echo "                            </div>
                        </div>
                    </fieldset>

                   

                    <fieldset>
                        <legend>";
        // line 75
        echo ($context["text_order"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 77
        echo ($context["entry_pull_order_date"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"module_acilit_pull_order_date\" value=\"";
        // line 80
        echo ($context["module_acilit_pull_order_date"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pull_order_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-pull-order-date\" class=\"form-control\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 89
        echo ($context["entry_order_sync_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">                     
                                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 93
            echo "                                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 93), ($context["module_acilit_order_sync_status"] ?? null))) {
                // line 94
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_acilit_order_sync_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 94);
                echo "\" checked=\"checked\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 94);
                echo "</label></div>
                                        ";
            } else {
                // line 96
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_acilit_order_sync_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 96);
                echo "\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 96);
                echo "</label></div>
                                        ";
            }
            // line 98
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 104
        echo ($context["entry_order_complete_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"module_acilit_order_complete_status\" id=\"input-order-status\" class=\"form-control\">
                                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 108
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 108) == ($context["module_acilit_order_complete_status"] ?? null))) {
                // line 109
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 109);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 109);
                echo "</option>
                                    ";
            } else {
                // line 111
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 111);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 111);
                echo "</option>
                                    ";
            }
            // line 113
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 119
        echo ($context["entry_order_canceled_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"module_acilit_order_canceled_status\" class=\"form-control\">
                                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 123
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 123) == ($context["module_acilit_order_canceled_status"] ?? null))) {
                // line 124
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 124);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 124);
                echo "</option>
                                    ";
            } else {
                // line 126
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 126);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 126);
                echo "</option>
                                    ";
            }
            // line 128
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                </select>
                            </div>
                        </div>

                      
                    </fieldset>

                    <fieldset>
                        <legend>";
        // line 137
        echo ($context["text_products"] ?? null);
        echo "</legend>
                        

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 141
        echo ($context["entry_sync_product_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 143
        if (($context["module_acilit_sync_product_status"] ?? null)) {
            // line 144
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" checked=\"checked\" /> ";
            // line 145
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" /> ";
            // line 148
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 151
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" /> ";
            // line 152
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" checked=\"checked\" /> ";
            // line 155
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 158
        echo "                            </div>
                        </div>
                         <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 161
        echo ($context["entry_sync_customer_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                            ";
        // line 163
        if (($context["module_acilit_sync_customer_status"] ?? null)) {
            // line 164
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" checked=\"checked\" /> ";
            // line 165
            echo ($context["text_enabled"] ?? null);
            echo "
                                </label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" /> ";
            // line 168
            echo ($context["text_disabled"] ?? null);
            echo "
                                </label>
                            ";
        } else {
            // line 171
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" /> ";
            // line 172
            echo ($context["text_enabled"] ?? null);
            echo "
                                </label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" checked=\"checked\" /> ";
            // line 175
            echo ($context["text_disabled"] ?? null);
            echo "
                                </label>
                            ";
        }
        // line 178
        echo "                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 187
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  \$('.select-customer-type').on('change', function () {
    var customer_group_id = \$(this).data('customer-group-id');
    var customer_type = \$(this).val();
    \$('#discount-percentage-' + customer_group_id).val(customer_type);
  });
  //--></script>

";
        // line 198
        echo ($context["footer"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/acilit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 198,  447 => 187,  436 => 178,  430 => 175,  424 => 172,  421 => 171,  415 => 168,  409 => 165,  406 => 164,  404 => 163,  399 => 161,  394 => 158,  388 => 155,  382 => 152,  379 => 151,  373 => 148,  367 => 145,  364 => 144,  362 => 143,  357 => 141,  350 => 137,  340 => 129,  334 => 128,  326 => 126,  318 => 124,  315 => 123,  311 => 122,  305 => 119,  298 => 114,  292 => 113,  284 => 111,  276 => 109,  273 => 108,  269 => 107,  263 => 104,  256 => 99,  250 => 98,  242 => 96,  234 => 94,  231 => 93,  227 => 92,  221 => 89,  207 => 80,  201 => 77,  196 => 75,  187 => 68,  181 => 65,  175 => 62,  172 => 61,  166 => 58,  160 => 55,  157 => 54,  155 => 53,  150 => 51,  142 => 46,  137 => 44,  129 => 39,  124 => 37,  119 => 35,  114 => 33,  108 => 30,  104 => 28,  96 => 24,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/acilit.twig", "");
    }
}
