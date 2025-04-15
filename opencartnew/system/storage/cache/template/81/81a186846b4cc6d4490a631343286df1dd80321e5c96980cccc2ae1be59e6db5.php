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
class __TwigTemplate_ef078870b5369ced14bc66a2886af9bf58a4be685f647c7c98efe26cbf4c0ab3 extends \Twig\Template
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

                  <input type=\"hidden\" name=\"acilit_voucher_id\" value=\"";
        // line 70
        echo ($context["acilit_voucher_id"] ?? null);
        echo "\">
                    ";
        // line 71
        if (($context["acilit_error"] ?? null)) {
            // line 72
            echo "                      <div id=\"acilit-voucher-message\" class=\"text-danger\">
                        ";
            // line 73
            echo ($context["acilit_error"] ?? null);
            echo "
                      </div>
                    ";
        } else {
            // line 76
            echo "                      <div id=\"acilit-voucher-message\"></div>
                    ";
        }
        // line 78
        echo "                    <a id=\"btn-voucher-validate\" class=\"btn btn-primary ";
        echo ((((($context["acilit_voucher_id"] ?? null) != "0") && (($context["acilit_voucher_id"] ?? null) != ""))) ? ("hide") : (""));
        echo "\" onclick=\"validateVoucher()\">
                      ";
        // line 79
        echo ($context["text_link"] ?? null);
        echo "
                    </a>
                    <a id=\"btn-voucher-unlink\" class=\"btn btn-primary ";
        // line 81
        echo ((((($context["acilit_voucher_id"] ?? null) == "0") || (($context["acilit_voucher_id"] ?? null) == ""))) ? ("hide") : (""));
        echo "\" onclick=\"unlinkVoucher()\">
                      ";
        // line 82
        echo ($context["text_unlink"] ?? null);
        echo "
                    </a>

                    ";
        // line 85
        if (($context["error_name"] ?? null)) {
            // line 86
            echo "                      <div class=\"text-danger\">
                        ";
            // line 87
            echo ($context["error_name"] ?? null);
            echo "
                      </div>
                    ";
        }
        // line 90
        echo "                  </div>

                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-total\">
                    <span data-toggle=\"tooltip\" title=\"Voucher ID in Acilit\">
                      Voucher Id
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"voucher_id\" value=\"";
        // line 100
        echo ($context["voucher_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_id"] ?? null);
        echo "\" id=\"input-voucherId\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-total\">
                    <span data-toggle=\"tooltip\" title=\"Serial No From Acilit\">
                      Serial No
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"voucher_serialNo\" value=\"";
        // line 110
        echo ($context["voucher_serialNo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_serialNo"] ?? null);
        echo "\" id=\"input-voucher-serialNo\" class=\"form-control\" />
                  </div>

                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-code\">
                    <span data-toggle=\"tooltip\" title=\"";
        // line 116
        echo ($context["help_code"] ?? null);
        echo "\">
                      ";
        // line 117
        echo ($context["entry_code"] ?? null);
        echo "
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"code\" value=\"";
        // line 121
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                    ";
        // line 122
        if (($context["error_code"] ?? null)) {
            // line 123
            echo "                      <div class=\"text-danger\">
                        ";
            // line 124
            echo ($context["error_code"] ?? null);
            echo "
                      </div>
                    ";
        }
        // line 127
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-type\">
                    <span data-toggle=\"tooltip\" title=\"";
        // line 131
        echo ($context["help_type"] ?? null);
        echo "\">
                      ";
        // line 132
        echo ($context["entry_type"] ?? null);
        echo "
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <select name=\"type\" id=\"input-type\" class=\"form-control\">
                      ";
        // line 137
        if ((($context["type"] ?? null) == "P")) {
            // line 138
            echo "                        <option value=\"P\" selected=\"selected\">
                          ";
            // line 139
            echo ($context["text_percent"] ?? null);
            echo "
                        </option>
                      ";
        } else {
            // line 142
            echo "                        <option value=\"P\">
                          ";
            // line 143
            echo ($context["text_percent"] ?? null);
            echo "
                        </option>
                      ";
        }
        // line 146
        echo "                      ";
        if ((($context["type"] ?? null) == "F")) {
            // line 147
            echo "                        <option value=\"F\" selected=\"selected\">
                          ";
            // line 148
            echo ($context["text_amount"] ?? null);
            echo "
                        </option>
                      ";
        } else {
            // line 151
            echo "                        <option value=\"F\">
                          ";
            // line 152
            echo ($context["text_amount"] ?? null);
            echo "
                        </option>
                      ";
        }
        // line 155
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-discount\">
                    ";
        // line 160
        echo ($context["entry_discount"] ?? null);
        echo "
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"discount\" value=\"";
        // line 163
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-total\">
                    <span data-toggle=\"tooltip\" title=\"";
        // line 168
        echo ($context["help_total"] ?? null);
        echo "\">
                      ";
        // line 169
        echo ($context["entry_total"] ?? null);
        echo "
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"total\" value=\"";
        // line 173
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">
                    <span data-toggle=\"tooltip\" title=\"";
        // line 178
        echo ($context["help_logged"] ?? null);
        echo "\">
                      ";
        // line 179
        echo ($context["entry_logged"] ?? null);
        echo "
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 184
        if (($context["logged"] ?? null)) {
            // line 185
            echo "                        <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\" />
                        ";
            // line 186
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 188
            echo "                        <input type=\"radio\" name=\"logged\" value=\"1\" />
                        ";
            // line 189
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 191
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 193
        if ( !($context["logged"] ?? null)) {
            // line 194
            echo "                        <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\" />
                        ";
            // line 195
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 197
            echo "                        <input type=\"radio\" name=\"logged\" value=\"0\" />
                        ";
            // line 198
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 200
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">
                    ";
        // line 205
        echo ($context["entry_shipping"] ?? null);
        echo "
                  </label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 209
        if (($context["shipping"] ?? null)) {
            // line 210
            echo "                        <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                        ";
            // line 211
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 213
            echo "                        <input type=\"radio\" name=\"shipping\" value=\"1\" />
                        ";
            // line 214
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 216
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 218
        if ( !($context["shipping"] ?? null)) {
            // line 219
            echo "                        <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                        ";
            // line 220
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 222
            echo "                        <input type=\"radio\" name=\"shipping\" value=\"0\" />
                        ";
            // line 223
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 225
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-product\">
                    <span data-toggle=\"tooltip\" title=\"";
        // line 230
        echo ($context["help_product"] ?? null);
        echo "\">
                      ";
        // line 231
        echo ($context["entry_product"] ?? null);
        echo "
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 235
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                    <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 238
            echo "                        <div id=\"coupon-product";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 238);
            echo "\">
                          <i class=\"fa fa-minus-circle\"></i>
                          ";
            // line 240
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "name", [], "any", false, false, false, 240);
            echo "
                          <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 241
            echo twig_get_attribute($this->env, $this->source, $context["coupon_product"], "product_id", [], "any", false, false, false, 241);
            echo "\" />
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-category\">
                    <span data-toggle=\"tooltip\" title=\"";
        // line 249
        echo ($context["help_category"] ?? null);
        echo "\">
                      ";
        // line 250
        echo ($context["entry_category"] ?? null);
        echo "
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 254
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                    <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 257
            echo "                        <div id=\"coupon-category";
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 257);
            echo "\">
                          <i class=\"fa fa-minus-circle\"></i>
                          ";
            // line 259
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "name", [], "any", false, false, false, 259);
            echo "
                          <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 260
            echo twig_get_attribute($this->env, $this->source, $context["coupon_category"], "category_id", [], "any", false, false, false, 260);
            echo "\" />
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-date-start\">
                    ";
        // line 268
        echo ($context["entry_date_start"] ?? null);
        echo "
                  </label>
                  <div class=\"col-sm-3\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"date_start\" value=\"";
        // line 272
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
        // line 283
        echo ($context["entry_date_end"] ?? null);
        echo "
                  </label>
                  <div class=\"col-sm-3\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"date_end\" value=\"";
        // line 287
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
        // line 298
        echo ($context["help_uses_total"] ?? null);
        echo "\">
                      ";
        // line 299
        echo ($context["entry_uses_total"] ?? null);
        echo "
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"uses_total\" value=\"";
        // line 303
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"input-uses-total\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-uses-customer\">
                    <span data-toggle=\"tooltip\" title=\"";
        // line 308
        echo ($context["help_uses_customer"] ?? null);
        echo "\">
                      ";
        // line 309
        echo ($context["entry_uses_customer"] ?? null);
        echo "
                    </span>
                  </label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 313
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-status\">
                    ";
        // line 318
        echo ($context["entry_status"] ?? null);
        echo "
                  </label>
                  <div class=\"col-sm-10\">
                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                      ";
        // line 322
        if (($context["status"] ?? null)) {
            // line 323
            echo "                        <option value=\"1\" selected=\"selected\">
                          ";
            // line 324
            echo ($context["text_enabled"] ?? null);
            echo "
                        </option>
                        <option value=\"0\">
                          ";
            // line 327
            echo ($context["text_disabled"] ?? null);
            echo "
                        </option>
                      ";
        } else {
            // line 330
            echo "                        <option value=\"1\">
                          ";
            // line 331
            echo ($context["text_enabled"] ?? null);
            echo "
                        </option>
                        <option value=\"0\" selected=\"selected\">
                          ";
            // line 334
            echo ($context["text_disabled"] ?? null);
            echo "
                        </option>
                      ";
        }
        // line 337
        echo "                    </select>
                  </div>
                </div>
              </div>
              ";
        // line 341
        if (($context["coupon_id"] ?? null)) {
            // line 342
            echo "                <div class=\"tab-pane\" id=\"tab-history\">
                  <fieldset>
                    <legend>
                      ";
            // line 345
            echo ($context["text_coupon"] ?? null);
            echo "
                    </legend>
                    <div id=\"history\"></div>
                  </fieldset>
                </div>
              ";
        }
        // line 351
        echo "            </div>
          </form>
        </div>
      </div>
    </div>
    <script type=\"text/javascript\">


\t\t\t\tfunction validateVoucher() {
\t\t\t\t\$('#acilit-voucher-message').removeClass('text-success text-danger').text('');
\t\t\t\t
\t\t\t\tvar voucher = \$('input[name=\"voucher\"]').val();
\t\t\t\tvar button = \$('#btn-voucher-validate');
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/acilit/validateVoucher&user_token=";
        // line 366
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
\t\t\t\t\$('input[name=\"voucher_id\"]').val(json.voucher_id);
\t\t\t\t\$('input[name=\"price\"]').val(json.price);
\t\t\t\t\$('input[name=\"sku\"]').val(json.quantity);
\t\t\t\t\$('input[name=\"voucher_id\"]').val(json.voucher_id);
\t\t\t\t
\t\t\t\t\$('input[name=\"voucher_id\"]').prop('readonly', true);
\t\t\t\t\$('input[name=\"voucher_serialNo\"]').prop('readonly', true);
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
\t\t\t\t\$('input[name=\"voucher_serialNo\"]').prop('readonly', false);
\t\t\t\t\$('#btn-voucher-validate').removeClass('hide');
\t\t\t\t\$('#btn-voucher-unlink').addClass('hide');
\t\t\t\t
\t\t\t\t\$('#acilit-voucher-message').addClass('text-success').text('Not Linked');
\t\t\t\t}
\t\t\t
\t\t\t\t
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 414
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
        // line 443
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
        // line 468
        if (($context["coupon_id"] ?? null)) {
            // line 469
            echo "      <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();
\t
\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=marketing/coupon/history&user_token=";
            // line 476
            echo ($context["user_token"] ?? null);
            echo "&coupon_id=";
            echo ($context["coupon_id"] ?? null);
            echo "');
//--></script>
    ";
        }
        // line 479
        echo "    <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 481
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
</script>
  </div>
  ";
        // line 486
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
        return array (  904 => 486,  896 => 481,  892 => 479,  884 => 476,  875 => 469,  873 => 468,  845 => 443,  813 => 414,  762 => 366,  745 => 351,  736 => 345,  731 => 342,  729 => 341,  723 => 337,  717 => 334,  711 => 331,  708 => 330,  702 => 327,  696 => 324,  693 => 323,  691 => 322,  684 => 318,  674 => 313,  667 => 309,  663 => 308,  653 => 303,  646 => 299,  642 => 298,  626 => 287,  619 => 283,  603 => 272,  596 => 268,  589 => 263,  580 => 260,  576 => 259,  570 => 257,  566 => 256,  561 => 254,  554 => 250,  550 => 249,  543 => 244,  534 => 241,  530 => 240,  524 => 238,  520 => 237,  515 => 235,  508 => 231,  504 => 230,  497 => 225,  492 => 223,  489 => 222,  484 => 220,  481 => 219,  479 => 218,  475 => 216,  470 => 214,  467 => 213,  462 => 211,  459 => 210,  457 => 209,  450 => 205,  443 => 200,  438 => 198,  435 => 197,  430 => 195,  427 => 194,  425 => 193,  421 => 191,  416 => 189,  413 => 188,  408 => 186,  405 => 185,  403 => 184,  395 => 179,  391 => 178,  381 => 173,  374 => 169,  370 => 168,  360 => 163,  354 => 160,  347 => 155,  341 => 152,  338 => 151,  332 => 148,  329 => 147,  326 => 146,  320 => 143,  317 => 142,  311 => 139,  308 => 138,  306 => 137,  298 => 132,  294 => 131,  288 => 127,  282 => 124,  279 => 123,  277 => 122,  271 => 121,  264 => 117,  260 => 116,  249 => 110,  234 => 100,  222 => 90,  216 => 87,  213 => 86,  211 => 85,  205 => 82,  201 => 81,  196 => 79,  191 => 78,  187 => 76,  181 => 73,  178 => 72,  176 => 71,  172 => 70,  165 => 68,  159 => 65,  152 => 60,  145 => 56,  141 => 54,  139 => 53,  133 => 50,  126 => 46,  119 => 42,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  55 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/coupon_form.twig", "");
    }
}
