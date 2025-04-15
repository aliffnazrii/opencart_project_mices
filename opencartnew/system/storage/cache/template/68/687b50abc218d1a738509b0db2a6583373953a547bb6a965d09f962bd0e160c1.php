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

/* marketing/coupon_form.twig */
class __TwigTemplate_34dadc240ede7ab480171332b411bdf5856cacca9adf634f38921a33a4056990 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-coupon\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
          <i class=\"fa fa-save\"></i>
        </button>
        <a href=\"";
        // line 10
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
          <i class=\"fa fa-reply\"></i>
        </a>
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
            echo "          <li>
            <a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            echo "\">
              ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 21);
            echo "
            </a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 29
        if (($context["error_warning"] ?? null)) {
            // line 30
            echo "      <div class=\"alert alert-danger alert-dismissible\">
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
          <i class=\"fa fa-pencil\"></i>
          ";
        // line 42
        echo ($context["text_form"] ?? null);
        echo "
        </h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 46
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\">
              <a href=\"#tab-general\" data-toggle=\"tab\">
                ";
        // line 50
        echo ($context["tab_general"] ?? null);
        echo "
              </a>
            </li>
            ";
        // line 53
        if (($context["coupon_id"] ?? null)) {
            // line 54
            echo "              <li>
                <a href=\"#tab-history\" data-toggle=\"tab\">
                  ";
            // line 56
            echo ($context["tab_history"] ?? null);
            echo "
                </a>
              </li>
            ";
        }
        // line 60
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">
                  ";
        // line 65
        echo ($context["entry_name"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 68
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />

\t\t\t\t<input type=\"hidden\" name=\"acilit_voucher_id\" value=\"";
        // line 70
        echo ($context["acilit_voucher_id"] ?? null);
        echo "\">
\t\t\t\t";
        // line 71
        if (($context["acilit_error"] ?? null)) {
            // line 72
            echo "\t\t\t\t<div id=\"acilit-voucher-message\" class=\"text-danger\">
\t\t\t\t";
            // line 73
            echo ($context["acilit_error"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t<div id=\"acilit-voucher-message\"></div>
\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t<a id=\"btn-voucher-validate\" class=\"btn btn-primary ";
        echo ((((($context["acilit_voucher_id"] ?? null) != "0") && (($context["acilit_voucher_id"] ?? null) != ""))) ? ("hide") : (""));
        echo "\" onclick=\"validateVoucher()\">
\t\t\t\t";
        // line 79
        echo ($context["text_link"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t<a id=\"btn-voucher-unlink\" class=\"btn btn-primary ";
        // line 81
        echo ((((($context["acilit_voucher_id"] ?? null) == "0") || (($context["acilit_voucher_id"] ?? null) == ""))) ? ("hide") : (""));
        echo "\" onclick=\"unlinkVoucher()\">
\t\t\t\t";
        // line 82
        echo ($context["text_unlink"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t
                  ";
        // line 85
        if (($context["error_name"] ?? null)) {
            // line 86
            echo "                    <div class=\"text-danger\">
                      ";
            // line 87
            echo ($context["error_name"] ?? null);
            echo "
                    </div>
                  ";
        }
        // line 90
        echo "                </div>

\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"Voucher ID in Acilit\">Voucher Id</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"voucher_id\" value=\"";
        // line 96
        echo ($context["voucher_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_id"] ?? null);
        echo "\" id=\"input-voucherId\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"Serial No From Acilit\">Serial No</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"voucher_serialNo\" value=\"";
        // line 102
        echo ($context["voucher_serialNo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_serialNo"] ?? null);
        echo "\" id=\"input-voucher-serialNo\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-code\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 109
        echo ($context["help_code"] ?? null);
        echo "\">
                    ";
        // line 110
        echo ($context["entry_code"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 114
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                  ";
        // line 115
        if (($context["error_code"] ?? null)) {
            // line 116
            echo "                    <div class=\"text-danger\">
                      ";
            // line 117
            echo ($context["error_code"] ?? null);
            echo "
                    </div>
                  ";
        }
        // line 120
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-type\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 124
        echo ($context["help_type"] ?? null);
        echo "\">
                    ";
        // line 125
        echo ($context["entry_type"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-control\">
                    ";
        // line 130
        if ((($context["type"] ?? null) == "P")) {
            // line 131
            echo "                      <option value=\"P\" selected=\"selected\">
                        ";
            // line 132
            echo ($context["text_percent"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 135
            echo "                      <option value=\"P\">
                        ";
            // line 136
            echo ($context["text_percent"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 139
        echo "                    ";
        if ((($context["type"] ?? null) == "F")) {
            // line 140
            echo "                      <option value=\"F\" selected=\"selected\">
                        ";
            // line 141
            echo ($context["text_amount"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 144
            echo "                      <option value=\"F\">
                        ";
            // line 145
            echo ($context["text_amount"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 148
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-discount\">
                  ";
        // line 153
        echo ($context["entry_discount"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 156
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 161
        echo ($context["help_total"] ?? null);
        echo "\">
                    ";
        // line 162
        echo ($context["entry_total"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 166
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 171
        echo ($context["help_logged"] ?? null);
        echo "\">
                    ";
        // line 172
        echo ($context["entry_logged"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 177
        if (($context["logged"] ?? null)) {
            // line 178
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\" />
                      ";
            // line 179
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 181
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" />
                      ";
            // line 182
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 184
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 186
        if ( !($context["logged"] ?? null)) {
            // line 187
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\" />
                      ";
            // line 188
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 190
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" />
                      ";
            // line 191
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 193
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  ";
        // line 198
        echo ($context["entry_shipping"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 202
        if (($context["shipping"] ?? null)) {
            // line 203
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                      ";
            // line 204
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 206
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" />
                      ";
            // line 207
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 209
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 211
        if ( !($context["shipping"] ?? null)) {
            // line 212
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                      ";
            // line 213
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 215
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" />
                      ";
            // line 216
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 218
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 223
        echo ($context["help_product"] ?? null);
        echo "\">
                    ";
        // line 224
        echo ($context["entry_product"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 228
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 231
            echo "                      <div id=\"coupon-product";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 231);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 233
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 233);
            echo "
                        <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 234
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 234);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 242
        echo ($context["help_category"] ?? null);
        echo "\">
                    ";
        // line 243
        echo ($context["entry_category"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 247
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 250
            echo "                      <div id=\"coupon-category";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 250);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 252
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 252);
            echo "
                        <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 253
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 253);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-start\">
                  ";
        // line 261
        echo ($context["entry_date_start"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 265
        echo ($context["date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\">
                        <i class=\"fa fa-calendar\"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-end\">
                  ";
        // line 276
        echo ($context["entry_date_end"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 280
        echo ($context["date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\">
                        <i class=\"fa fa-calendar\"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-total\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 291
        echo ($context["help_uses_total"] ?? null);
        echo "\">
                    ";
        // line 292
        echo ($context["entry_uses_total"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 296
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"input-uses-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-customer\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 301
        echo ($context["help_uses_customer"] ?? null);
        echo "\">
                    ";
        // line 302
        echo ($context["entry_uses_customer"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 306
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">
                  ";
        // line 311
        echo ($context["entry_status"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 315
        if (($context["status"] ?? null)) {
            // line 316
            echo "                      <option value=\"1\" selected=\"selected\">
                        ";
            // line 317
            echo ($context["text_enabled"] ?? null);
            echo "
                      </option>
                      <option value=\"0\">
                        ";
            // line 320
            echo ($context["text_disabled"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 323
            echo "                      <option value=\"1\">
                        ";
            // line 324
            echo ($context["text_enabled"] ?? null);
            echo "
                      </option>
                      <option value=\"0\" selected=\"selected\">
                        ";
            // line 327
            echo ($context["text_disabled"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 330
        echo "                  </select>
                </div>
              </div>
            </div>
            ";
        // line 334
        if (($context["coupon_id"] ?? null)) {
            // line 335
            echo "              <div class=\"tab-pane\" id=\"tab-history\">
                <fieldset>
                  <legend>
                    ";
            // line 338
            echo ($context["text_coupon"] ?? null);
            echo "
                  </legend>
                  <div id=\"history\"></div>
                </fieldset>
              </div>
            ";
        }
        // line 344
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\tfunction validateVoucher() {
\t\t\t\t\$('#acilit-voucher-message').removeClass('text-success text-danger').text('');
\t\t\t\t
\t\t\t\tvar voucher = \$('input[name=\"voucher\"]').val();
\t\t\t\tvar button = \$('#btn-voucher-validate');
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/acilit/validateVoucher&user_token=";
        // line 359
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\tmethod: 'POST',
\t\t\t\tdata: { model: voucher },
\t\t\t\tbeforeSend: function() {
\t\t\t\t\$(button).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\$(button).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\tif (json.error) {
\t\t\t\t\$('#acilit-voucher-message').addClass('text-danger').text(json.error);
\t\t\t\t} else {
\t\t\t\t\$('#acilit-voucher-message').addClass('text-success').text('Linked');
\t\t\t\t
\t\t\t\tif (json.acilit_voucher_id) {
\t\t\t\t\$('input[name=\"acilit_voucher_id\"]').val(json.acilit_voucher_id);
\t\t\t\t\$('input[name=\"price\"]').val(json.price);
\t\t\t\t\$('input[name=\"sku\"]').val(json.quantity);
\t\t\t\t\$('input[name=\"acilit_voucher_id\"]').val(json.acilit_voucher_id);
\t\t\t\t
\t\t\t\t\$('input[name=\"model\"]').prop('readonly', true);
\t\t\t\t\$('#btn-voucher-unlink').removeClass('hide');
\t\t\t\t\$('#btn-voucher-validate').addClass('hide');
\t\t\t\t}
\t\t\t\t}
\t\t\t\t}
\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\tfunction unlinkVoucher() {
\t\t\t\t\$('#acilit-voucher-message').removeClass('text-success text-danger').text('');
\t\t\t\t
\t\t\t\t\$('input[name=\"acilit_voucher_id\"]').val(0);
\t\t\t\t\$('input[name=\"voucher\"]').prop('readonly', false);
\t\t\t\t\$('#btn-voucher-validate').removeClass('hide');
\t\t\t\t\$('#btn-voucher-unlink').addClass('hide');
\t\t\t\t
\t\t\t\t\$('#acilit-voucher-message').addClass('text-success').text('Not Linked');
\t\t\t\t}
\t\t\t\t</script>
\t\t\t\t
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 405
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val('');
\t\t
\t\t\$('#coupon-product' + item['value']).remove();
\t\t
\t\t\$('#coupon-product').append('<div id=\"coupon-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});

\$('#coupon-product').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 434
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');
\t\t
\t\t\$('#coupon-category' + item['value']).remove();
\t\t
\t\t\$('#coupon-category').append('<div id=\"coupon-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}\t
});

\$('#coupon-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
  ";
        // line 459
        if (($context["coupon_id"] ?? null)) {
            // line 460
            echo "    <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=marketing/coupon/history&user_token=";
            // line 467
            echo ($context["user_token"] ?? null);
            echo "&coupon_id=";
            echo ($context["coupon_id"] ?? null);
            echo "');
//--></script>
  ";
        }
        // line 470
        echo "  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 472
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script>
</div>
";
        // line 477
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketing/coupon_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  895 => 477,  887 => 472,  883 => 470,  875 => 467,  866 => 460,  864 => 459,  836 => 434,  804 => 405,  755 => 359,  738 => 344,  729 => 338,  724 => 335,  722 => 334,  716 => 330,  710 => 327,  704 => 324,  701 => 323,  695 => 320,  689 => 317,  686 => 316,  684 => 315,  677 => 311,  667 => 306,  660 => 302,  656 => 301,  646 => 296,  639 => 292,  635 => 291,  619 => 280,  612 => 276,  596 => 265,  589 => 261,  582 => 256,  573 => 253,  569 => 252,  563 => 250,  559 => 249,  554 => 247,  547 => 243,  543 => 242,  536 => 237,  527 => 234,  523 => 233,  517 => 231,  513 => 230,  508 => 228,  501 => 224,  497 => 223,  490 => 218,  485 => 216,  482 => 215,  477 => 213,  474 => 212,  472 => 211,  468 => 209,  463 => 207,  460 => 206,  455 => 204,  452 => 203,  450 => 202,  443 => 198,  436 => 193,  431 => 191,  428 => 190,  423 => 188,  420 => 187,  418 => 186,  414 => 184,  409 => 182,  406 => 181,  401 => 179,  398 => 178,  396 => 177,  388 => 172,  384 => 171,  374 => 166,  367 => 162,  363 => 161,  353 => 156,  347 => 153,  340 => 148,  334 => 145,  331 => 144,  325 => 141,  322 => 140,  319 => 139,  313 => 136,  310 => 135,  304 => 132,  301 => 131,  299 => 130,  291 => 125,  287 => 124,  281 => 120,  275 => 117,  272 => 116,  270 => 115,  264 => 114,  257 => 110,  253 => 109,  241 => 102,  230 => 96,  222 => 90,  216 => 87,  213 => 86,  211 => 85,  205 => 82,  201 => 81,  196 => 79,  191 => 78,  187 => 76,  181 => 73,  178 => 72,  176 => 71,  172 => 70,  165 => 68,  159 => 65,  152 => 60,  145 => 56,  141 => 54,  139 => 53,  133 => 50,  126 => 46,  119 => 42,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  55 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/coupon_form.twig", "");
    }
}
