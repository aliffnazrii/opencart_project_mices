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
class __TwigTemplate_f70aac0114d5bacc226325102dd7367313466e8d48abf8078851391e11d342de extends \Twig\Template
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
        echo ($context["entry_app_id"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_acilit_appid\" id=\"app-id\" class=\"form-control\" value=\"";
        // line 39
        echo ($context["module_acilit_appid"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"app-id\">";
        // line 44
        echo ($context["entry_token"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_acilit_token\" id=\"token\" class=\"form-control\" value=\"";
        // line 46
        echo ($context["module_acilit_token"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"auth\">";
        // line 51
        echo ($context["entry_auth"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_acilit_auth\" id=\"auth\" class=\"form-control\" value=\"";
        // line 53
        echo ($context["module_acilit_auth"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"status\">";
        // line 58
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 60
        if (($context["module_acilit_status"] ?? null)) {
            // line 61
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"1\" checked=\"checked\" /> ";
            // line 62
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"0\" /> ";
            // line 65
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 68
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"1\" /> ";
            // line 69
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"0\" checked=\"checked\" /> ";
            // line 72
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 75
        echo "                            </div>
                        </div>
                    </fieldset>

                   

                    <fieldset>
                        <legend>";
        // line 82
        echo ($context["text_order"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 84
        echo ($context["entry_pull_order_date"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"module_acilit_pull_order_date\" value=\"";
        // line 87
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
        // line 96
        echo ($context["entry_order_sync_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">                     
                                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 100
            echo "                                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 100), ($context["module_acilit_order_sync_status"] ?? null))) {
                // line 101
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_acilit_order_sync_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 101);
                echo "\" checked=\"checked\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 101);
                echo "</label></div>
                                        ";
            } else {
                // line 103
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_acilit_order_sync_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 103);
                echo "\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 103);
                echo "</label></div>
                                        ";
            }
            // line 105
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 111
        echo ($context["entry_order_complete_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"module_acilit_order_complete_status\" id=\"input-order-status\" class=\"form-control\">
                                ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 115
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 115) == ($context["module_acilit_order_complete_status"] ?? null))) {
                // line 116
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 116);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 116);
                echo "</option>
                                    ";
            } else {
                // line 118
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 118);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 118);
                echo "</option>
                                    ";
            }
            // line 120
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 126
        echo ($context["entry_order_canceled_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"module_acilit_order_canceled_status\" class=\"form-control\">
                                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 130
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 130) == ($context["module_acilit_order_canceled_status"] ?? null))) {
                // line 131
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 131);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 131);
                echo "</option>
                                    ";
            } else {
                // line 133
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 133);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 133);
                echo "</option>
                                    ";
            }
            // line 135
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"auth\">";
        // line 141
        echo ($context["entry_shipping_item_code"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_acilit_shipping_item_code\" id=\"shipping-item-code\" class=\"form-control\" value=\"";
        // line 143
        echo ($context["module_acilit_shipping_item_code"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 148
        echo ($context["entry_push_order_outlet"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"module_acilit_push_order_outlet\" class=\"form-control\">
                                    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["outlets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["outlet"]) {
            // line 152
            echo "                                        ";
            if ((($context["module_acilit_push_order_outlet"] ?? null) == twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 152))) {
                // line 153
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 153);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 153);
                echo "</option>
                                        ";
            } else {
                // line 155
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 155);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 155);
                echo "</option>
                                        ";
            }
            // line 157
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['outlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 163
        echo ($context["help_alert_order_fail"] ?? null);
        echo "\">";
        echo ($context["entry_alert_order_fail"] ?? null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                ";
        // line 165
        if (($context["module_acilit_alert_order_fail"] ?? null)) {
            // line 166
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_alert_order_fail\" value=\"1\" checked=\"checked\" /> ";
            // line 167
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_alert_order_fail\" value=\"0\" /> ";
            // line 170
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 173
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_alert_order_fail\" value=\"1\" /> ";
            // line 174
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_alert_order_fail\" value=\"0\" checked=\"checked\" /> ";
            // line 177
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 180
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-alert-order-fail-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 184
        echo ($context["help_alert_order_fail_email"] ?? null);
        echo "\">";
        echo ($context["entry_alert_order_fail_email"] ?? null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                <textarea name=\"module_acilit_alert_order_fail_email\" rows=\"5\" placeholder=\"";
        // line 186
        echo ($context["entry_alert_order_fail_email"] ?? null);
        echo "\" id=\"input-alert-order-fail-email\" class=\"form-control\">";
        echo ($context["module_acilit_alert_order_fail_email"] ?? null);
        echo "</textarea>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>";
        // line 192
        echo ($context["text_products"] ?? null);
        echo "</legend>
                         <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 194
        echo ($context["entry_sync_product_quantity_outlet"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">                     
                                    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["outlets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["outlet"]) {
            // line 198
            echo "                                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 198), ($context["module_acilit_sync_product_quantity_outlet"] ?? null))) {
                // line 199
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_acilit_sync_product_quantity_outlet[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 199);
                echo "\" checked=\"checked\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 199);
                echo "</label></div>
                                        ";
            } else {
                // line 201
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_acilit_sync_product_quantity_outlet[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 201);
                echo "\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 201);
                echo "</label></div>
                                        ";
            }
            // line 203
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['outlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 209
        echo ($context["entry_prioritize_product_special"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 211
        if (($context["module_acilit_prioritize_product_special"] ?? null)) {
            // line 212
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_prioritize_product_special\" value=\"1\" checked=\"checked\" /> ";
            // line 213
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_prioritize_product_special\" value=\"0\" /> ";
            // line 216
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 219
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_prioritize_product_special\" value=\"1\" /> ";
            // line 220
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_prioritize_product_special\" value=\"0\" checked=\"checked\" /> ";
            // line 223
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 226
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 230
        echo ($context["entry_sync_product_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 232
        if (($context["module_acilit_sync_product_status"] ?? null)) {
            // line 233
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" checked=\"checked\" /> ";
            // line 234
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" /> ";
            // line 237
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 240
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" /> ";
            // line 241
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" checked=\"checked\" /> ";
            // line 244
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 247
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
        // line 256
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
        // line 267
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
        return array (  630 => 267,  616 => 256,  605 => 247,  599 => 244,  593 => 241,  590 => 240,  584 => 237,  578 => 234,  575 => 233,  573 => 232,  568 => 230,  562 => 226,  556 => 223,  550 => 220,  547 => 219,  541 => 216,  535 => 213,  532 => 212,  530 => 211,  525 => 209,  518 => 204,  512 => 203,  504 => 201,  496 => 199,  493 => 198,  489 => 197,  483 => 194,  478 => 192,  467 => 186,  460 => 184,  454 => 180,  448 => 177,  442 => 174,  439 => 173,  433 => 170,  427 => 167,  424 => 166,  422 => 165,  415 => 163,  408 => 158,  402 => 157,  394 => 155,  386 => 153,  383 => 152,  379 => 151,  373 => 148,  365 => 143,  360 => 141,  353 => 136,  347 => 135,  339 => 133,  331 => 131,  328 => 130,  324 => 129,  318 => 126,  311 => 121,  305 => 120,  297 => 118,  289 => 116,  286 => 115,  282 => 114,  276 => 111,  269 => 106,  263 => 105,  255 => 103,  247 => 101,  244 => 100,  240 => 99,  234 => 96,  220 => 87,  214 => 84,  209 => 82,  200 => 75,  194 => 72,  188 => 69,  185 => 68,  179 => 65,  173 => 62,  170 => 61,  168 => 60,  163 => 58,  155 => 53,  150 => 51,  142 => 46,  137 => 44,  129 => 39,  124 => 37,  119 => 35,  114 => 33,  108 => 30,  104 => 28,  96 => 24,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/acilit.twig", "");
    }
}
