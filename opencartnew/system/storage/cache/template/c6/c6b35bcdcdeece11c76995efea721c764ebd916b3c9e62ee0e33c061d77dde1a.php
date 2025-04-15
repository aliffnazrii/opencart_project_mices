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
class __TwigTemplate_946c0d8235fc84ec63811eefb3d099dabd34cc71fd4fca208e3d911cd1dc8fd6 extends \Twig\Template
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
                  ";
        // line 69
        if (($context["error_name"] ?? null)) {
            // line 70
            echo "                    <div class=\"text-danger\">
                      ";
            // line 71
            echo ($context["error_name"] ?? null);
            echo "
                    </div>
                  ";
        }
        // line 74
        echo "                </div>

\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"Voucher ID in Acilit\">Voucher Id</span></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"voucher_id\" value=\"";
        // line 80
        echo ($context["voucher_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_id"] ?? null);
        echo "\" id=\"input-voucherId\" class=\"form-control\" readonly />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"Serial No From Acilit\">Serial No</span></label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"voucher_serialNo\" value=\"";
        // line 87
        echo ($context["voucher_serialNo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_serialNo"] ?? null);
        echo "\" id=\"input-voucher-serialNo\" class=\"form-control\" readonly />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
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
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 99
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                  ";
        // line 100
        if (($context["error_code"] ?? null)) {
            // line 101
            echo "                    <div class=\"text-danger\">
                      ";
            // line 102
            echo ($context["error_code"] ?? null);
            echo "
                    </div>
                  ";
        }
        // line 105
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-type\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 109
        echo ($context["help_type"] ?? null);
        echo "\">
                    ";
        // line 110
        echo ($context["entry_type"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-control\">
                    ";
        // line 115
        if ((($context["type"] ?? null) == "P")) {
            // line 116
            echo "                      <option value=\"P\" selected=\"selected\">
                        ";
            // line 117
            echo ($context["text_percent"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 120
            echo "                      <option value=\"P\">
                        ";
            // line 121
            echo ($context["text_percent"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 124
        echo "                    ";
        if ((($context["type"] ?? null) == "F")) {
            // line 125
            echo "                      <option value=\"F\" selected=\"selected\">
                        ";
            // line 126
            echo ($context["text_amount"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 129
            echo "                      <option value=\"F\">
                        ";
            // line 130
            echo ($context["text_amount"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 133
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-discount\">
                  ";
        // line 138
        echo ($context["entry_discount"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 141
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 146
        echo ($context["help_total"] ?? null);
        echo "\">
                    ";
        // line 147
        echo ($context["entry_total"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 151
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 156
        echo ($context["help_logged"] ?? null);
        echo "\">
                    ";
        // line 157
        echo ($context["entry_logged"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 162
        if (($context["logged"] ?? null)) {
            // line 163
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\" />
                      ";
            // line 164
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 166
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" />
                      ";
            // line 167
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 169
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 171
        if ( !($context["logged"] ?? null)) {
            // line 172
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\" />
                      ";
            // line 173
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 175
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" />
                      ";
            // line 176
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 178
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">
                  ";
        // line 183
        echo ($context["entry_shipping"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 187
        if (($context["shipping"] ?? null)) {
            // line 188
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                      ";
            // line 189
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 191
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" />
                      ";
            // line 192
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 194
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 196
        if ( !($context["shipping"] ?? null)) {
            // line 197
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                      ";
            // line 198
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 200
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" />
                      ";
            // line 201
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 203
        echo "                  </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 208
        echo ($context["help_product"] ?? null);
        echo "\">
                    ";
        // line 209
        echo ($context["entry_product"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 213
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                  <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 216
            echo "                      <div id=\"coupon-product";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 216);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 218
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 218);
            echo "
                        <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 219
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 219);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 227
        echo ($context["help_category"] ?? null);
        echo "\">
                    ";
        // line 228
        echo ($context["entry_category"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 232
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 235
            echo "                      <div id=\"coupon-category";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 235);
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 237
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 237);
            echo "
                        <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 238
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 238);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-start\">
                  ";
        // line 246
        echo ($context["entry_date_start"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 250
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
        // line 261
        echo ($context["entry_date_end"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 265
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
        // line 276
        echo ($context["help_uses_total"] ?? null);
        echo "\">
                    ";
        // line 277
        echo ($context["entry_uses_total"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 281
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"input-uses-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-uses-customer\">
                  <span data-toggle=\"tooltip\" title=\"";
        // line 286
        echo ($context["help_uses_customer"] ?? null);
        echo "\">
                    ";
        // line 287
        echo ($context["entry_uses_customer"] ?? null);
        echo "
                  </span>
                </label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 291
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">
                  ";
        // line 296
        echo ($context["entry_status"] ?? null);
        echo "
                </label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 300
        if (($context["status"] ?? null)) {
            // line 301
            echo "                      <option value=\"1\" selected=\"selected\">
                        ";
            // line 302
            echo ($context["text_enabled"] ?? null);
            echo "
                      </option>
                      <option value=\"0\">
                        ";
            // line 305
            echo ($context["text_disabled"] ?? null);
            echo "
                      </option>
                    ";
        } else {
            // line 308
            echo "                      <option value=\"1\">
                        ";
            // line 309
            echo ($context["text_enabled"] ?? null);
            echo "
                      </option>
                      <option value=\"0\" selected=\"selected\">
                        ";
            // line 312
            echo ($context["text_disabled"] ?? null);
            echo "
                      </option>
                    ";
        }
        // line 315
        echo "                  </select>
                </div>
              </div>
            </div>
            ";
        // line 319
        if (($context["coupon_id"] ?? null)) {
            // line 320
            echo "              <div class=\"tab-pane\" id=\"tab-history\">
                <fieldset>
                  <legend>
                    ";
            // line 323
            echo ($context["text_coupon"] ?? null);
            echo "
                  </legend>
                  <div id=\"history\"></div>
                </fieldset>
              </div>
            ";
        }
        // line 329
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--

\t\t\t\tfunction validateVoucher() {
\t\t\t\t\t\$('#acilit-voucher-message').removeClass('text-success text-danger').text('');
\t\t\t\t\t
\t\t\t\t\tvar voucher = \$('input[name=\"voucher\"]').val();
\t\t\t\t\tvar button = \$('#btn-voucher-validate');
\t\t\t\t\t
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=extension/module/acilit/validateVoucher&user_token=";
        // line 343
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\tdata: { model: voucher },

\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\$(button).button('loading');
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\$(button).button('reset');
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json.error) {
\t\t\t\t\t\t\t\t\$('#acilit-voucher-message').addClass('text-danger').text(json.error);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$('#acilit-voucher-message').addClass('text-success').text('Linked');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif (json.voucher_id) {
\t\t\t\t\t\t\t\t\t\$('input[name=\"voucher_id\"]').val(json.voucher_id);
\t\t\t\t\t\t\t\t\t\$('input[name=\"price\"]').val(json.price);
\t\t\t\t\t\t\t\t\t\$('input[name=\"sku\"]').val(json.quantity);
\t\t\t\t\t\t\t\t\t\$('input[name=\"voucher_id\"]').val(json.voucher_id);
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('input[name=\"voucher_id\"]').prop('readonly', true);
\t\t\t\t\t\t\t\t\t\$('#btn-voucher-unlink').removeClass('hide');
\t\t\t\t\t\t\t\t\t\$('#btn-voucher-validate').addClass('hide');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t
\t\t\t\tfunction unlinkVoucher() {
\t\t\t\t\t\$('#acilit-voucher-message').removeClass('text-success text-danger').text('');
\t\t\t\t\t
\t\t\t\t\t\$('input[name=\"voucher_id\"]').val(0);
\t\t\t\t\t\$('input[name=\"voucher_id\"]').prop('readonly', false);
\t\t\t\t\t\$('#btn-voucher-validate').removeClass('hide');
\t\t\t\t\t\$('#btn-voucher-unlink').addClass('hide');
\t\t\t\t\t
\t\t\t\t\t\$('#acilit-voucher-message').addClass('text-success').text('Not Linked');
\t\t\t\t}
\t\t\t\t
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 389
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
        // line 418
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
        // line 443
        if (($context["coupon_id"] ?? null)) {
            // line 444
            echo "    <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=marketing/coupon/history&user_token=";
            // line 451
            echo ($context["user_token"] ?? null);
            echo "&coupon_id=";
            echo ($context["coupon_id"] ?? null);
            echo "');
//--></script>
  ";
        }
        // line 454
        echo "  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 456
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script>
</div>
";
        // line 461
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
        return array (  855 => 461,  847 => 456,  843 => 454,  835 => 451,  826 => 444,  824 => 443,  796 => 418,  764 => 389,  715 => 343,  699 => 329,  690 => 323,  685 => 320,  683 => 319,  677 => 315,  671 => 312,  665 => 309,  662 => 308,  656 => 305,  650 => 302,  647 => 301,  645 => 300,  638 => 296,  628 => 291,  621 => 287,  617 => 286,  607 => 281,  600 => 277,  596 => 276,  580 => 265,  573 => 261,  557 => 250,  550 => 246,  543 => 241,  534 => 238,  530 => 237,  524 => 235,  520 => 234,  515 => 232,  508 => 228,  504 => 227,  497 => 222,  488 => 219,  484 => 218,  478 => 216,  474 => 215,  469 => 213,  462 => 209,  458 => 208,  451 => 203,  446 => 201,  443 => 200,  438 => 198,  435 => 197,  433 => 196,  429 => 194,  424 => 192,  421 => 191,  416 => 189,  413 => 188,  411 => 187,  404 => 183,  397 => 178,  392 => 176,  389 => 175,  384 => 173,  381 => 172,  379 => 171,  375 => 169,  370 => 167,  367 => 166,  362 => 164,  359 => 163,  357 => 162,  349 => 157,  345 => 156,  335 => 151,  328 => 147,  324 => 146,  314 => 141,  308 => 138,  301 => 133,  295 => 130,  292 => 129,  286 => 126,  283 => 125,  280 => 124,  274 => 121,  271 => 120,  265 => 117,  262 => 116,  260 => 115,  252 => 110,  248 => 109,  242 => 105,  236 => 102,  233 => 101,  231 => 100,  225 => 99,  218 => 95,  214 => 94,  202 => 87,  190 => 80,  182 => 74,  176 => 71,  173 => 70,  171 => 69,  165 => 68,  159 => 65,  152 => 60,  145 => 56,  141 => 54,  139 => 53,  133 => 50,  126 => 46,  119 => 42,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  55 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/coupon_form.twig", "");
    }
}
