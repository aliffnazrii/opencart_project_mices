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
class __TwigTemplate_3253dab6ca50c44d90ffceabc0bae71264d071e830a00ad55f522b781d1b7a1b extends \Twig\Template
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
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\">
                                                ";
        // line 152
        echo ($context["entry_order_complete_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"module_acilit_order_complete_status\" id=\"input-order-status\" class=\"form-control\">
                                                    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 157
            echo "                                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 157) == ($context["module_acilit_order_complete_status"] ?? null))) {
                // line 158
                echo "                                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 158);
                echo "\" selected=\"selected\">
                                                                ";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 159);
                echo "
                                                            </option>
                                                        ";
            } else {
                // line 162
                echo "                                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 162);
                echo "\">
                                                                ";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 163);
                echo "
                                                            </option>
                                                        ";
            }
            // line 166
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\">
                                                ";
        // line 172
        echo ($context["entry_order_canceled_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"module_acilit_order_canceled_status\" class=\"form-control\">
                                                    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 177
            echo "                                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 177) == ($context["module_acilit_order_canceled_status"] ?? null))) {
                // line 178
                echo "                                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 178);
                echo "\" selected=\"selected\">
                                                                ";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 179);
                echo "
                                                            </option>
                                                        ";
            } else {
                // line 182
                echo "                                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 182);
                echo "\">
                                                                ";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 183);
                echo "
                                                            </option>
                                                        ";
            }
            // line 186
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>
                                            ";
        // line 193
        echo ($context["text_products"] ?? null);
        echo "
                                        </legend>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\">
                                                ";
        // line 197
        echo ($context["entry_sync_product_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                ";
        // line 200
        if (($context["module_acilit_sync_product_status"] ?? null)) {
            // line 201
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" checked=\"checked\" />
                                                        ";
            // line 203
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" />
                                                        ";
            // line 207
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        } else {
            // line 210
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"1\" />
                                                        ";
            // line 212
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_product_status\" value=\"0\" checked=\"checked\" />
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
        echo ($context["entry_sync_customer_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                ";
        // line 226
        if (($context["module_acilit_sync_customer_status"] ?? null)) {
            // line 227
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" checked=\"checked\" />
                                                        ";
            // line 229
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" />
                                                        ";
            // line 233
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        } else {
            // line 236
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"1\" />
                                                        ";
            // line 238
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_customer_status\" value=\"0\" checked=\"checked\" />
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
        echo ($context["entry_sync_point_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                ";
        // line 252
        if (($context["module_acilit_sync_voucher_status"] ?? null)) {
            // line 253
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"1\" checked=\"checked\" />
                                                        ";
            // line 255
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"0\" />
                                                        ";
            // line 259
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        } else {
            // line 262
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"1\" />
                                                        ";
            // line 264
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_point_status\" value=\"0\" checked=\"checked\" />
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
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\">
                                                ";
        // line 275
        echo ($context["entry_sync_voucher_status"] ?? null);
        echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                ";
        // line 278
        if (($context["module_acilit_sync_voucher_status"] ?? null)) {
            // line 279
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"1\" checked=\"checked\" />
                                                        ";
            // line 281
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"0\" />
                                                        ";
            // line 285
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        } else {
            // line 288
            echo "                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"1\" />
                                                        ";
            // line 290
            echo ($context["text_enabled"] ?? null);
            echo "
                                                    </label>
                                                    <label class=\"radio-inline\">
                                                        <input type=\"radio\" name=\"module_acilit_sync_voucher_status\" value=\"0\" checked=\"checked\" />
                                                        ";
            // line 294
            echo ($context["text_disabled"] ?? null);
            echo "
                                                    </label>
                                                ";
        }
        // line 297
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
        // line 306
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
        // line 316
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
        return array (  637 => 316,  624 => 306,  613 => 297,  607 => 294,  600 => 290,  596 => 288,  590 => 285,  583 => 281,  579 => 279,  577 => 278,  571 => 275,  565 => 271,  559 => 268,  552 => 264,  548 => 262,  542 => 259,  535 => 255,  531 => 253,  529 => 252,  523 => 249,  517 => 245,  511 => 242,  504 => 238,  500 => 236,  494 => 233,  487 => 229,  483 => 227,  481 => 226,  475 => 223,  469 => 219,  463 => 216,  456 => 212,  452 => 210,  446 => 207,  439 => 203,  435 => 201,  433 => 200,  427 => 197,  420 => 193,  412 => 187,  406 => 186,  400 => 183,  395 => 182,  389 => 179,  384 => 178,  381 => 177,  377 => 176,  370 => 172,  363 => 167,  357 => 166,  351 => 163,  346 => 162,  340 => 159,  335 => 158,  332 => 157,  328 => 156,  321 => 152,  312 => 145,  306 => 144,  299 => 140,  295 => 139,  291 => 137,  284 => 133,  280 => 132,  276 => 130,  273 => 129,  269 => 128,  262 => 124,  246 => 113,  239 => 109,  232 => 105,  225 => 100,  219 => 97,  212 => 93,  208 => 91,  202 => 88,  195 => 84,  191 => 82,  189 => 81,  183 => 78,  175 => 73,  169 => 70,  161 => 65,  155 => 62,  148 => 58,  142 => 55,  135 => 51,  129 => 47,  120 => 41,  116 => 39,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  57 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/acilit.twig", "");
    }
}
