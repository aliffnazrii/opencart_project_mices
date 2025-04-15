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
class __TwigTemplate_6c9607b2172077d64b9865433f35e73f636f779e73f9bfde628c13dcabff49e8 extends \Twig\Template
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
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 7
        echo ($context["pull_settings_url"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["help_pull_settings"] ?? null);
        echo "\" class=\"btn btn-warning\">
                    <i class=\"fa fa-refresh\"></i>
                </a>
                <button type=\"submit\" form=\"form-acilit-setting\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-save\"></i>
                </button>
            </div>
            <h1>
                ";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "
            </h1>
            <ul class=\"breadcrumb\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 19
            echo "                    <li>
                        <a href=\"";
            // line 20
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">
                            ";
            // line 21
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 29
        if (($context["error_warning"] ?? null)) {
            // line 30
            echo "            <div class=\"alert alert-danger\">
                <i class=\"fa fa-exclamation-circle\"></i>
                ";
            // line 32
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                    &times;
                </button>
            </div>
        ";
        }
        // line 38
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 39
            echo "            <div class=\"alert alert-success alert-dismissible\">
                <i class=\"fa fa-check-circle\"></i>
                ";
            // line 41
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                    &times;
                </button>
            </div>
        ";
        }
        // line 47
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fa fa-pencil\"></i>
                    ";
        // line 51
        echo ($context["text_form"] ?? null);
        echo "
                </h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 55
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-acilit-setting\" class=\"form-horizontal\">
                    <fieldset>
                        <legend>
                            ";
        // line 58
        echo ($context["text_general"] ?? null);
        echo "
                        </legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"app-id\">
                                ";
        // line 62
        echo ($context["entry_username"] ?? null);
        echo "
                            </label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_acilit_username\" id=\"username\" class=\"form-control\" value=\"";
        // line 65
        echo ($context["module_acilit_username"] ?? null);
        echo "\"></input>
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"app-id\">
                                ";
        // line 70
        echo ($context["entry_password"] ?? null);
        echo "
                            </label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_acilit_password\" id=\"password\" class=\"form-control\" value=\"";
        // line 73
        echo ($context["module_acilit_password"] ?? null);
        echo "\"></input>
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"status\">
                                ";
        // line 78
        echo ($context["entry_status"] ?? null);
        echo "
                            </label>
                            <div class=\"col-sm-10\">
                                ";
        // line 81
        if (($context["module_acilit_status"] ?? null)) {
            // line 82
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"1\" checked=\"checked\" />
                                        ";
            // line 84
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"0\" />
                                        ";
            // line 88
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 91
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"1\" />
                                        ";
            // line 93
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_acilit_status\" value=\"0\" checked=\"checked\" />
                                        ";
            // line 97
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 100
        echo "                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>
                            ";
        // line 105
        echo ($context["text_order"] ?? null);
        echo "
                        </legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">
                                ";
        // line 109
        echo ($context["entry_pull_order_date"] ?? null);
        echo "
                            </label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"module_acilit_pull_order_date\" value=\"";
        // line 113
        echo ($context["module_acilit_pull_order_date"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pull_order_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-pull-order-date\" class=\"form-control\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\">
                                            <i class=\"fa fa-calendar\"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">
                                ";
        // line 124
        echo ($context["entry_order_sync_status"] ?? null);
        echo "
                            </label>
                            <div class=\"col-sm-10\">
                                <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 129
            echo "                                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 129), ($context["module_acilit_order_sync_status"] ?? null))) {
                // line 130
                echo "                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\" name=\"module_acilit_order_sync_status[]\" value=\"";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 132);
                echo "\" checked=\"checked\">
                                                        ";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 133);
                echo "
                                                    </label>
                                                </div>
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\" name=\"module_acilit_order_sync_status[]\" value=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 138);
                echo "\" checked=\"checked\">
                                                        ";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 139);
                echo "
                                                    </label>
                                                </div>
                                            ";
            } else {
                // line 143
                echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"module_acilit_order_sync_status[]\" value=\"";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 145);
                echo "\">
                                                            ";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 146);
                echo "
                                                        </label>
                                                    </div>
                                                ";
            }
            // line 150
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 156
        echo ($context["entry_order_complete_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_acilit_order_complete_status\" id=\"input-order-status\" class=\"form-control\">
                                            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 161
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 161) == ($context["module_acilit_order_complete_status"] ?? null))) {
                // line 162
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 162);
                echo "\" selected=\"selected\">
                                                        ";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 163);
                echo "
                                                    </option>
                                                ";
            } else {
                // line 166
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 166);
                echo "\">
                                                        ";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 167);
                echo "
                                                    </option>
                                                ";
            }
            // line 170
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 176
        echo ($context["entry_order_canceled_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_acilit_order_canceled_status\" class=\"form-control\">
                                            ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 181
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 181) == ($context["module_acilit_order_canceled_status"] ?? null))) {
                // line 182
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 182);
                echo "\" selected=\"selected\">
                                                        ";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 183);
                echo "
                                                    </option>
                                                ";
            } else {
                // line 186
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 186);
                echo "\">
                                                        ";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 187);
                echo "
                                                    </option>
                                                ";
            }
            // line 190
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>
                                    ";
        // line 197
        echo ($context["text_products"] ?? null);
        echo "
                                </legend>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 201
        echo ($context["entry_sync_product_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 204
        if (($context["module_acilit_sync_product_status"] ?? null)) {
            // line 205
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" checked=\"checked\" />
                                                ";
            // line 207
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" />
                                                ";
            // line 211
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        } else {
            // line 214
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" />
                                                ";
            // line 216
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 220
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        }
        // line 223
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 227
        echo ($context["entry_sync_customer_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 230
        if (($context["module_acilit_sync_customer_status"] ?? null)) {
            // line 231
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" checked=\"checked\" />
                                                ";
            // line 233
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" />
                                                ";
            // line 237
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        } else {
            // line 240
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" />
                                                ";
            // line 242
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 246
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        }
        // line 249
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 253
        echo ($context["entry_sync_point_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 256
        if (($context["module_acilit_sync_voucher_status"] ?? null)) {
            // line 257
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"1\" checked=\"checked\" />
                                                ";
            // line 259
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"0\" />
                                                ";
            // line 263
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        } else {
            // line 266
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"1\" />
                                                ";
            // line 268
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 272
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        }
        // line 275
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 279
        echo ($context["entry_sync_voucher_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 282
        if (($context["module_acilit_sync_voucher_status"] ?? null)) {
            // line 283
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"1\" checked=\"checked\" />
                                                ";
            // line 285
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"0\" />
                                                ";
            // line 289
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        } else {
            // line 292
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"1\" />
                                                ";
            // line 294
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 298
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        }
        // line 301
        echo "                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 310
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
        // line 320
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
        return array (  647 => 320,  634 => 310,  623 => 301,  617 => 298,  610 => 294,  606 => 292,  600 => 289,  593 => 285,  589 => 283,  587 => 282,  581 => 279,  575 => 275,  569 => 272,  562 => 268,  558 => 266,  552 => 263,  545 => 259,  541 => 257,  539 => 256,  533 => 253,  527 => 249,  521 => 246,  514 => 242,  510 => 240,  504 => 237,  497 => 233,  493 => 231,  491 => 230,  485 => 227,  479 => 223,  473 => 220,  466 => 216,  462 => 214,  456 => 211,  449 => 207,  445 => 205,  443 => 204,  437 => 201,  430 => 197,  422 => 191,  416 => 190,  410 => 187,  405 => 186,  399 => 183,  394 => 182,  391 => 181,  387 => 180,  380 => 176,  373 => 171,  367 => 170,  361 => 167,  356 => 166,  350 => 163,  345 => 162,  342 => 161,  338 => 160,  331 => 156,  324 => 151,  318 => 150,  311 => 146,  307 => 145,  303 => 143,  296 => 139,  292 => 138,  284 => 133,  280 => 132,  276 => 130,  273 => 129,  269 => 128,  262 => 124,  246 => 113,  239 => 109,  232 => 105,  225 => 100,  219 => 97,  212 => 93,  208 => 91,  202 => 88,  195 => 84,  191 => 82,  189 => 81,  183 => 78,  175 => 73,  169 => 70,  161 => 65,  155 => 62,  148 => 58,  142 => 55,  135 => 51,  129 => 47,  120 => 41,  116 => 39,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  57 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/acilit.twig", "");
    }
}
