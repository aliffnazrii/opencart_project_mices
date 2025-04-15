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
class __TwigTemplate_e83b0e86219b2482aa8f449706751bc578df16b8cc44da9e07888ff495674733 extends \Twig\Template
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
        // line 126
        echo ($context["entry_order_complete_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"module_acilit_order_complete_status\" id=\"input-order-status\" class=\"form-control\">
                                                    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 131
            echo "                                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 131) == ($context["module_acilit_order_complete_status"] ?? null))) {
                // line 132
                echo "                                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 132);
                echo "\" selected=\"selected\">
                                                                ";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 133);
                echo "
                                                            </option>
                                                        ";
            } else {
                // line 136
                echo "                                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 136);
                echo "\">
                                                                ";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 137);
                echo "
                                                            </option>
                                                        ";
            }
            // line 140
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\">
                                                ";
        // line 146
        echo ($context["entry_order_canceled_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"module_acilit_order_canceled_status\" class=\"form-control\">
                                                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 151
            echo "                                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 151) == ($context["module_acilit_order_canceled_status"] ?? null))) {
                // line 152
                echo "                                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 152);
                echo "\" selected=\"selected\">
                                                                ";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 153);
                echo "
                                                            </option>
                                                        ";
            } else {
                // line 156
                echo "                                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 156);
                echo "\">
                                                                ";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 157);
                echo "
                                                            </option>
                                                        ";
            }
            // line 160
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>
                                            ";
        // line 167
        echo ($context["text_products"] ?? null);
        echo "
                                        </legend>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\">
                                                ";
        // line 171
        echo ($context["entry_sync_product_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                ";
        // line 174
        if (($context["module_acilit_sync_product_status"] ?? null)) {
            // line 175
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" checked=\"checked\" />
                                                        ";
            // line 177
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" />
                                                        ";
            // line 181
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        } else {
            // line 184
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" />
                                                        ";
            // line 186
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" checked=\"checked\" />
                                                        ";
            // line 190
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        }
        // line 193
        echo "                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\">
                                                ";
        // line 197
        echo ($context["entry_sync_customer_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                ";
        // line 200
        if (($context["module_acilit_sync_customer_status"] ?? null)) {
            // line 201
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" checked=\"checked\" />
                                                        ";
            // line 203
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" />
                                                        ";
            // line 207
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        } else {
            // line 210
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" />
                                                        ";
            // line 212
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" checked=\"checked\" />
                                                        ";
            // line 216
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        }
        // line 219
        echo "                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\">
                                                ";
        // line 223
        echo ($context["entry_sync_point_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                ";
        // line 226
        if (($context["module_acilit_sync_voucher_status"] ?? null)) {
            // line 227
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"1\" checked=\"checked\" />
                                                        ";
            // line 229
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"0\" />
                                                        ";
            // line 233
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        } else {
            // line 236
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"1\" />
                                                        ";
            // line 238
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"0\" checked=\"checked\" />
                                                        ";
            // line 242
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        }
        // line 245
        echo "                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\">
                                                ";
        // line 249
        echo ($context["entry_sync_voucher_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                ";
        // line 252
        if (($context["module_acilit_sync_voucher_status"] ?? null)) {
            // line 253
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"1\" checked=\"checked\" />
                                                        ";
            // line 255
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"0\" />
                                                        ";
            // line 259
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        } else {
            // line 262
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"1\" />
                                                        ";
            // line 264
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"0\" checked=\"checked\" />
                                                        ";
            // line 268
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        }
        // line 271
        echo "                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 280
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
        // line 290
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
        return array (  580 => 290,  567 => 280,  556 => 271,  550 => 268,  543 => 264,  539 => 262,  533 => 259,  526 => 255,  522 => 253,  520 => 252,  514 => 249,  508 => 245,  502 => 242,  495 => 238,  491 => 236,  485 => 233,  478 => 229,  474 => 227,  472 => 226,  466 => 223,  460 => 219,  454 => 216,  447 => 212,  443 => 210,  437 => 207,  430 => 203,  426 => 201,  424 => 200,  418 => 197,  412 => 193,  406 => 190,  399 => 186,  395 => 184,  389 => 181,  382 => 177,  378 => 175,  376 => 174,  370 => 171,  363 => 167,  355 => 161,  349 => 160,  343 => 157,  338 => 156,  332 => 153,  327 => 152,  324 => 151,  320 => 150,  313 => 146,  306 => 141,  300 => 140,  294 => 137,  289 => 136,  283 => 133,  278 => 132,  275 => 131,  271 => 130,  264 => 126,  246 => 113,  239 => 109,  232 => 105,  225 => 100,  219 => 97,  212 => 93,  208 => 91,  202 => 88,  195 => 84,  191 => 82,  189 => 81,  183 => 78,  175 => 73,  169 => 70,  161 => 65,  155 => 62,  148 => 58,  142 => 55,  135 => 51,  129 => 47,  120 => 41,  116 => 39,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  57 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/acilit.twig", "");
    }
}
