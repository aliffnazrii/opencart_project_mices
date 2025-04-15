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
class __TwigTemplate_a5ef37a0890c9e3a9a409725eed0628b58f1072e3ebd3c8f4fd8fbba8869d268 extends \Twig\Template
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
            echo "\t\t\t\t\t<div id=\"acilit-voucher-message\" class=\"text-danger\">
\t\t\t\t\t\t";
            // line 73
            echo ($context["acilit_error"] ?? null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t\t<div id=\"acilit-voucher-message\"></div>
\t\t\t\t";
        }
        // line 78
        echo "
\t\t\t\t<a id=\"btn-voucher-validate\" class=\"btn btn-primary ";
        // line 79
        echo ((((($context["acilit_voucher_id"] ?? null) != "0") && (($context["acilit_voucher_id"] ?? null) != ""))) ? ("hide") : (""));
        echo "\" onclick=\"validateVoucher()\">
\t\t\t\t\t{ text_link }}
\t\t\t\t</a>
\t\t\t\t<a id=\"btn-voucher-unlink\" class=\"btn btn-primary ";
        // line 82
        echo ((((($context["acilit_voucher_id"] ?? null) == "0") || (($context["acilit_voucher_id"] ?? null) == ""))) ? ("hide") : (""));
        echo "\" onclick=\"unlinkVoucher()\">
\t\t\t\t\t";
        // line 83
        echo ($context["text_unlink"] ?? null);
        echo "
\t\t\t\t</a>
\t\t\t\t
                  ";
        // line 86
        if (($context["error_name"] ?? null)) {
            // line 87
            echo "                    <div class=\"text-danger\">
                      ";
            // line 88
            echo ($context["error_name"] ?? null);
            echo "
                    </div>
                  ";
        }
        // line 91
        echo "                </div>

\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"Voucher ID in Acilit\">Voucher Id</span></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"voucher_id\" value=\"";
        // line 97
        echo ($context["voucher_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_id"] ?? null);
        echo "\" id=\"input-voucherId\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"Serial No From Acilit\">Serial No</span></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"voucher_serialNo\" value=\"";
        // line 104
        echo ($context["voucher_serialNo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_serialNo"] ?? null);
        echo "\" id=\"input-voucher-serialNo\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-code\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 111
        echo ($context["help_code"] ?? null);
        echo "\">
                    ";
        // line 112
        echo ($context["entry_code"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 116
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                  ";
        // line 117
        if (($context["error_code"] ?? null)) {
            // line 118
            echo "                    <div class=\"text-danger\">
                      ";
            // line 119
            echo ($context["error_code"] ?? null);
            echo "
                    </div>
                  ";
        }
        // line 122
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-type\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 126
        echo ($context["help_type"] ?? null);
        echo "\">
                    ";
        // line 127
        echo ($context["entry_type"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-control\">
                    ";
        // line 132
        if ((($context["type"] ?? null) == "P")) {
            // line 133
            echo "                      <option value=\"P\" selected=\"selected\">
                        ";
            // line 134
            echo ($context["text_percent"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 137
            echo "                      <option value=\"P\">
                        ";
            // line 138
            echo ($context["text_percent"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 141
        echo "                    ";
        if ((($context["type"] ?? null) == "F")) {
            // line 142
            echo "                      <option value=\"F\" selected=\"selected\">
                        ";
            // line 143
            echo ($context["text_amount"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 146
            echo "                      <option value=\"F\">
                        ";
            // line 147
            echo ($context["text_amount"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 150
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-discount\">
                  ";
        // line 155
        echo ($context["entry_discount"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 158
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 163
        echo ($context["help_total"] ?? null);
        echo "\">
                    ";
        // line 164
        echo ($context["entry_total"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 168
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 173
        echo ($context["help_logged"] ?? null);
        echo "\">
                    ";
        // line 174
        echo ($context["entry_logged"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 179
        if (($context["logged"] ?? null)) {
            // line 180
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\" />
                      ";
            // line 181
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 183
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" />
                      ";
            // line 184
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 186
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 188
        if ( !($context["logged"] ?? null)) {
            // line 189
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\" />
                      ";
            // line 190
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 192
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" />
                      ";
            // line 193
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 195
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  ";
        // line 200
        echo ($context["entry_shipping"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 204
        if (($context["shipping"] ?? null)) {
            // line 205
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                      ";
            // line 206
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 208
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" />
                      ";
            // line 209
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 211
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 213
        if ( !($context["shipping"] ?? null)) {
            // line 214
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                      ";
            // line 215
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 217
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" />
                      ";
            // line 218
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 220
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 225
        echo ($context["help_product"] ?? null);
        echo "\">
                    ";
        // line 226
        echo ($context["entry_product"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 230
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 233
            echo "                      <div id=\"coupon-product";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 233);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 235
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 235);
            echo "
                        <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 236
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 236);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 244
        echo ($context["help_category"] ?? null);
        echo "\">
                    ";
        // line 245
        echo ($context["entry_category"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 249
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 252
            echo "                      <div id=\"coupon-category";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 252);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 254
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 254);
            echo "
                        <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 255
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 255);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-start\">
                  ";
        // line 263
        echo ($context["entry_date_start"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 267
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
        // line 278
        echo ($context["entry_date_end"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 282
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
        // line 293
        echo ($context["help_uses_total"] ?? null);
        echo "\">
                    ";
        // line 294
        echo ($context["entry_uses_total"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 298
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"input-uses-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-customer\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 303
        echo ($context["help_uses_customer"] ?? null);
        echo "\">
                    ";
        // line 304
        echo ($context["entry_uses_customer"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 308
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">
                  ";
        // line 313
        echo ($context["entry_status"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 317
        if (($context["status"] ?? null)) {
            // line 318
            echo "                      <option value=\"1\" selected=\"selected\">
                        ";
            // line 319
            echo ($context["text_enabled"] ?? null);
            echo "
                      </option>
                      <option value=\"0\">
                        ";
            // line 322
            echo ($context["text_disabled"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 325
            echo "                      <option value=\"1\">
                        ";
            // line 326
            echo ($context["text_enabled"] ?? null);
            echo "
                      </option>
                      <option value=\"0\" selected=\"selected\">
                        ";
            // line 329
            echo ($context["text_disabled"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 332
        echo "                  </select>
                </div>
              </div>
            </div>
            ";
        // line 336
        if (($context["coupon_id"] ?? null)) {
            // line 337
            echo "              <div class=\"tab-pane\" id=\"tab-history\">
                <fieldset>
                  <legend>
                    ";
            // line 340
            echo ($context["text_coupon"] ?? null);
            echo "
                  </legend>
                  <div id=\"history\"></div>
                </fieldset>
              </div>
            ";
        }
        // line 346
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--

\t\t\t\tfunction validateVoucher() {
\t\t\t\t\$('#acilit-voucher-message').removeClass('text-success text-danger').text('');
\t\t\t\t
\t\t\t\tvar voucher = \$('input[name=\"voucher\"]').val();
\t\t\t\tvar button = \$('#btn-voucher-validate');
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/acilit/validateVoucher&user_token=";
        // line 360
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
\t\t\t\tif (json.voucher_id) {
\t\t\t\t\$('input[name=\"voucher_id\"]').val(json.voucher_id);
\t\t\t\t\$('input[name=\"price\"]').val(json.price);
\t\t\t\t\$('input[name=\"sku\"]').val(json.quantity);
\t\t\t\t\$('input[name=\"voucher_id\"]').val(json.voucher_id);
\t\t\t\t
\t\t\t\t\$('input[name=\"voucher_id\"]').prop('readonly', true);
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
\t\t\t\t\$('input[name=\"voucher_id\"]').val(0);
\t\t\t\t\$('input[name=\"voucher_id\"]').prop('readonly', false);
\t\t\t\t\$('#btn-voucher-validate').removeClass('hide');
\t\t\t\t\$('#btn-voucher-unlink').addClass('hide');
\t\t\t\t
\t\t\t\t\$('#acilit-voucher-message').addClass('text-success').text('Not Linked');
\t\t\t\t}
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
        return array (  893 => 477,  885 => 472,  881 => 470,  873 => 467,  864 => 460,  862 => 459,  834 => 434,  802 => 405,  754 => 360,  738 => 346,  729 => 340,  724 => 337,  722 => 336,  716 => 332,  710 => 329,  704 => 326,  701 => 325,  695 => 322,  689 => 319,  686 => 318,  684 => 317,  677 => 313,  667 => 308,  660 => 304,  656 => 303,  646 => 298,  639 => 294,  635 => 293,  619 => 282,  612 => 278,  596 => 267,  589 => 263,  582 => 258,  573 => 255,  569 => 254,  563 => 252,  559 => 251,  554 => 249,  547 => 245,  543 => 244,  536 => 239,  527 => 236,  523 => 235,  517 => 233,  513 => 232,  508 => 230,  501 => 226,  497 => 225,  490 => 220,  485 => 218,  482 => 217,  477 => 215,  474 => 214,  472 => 213,  468 => 211,  463 => 209,  460 => 208,  455 => 206,  452 => 205,  450 => 204,  443 => 200,  436 => 195,  431 => 193,  428 => 192,  423 => 190,  420 => 189,  418 => 188,  414 => 186,  409 => 184,  406 => 183,  401 => 181,  398 => 180,  396 => 179,  388 => 174,  384 => 173,  374 => 168,  367 => 164,  363 => 163,  353 => 158,  347 => 155,  340 => 150,  334 => 147,  331 => 146,  325 => 143,  322 => 142,  319 => 141,  313 => 138,  310 => 137,  304 => 134,  301 => 133,  299 => 132,  291 => 127,  287 => 126,  281 => 122,  275 => 119,  272 => 118,  270 => 117,  264 => 116,  257 => 112,  253 => 111,  241 => 104,  229 => 97,  221 => 91,  215 => 88,  212 => 87,  210 => 86,  204 => 83,  200 => 82,  194 => 79,  191 => 78,  187 => 76,  181 => 73,  178 => 72,  176 => 71,  172 => 70,  165 => 68,  159 => 65,  152 => 60,  145 => 56,  141 => 54,  139 => 53,  133 => 50,  126 => 46,  119 => 42,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  55 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/coupon_form.twig", "");
    }
}
