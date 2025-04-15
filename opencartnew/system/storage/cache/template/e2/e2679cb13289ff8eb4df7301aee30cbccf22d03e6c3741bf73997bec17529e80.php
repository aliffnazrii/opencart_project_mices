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
class __TwigTemplate_5438d864cedb0c96615801b475169fd647c2ee6f953bc4cc2472c36e2995bbbd extends \Twig\Template
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
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-code\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 94
        echo ($context["help_code"] ?? null);
        echo "\">
                    ";
        // line 95
        echo ($context["entry_code"] ?? null);
        echo "

\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"\">Voucher Id</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"voucher_id\" value=\"";
        // line 100
        echo ($context["voucher_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_id"] ?? null);
        echo "\" id=\"input-voucherId\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"\">Serial No</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"voucher_serialNo\" value=\"";
        // line 106
        echo ($context["voucher_serialNo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_serialNo"] ?? null);
        echo "\" id=\"input-voucher-serialNo\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
                  </span>
                </label>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"\">Voucher Id</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"voucher_id\" value=\"";
        // line 116
        echo ($context["voucher_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_id"] ?? null);
        echo "\" id=\"input-voucherId\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"\">Serial No</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"voucher_serialNo\" value=\"";
        // line 122
        echo ($context["voucher_serialNo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_serialNo"] ?? null);
        echo "\" id=\"input-voucher-serialNo\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 127
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                  ";
        // line 128
        if (($context["error_code"] ?? null)) {
            // line 129
            echo "                    <div class=\"text-danger\">
                      ";
            // line 130
            echo ($context["error_code"] ?? null);
            echo "
                    </div>
                  ";
        }
        // line 133
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-type\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 137
        echo ($context["help_type"] ?? null);
        echo "\">
                    ";
        // line 138
        echo ($context["entry_type"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-control\">
                    ";
        // line 143
        if ((($context["type"] ?? null) == "P")) {
            // line 144
            echo "                      <option value=\"P\" selected=\"selected\">
                        ";
            // line 145
            echo ($context["text_percent"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 148
            echo "                      <option value=\"P\">
                        ";
            // line 149
            echo ($context["text_percent"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 152
        echo "                    ";
        if ((($context["type"] ?? null) == "F")) {
            // line 153
            echo "                      <option value=\"F\" selected=\"selected\">
                        ";
            // line 154
            echo ($context["text_amount"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 157
            echo "                      <option value=\"F\">
                        ";
            // line 158
            echo ($context["text_amount"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 161
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-discount\">
                  ";
        // line 166
        echo ($context["entry_discount"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 169
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 174
        echo ($context["help_total"] ?? null);
        echo "\">
                    ";
        // line 175
        echo ($context["entry_total"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 179
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 184
        echo ($context["help_logged"] ?? null);
        echo "\">
                    ";
        // line 185
        echo ($context["entry_logged"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 190
        if (($context["logged"] ?? null)) {
            // line 191
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\" />
                      ";
            // line 192
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 194
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" />
                      ";
            // line 195
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 197
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 199
        if ( !($context["logged"] ?? null)) {
            // line 200
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\" />
                      ";
            // line 201
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 203
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" />
                      ";
            // line 204
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 206
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  ";
        // line 211
        echo ($context["entry_shipping"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 215
        if (($context["shipping"] ?? null)) {
            // line 216
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                      ";
            // line 217
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 219
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" />
                      ";
            // line 220
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 222
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 224
        if ( !($context["shipping"] ?? null)) {
            // line 225
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                      ";
            // line 226
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 228
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" />
                      ";
            // line 229
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 231
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 236
        echo ($context["help_product"] ?? null);
        echo "\">
                    ";
        // line 237
        echo ($context["entry_product"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 241
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 244
            echo "                      <div id=\"coupon-product";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 244);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 246
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 246);
            echo "
                        <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 247
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 247);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 255
        echo ($context["help_category"] ?? null);
        echo "\">
                    ";
        // line 256
        echo ($context["entry_category"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 260
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 263
            echo "                      <div id=\"coupon-category";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 263);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 265
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 265);
            echo "
                        <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 266
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 266);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-start\">
                  ";
        // line 274
        echo ($context["entry_date_start"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 278
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
        // line 289
        echo ($context["entry_date_end"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 293
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
        // line 304
        echo ($context["help_uses_total"] ?? null);
        echo "\">
                    ";
        // line 305
        echo ($context["entry_uses_total"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 309
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"input-uses-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-customer\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 314
        echo ($context["help_uses_customer"] ?? null);
        echo "\">
                    ";
        // line 315
        echo ($context["entry_uses_customer"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 319
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">
                  ";
        // line 324
        echo ($context["entry_status"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 328
        if (($context["status"] ?? null)) {
            // line 329
            echo "                      <option value=\"1\" selected=\"selected\">
                        ";
            // line 330
            echo ($context["text_enabled"] ?? null);
            echo "
                      </option>
                      <option value=\"0\">
                        ";
            // line 333
            echo ($context["text_disabled"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 336
            echo "                      <option value=\"1\">
                        ";
            // line 337
            echo ($context["text_enabled"] ?? null);
            echo "
                      </option>
                      <option value=\"0\" selected=\"selected\">
                        ";
            // line 340
            echo ($context["text_disabled"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 343
        echo "                  </select>
                </div>
              </div>
            </div>
            ";
        // line 347
        if (($context["coupon_id"] ?? null)) {
            // line 348
            echo "              <div class=\"tab-pane\" id=\"tab-history\">
                <fieldset>
                  <legend>
                    ";
            // line 351
            echo ($context["text_coupon"] ?? null);
            echo "
                  </legend>
                  <div id=\"history\"></div>
                </fieldset>
              </div>
            ";
        }
        // line 357
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
        // line 372
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
        // line 418
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
        // line 447
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
        // line 472
        if (($context["coupon_id"] ?? null)) {
            // line 473
            echo "    <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=marketing/coupon/history&user_token=";
            // line 480
            echo ($context["user_token"] ?? null);
            echo "&coupon_id=";
            echo ($context["coupon_id"] ?? null);
            echo "');
//--></script>
  ";
        }
        // line 483
        echo "  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 485
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script>
</div>
";
        // line 490
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
        return array (  918 => 490,  910 => 485,  906 => 483,  898 => 480,  889 => 473,  887 => 472,  859 => 447,  827 => 418,  778 => 372,  761 => 357,  752 => 351,  747 => 348,  745 => 347,  739 => 343,  733 => 340,  727 => 337,  724 => 336,  718 => 333,  712 => 330,  709 => 329,  707 => 328,  700 => 324,  690 => 319,  683 => 315,  679 => 314,  669 => 309,  662 => 305,  658 => 304,  642 => 293,  635 => 289,  619 => 278,  612 => 274,  605 => 269,  596 => 266,  592 => 265,  586 => 263,  582 => 262,  577 => 260,  570 => 256,  566 => 255,  559 => 250,  550 => 247,  546 => 246,  540 => 244,  536 => 243,  531 => 241,  524 => 237,  520 => 236,  513 => 231,  508 => 229,  505 => 228,  500 => 226,  497 => 225,  495 => 224,  491 => 222,  486 => 220,  483 => 219,  478 => 217,  475 => 216,  473 => 215,  466 => 211,  459 => 206,  454 => 204,  451 => 203,  446 => 201,  443 => 200,  441 => 199,  437 => 197,  432 => 195,  429 => 194,  424 => 192,  421 => 191,  419 => 190,  411 => 185,  407 => 184,  397 => 179,  390 => 175,  386 => 174,  376 => 169,  370 => 166,  363 => 161,  357 => 158,  354 => 157,  348 => 154,  345 => 153,  342 => 152,  336 => 149,  333 => 148,  327 => 145,  324 => 144,  322 => 143,  314 => 138,  310 => 137,  304 => 133,  298 => 130,  295 => 129,  293 => 128,  287 => 127,  277 => 122,  266 => 116,  251 => 106,  240 => 100,  232 => 95,  228 => 94,  222 => 90,  216 => 87,  213 => 86,  211 => 85,  205 => 82,  201 => 81,  196 => 79,  191 => 78,  187 => 76,  181 => 73,  178 => 72,  176 => 71,  172 => 70,  165 => 68,  159 => 65,  152 => 60,  145 => 56,  141 => 54,  139 => 53,  133 => 50,  126 => 46,  119 => 42,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  55 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/coupon_form.twig", "");
    }
}
