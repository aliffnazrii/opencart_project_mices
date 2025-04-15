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
class __TwigTemplate_24e2fb4fbcff9fea10c88c395901c97ca964929665eb201fa23a88a20e5ec720 extends \Twig\Template
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
                                            ";
            } else {
                // line 137
                echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"module_acilit_order_sync_status[]\" value=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 139);
                echo "\">
                                                            ";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 140);
                echo "
                                                        </label>
                                                    </div>
                                                ";
            }
            // line 144
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 150
        echo ($context["entry_order_complete_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_acilit_order_complete_status\" id=\"input-order-status\" class=\"form-control\">
                                            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 155
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 155) == ($context["module_acilit_order_complete_status"] ?? null))) {
                // line 156
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 156);
                echo "\" selected=\"selected\">
                                                        ";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 157);
                echo "
                                                    </option>
                                                ";
            } else {
                // line 160
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 160);
                echo "\">
                                                        ";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 161);
                echo "
                                                    </option>
                                                ";
            }
            // line 164
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 170
        echo ($context["entry_order_canceled_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_acilit_order_canceled_status\" class=\"form-control\">
                                            ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 175
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 175) == ($context["module_acilit_order_canceled_status"] ?? null))) {
                // line 176
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 176);
                echo "\" selected=\"selected\">
                                                        ";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 177);
                echo "
                                                    </option>
                                                ";
            } else {
                // line 180
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 180);
                echo "\">
                                                        ";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 181);
                echo "
                                                    </option>
                                                ";
            }
            // line 184
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>
                                    ";
        // line 191
        echo ($context["text_products"] ?? null);
        echo "
                                </legend>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 195
        echo ($context["entry_sync_product_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 198
        if (($context["module_acilit_sync_product_status"] ?? null)) {
            // line 199
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" checked=\"checked\" />
                                                ";
            // line 201
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" />
                                                ";
            // line 205
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        } else {
            // line 208
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" />
                                                ";
            // line 210
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 214
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        }
        // line 217
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\">
                                        ";
        // line 221
        echo ($context["entry_sync_customer_status"] ?? null);
        echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 224
        if (($context["module_acilit_sync_customer_status"] ?? null)) {
            // line 225
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" checked=\"checked\" />
                                                ";
            // line 227
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" />
                                                ";
            // line 231
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        } else {
            // line 234
            echo "                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" />
                                                ";
            // line 236
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 240
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </label>
                                        ";
        }
        // line 243
        echo "                                    </div>
                                </div>
                            </fieldset>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\">
                                    ";
        // line 248
        echo ($context["entry_sync_voucher_status"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    ";
        // line 251
        if (($context["module_acilit_sync_voucher_status"] ?? null)) {
            // line 252
            echo "                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"1\" checked=\"checked\" />
                                            ";
            // line 254
            echo ($context["text_enabled"] ?? null);
            echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"0\" />
                                            ";
            // line 258
            echo ($context["text_disabled"] ?? null);
            echo "
                                        </label>
                                    ";
        } else {
            // line 261
            echo "                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"1\" />
                                            ";
            // line 263
            echo ($context["text_enabled"] ?? null);
            echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"0\" checked=\"checked\" />
                                            ";
            // line 267
            echo ($context["text_disabled"] ?? null);
            echo "
                                        </label>
                                    ";
        }
        // line 270
        echo "                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 278
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
        // line 288
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
        return array (  587 => 288,  574 => 278,  564 => 270,  558 => 267,  551 => 263,  547 => 261,  541 => 258,  534 => 254,  530 => 252,  528 => 251,  522 => 248,  515 => 243,  509 => 240,  502 => 236,  498 => 234,  492 => 231,  485 => 227,  481 => 225,  479 => 224,  473 => 221,  467 => 217,  461 => 214,  454 => 210,  450 => 208,  444 => 205,  437 => 201,  433 => 199,  431 => 198,  425 => 195,  418 => 191,  410 => 185,  404 => 184,  398 => 181,  393 => 180,  387 => 177,  382 => 176,  379 => 175,  375 => 174,  368 => 170,  361 => 165,  355 => 164,  349 => 161,  344 => 160,  338 => 157,  333 => 156,  330 => 155,  326 => 154,  319 => 150,  312 => 145,  306 => 144,  299 => 140,  295 => 139,  291 => 137,  284 => 133,  280 => 132,  276 => 130,  273 => 129,  269 => 128,  262 => 124,  246 => 113,  239 => 109,  232 => 105,  225 => 100,  219 => 97,  212 => 93,  208 => 91,  202 => 88,  195 => 84,  191 => 82,  189 => 81,  183 => 78,  175 => 73,  169 => 70,  161 => 65,  155 => 62,  148 => 58,  142 => 55,  135 => 51,  129 => 47,  120 => 41,  116 => 39,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  57 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/acilit.twig", "");
    }
}
