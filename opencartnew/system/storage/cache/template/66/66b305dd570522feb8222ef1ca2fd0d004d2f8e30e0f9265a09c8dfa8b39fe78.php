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

/* catalog/product_list.twig */
class __TwigTemplate_c50e22a4b500ef52592d778eb10c433e4579aac3c19ed68e260b6d55214b7ddd extends \Twig\Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\">
          <i class=\"fa fa-filter\"></i>
        </button>
        <a href=\"";
        // line 10
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
          <i class=\"fa fa-plus\"></i>
        </a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 13
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\">
          <i class=\"fa fa-copy\"></i>
        </button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 16
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\">
          <i class=\"fa fa-trash-o\"></i>
        </button>
      </div>
      <h1>
        ";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo "
      </h1>
      <ul class=\"breadcrumb\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            echo "          <li>
            <a href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
            echo "\">
              ";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
            echo "
            </a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 35
        if (($context["error_warning"] ?? null)) {
            // line 36
            echo "      <div class=\"alert alert-danger alert-dismissible\">
        <i class=\"fa fa-exclamation-circle\"></i>
        ";
            // line 38
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
          &times;
        </button>
      </div>
    ";
        }
        // line 44
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 45
            echo "      <div class=\"alert alert-success alert-dismissible\">
        <i class=\"fa fa-check-circle\"></i>
        ";
            // line 47
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
          &times;
        </button>
      </div>
    ";
        }
        // line 53
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              <i class=\"fa fa-filter\"></i>
              ";
        // line 59
        echo ($context["text_filter"] ?? null);
        echo "
            </h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">
                ";
        // line 65
        echo ($context["entry_name"] ?? null);
        echo "
              </label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 67
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">
                ";
        // line 71
        echo ($context["entry_model"] ?? null);
        echo "
              </label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 73
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">
                ";
        // line 77
        echo ($context["entry_price"] ?? null);
        echo "
              </label>
              <input type=\"text\" name=\"filter_price\" value=\"";
        // line 79
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">
                ";
        // line 83
        echo ($context["entry_quantity"] ?? null);
        echo "
              </label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 85
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">
                ";
        // line 89
        echo ($context["entry_sync_status"] ?? null);
        echo "
              </label>
              <select name=\"filter_sync_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>

                ";
        // line 94
        if (((($context["acilit_item_id"] ?? null) != "") && (($context["acilit_item_id"] ?? null) != "0"))) {
            // line 95
            echo "
                  <option value=\"1\" selected=\"selected\">
                    ";
            // line 97
            echo ($context["text_link"] ?? null);
            echo "
                  </option>

                ";
        } else {
            // line 101
            echo "
                  <option value=\"1\">
                    ";
            // line 103
            echo ($context["text_link"] ?? null);
            echo "
                  </option>

                ";
        }
        // line 107
        echo "                ";
        if (((($context["acilit_item_id"] ?? null) == "") || (($context["acilit_item_id"] ?? null) == "0"))) {
            // line 108
            echo "
                  <option value=\"0\" selected=\"selected\">
                    ";
            // line 110
            echo ($context["text_unlink"] ?? null);
            echo "
                  </option>

                ";
        } else {
            // line 114
            echo "
                  <option value=\"0\">
                    ";
            // line 116
            echo ($context["text_unlink"] ?? null);
            echo "
                  </option>

                ";
        }
        // line 120
        echo "
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">
                ";
        // line 125
        echo ($context["entry_status"] ?? null);
        echo "
              </label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>

                ";
        // line 130
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 131
            echo "
                  <option value=\"1\" selected=\"selected\">
                    ";
            // line 133
            echo ($context["text_enabled"] ?? null);
            echo "
                  </option>

                ";
        } else {
            // line 137
            echo "
                  <option value=\"1\">
                    ";
            // line 139
            echo ($context["text_enabled"] ?? null);
            echo "
                  </option>

                ";
        }
        // line 143
        echo "                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 144
            echo "
                  <option value=\"0\" selected=\"selected\">
                    ";
            // line 146
            echo ($context["text_disabled"] ?? null);
            echo "
                  </option>

                ";
        } else {
            // line 150
            echo "
                  <option value=\"0\">
                    ";
            // line 152
            echo ($context["text_disabled"] ?? null);
            echo "
                  </option>

                ";
        }
        // line 156
        echo "
              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\">
                <i class=\"fa fa-filter\"></i>
                ";
        // line 162
        echo ($context["button_filter"] ?? null);
        echo "
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              <i class=\"fa fa-list\"></i>
              ";
        // line 173
        echo ($context["text_list"] ?? null);
        echo "
            </h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 177
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\">
                        <input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" />
                      </td>
                      <td class=\"text-center\">
                        ";
        // line 186
        echo ($context["column_image"] ?? null);
        echo "
                      </td>
                      <td class=\"text-left\">
                        ";
        // line 189
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 190
            echo "                          <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 191
            echo ($context["column_name"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 194
            echo "                          <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">
                            ";
            // line 195
            echo ($context["column_name"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 198
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 200
        if ((($context["sort"] ?? null) == "p.model")) {
            // line 201
            echo "                          <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 202
            echo ($context["column_model"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 205
            echo "                          <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">
                            ";
            // line 206
            echo ($context["column_model"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 209
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 211
        if ((($context["sort"] ?? null) == "p.price")) {
            // line 212
            echo "                          <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 213
            echo ($context["column_price"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 216
            echo "                          <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">
                            ";
            // line 217
            echo ($context["column_price"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 220
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 222
        if ((($context["sort"] ?? null) == "p.quantity")) {
            // line 223
            echo "                          <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 224
            echo ($context["column_quantity"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 227
            echo "                          <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">
                            ";
            // line 228
            echo ($context["column_quantity"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 231
        echo "                      </td>
                      <td class=\"text-left\">
                        ";
        // line 233
        echo ($context["column_sync_status"] ?? null);
        echo "
                      </td>

                      <td class=\"text-left\">
                        ";
        // line 237
        if ((($context["sort"] ?? null) == "p.status")) {
            // line 238
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">
                            ";
            // line 239
            echo ($context["column_status"] ?? null);
            echo "
                          </a>
                        ";
        } else {
            // line 242
            echo "                          <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">
                            ";
            // line 243
            echo ($context["column_status"] ?? null);
            echo "
                          </a>
                        ";
        }
        // line 246
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 248
        echo ($context["column_action"] ?? null);
        echo "
                      </td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 254
        if (($context["products"] ?? null)) {
            // line 255
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 256
                echo "                        <tr>
                          <td class=\"text-center\">
                            ";
                // line 258
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 258), ($context["selected"] ?? null))) {
                    // line 259
                    echo "                              <input
                            type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 260);
                    echo "\" checked=\"checked\" />
                              ";
                } else {
                    // line 262
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 262);
                    echo "\" />
                            ";
                }
                // line 264
                echo "                          </td>
                          <td class=\"text-center\">
                            ";
                // line 266
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 266)) {
                    // line 267
                    echo "                              <img
                            src=\"";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 268);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 268);
                    echo "\" class=\"img-thumbnail\" />
                              ";
                } else {
                    // line 270
                    echo "                              <span class=\"img-thumbnail list\">
                                <i class=\"fa fa-camera fa-2x\"></i>
                              </span>
                            ";
                }
                // line 274
                echo "                          </td>
                          <td class=\"text-left\">
                            ";
                // line 276
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 276);
                echo "
                          </td>
                          <td class=\"text-left\">
                            ";
                // line 279
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 279);
                echo "
                          </td>
                          <td class=\"text-right\">
                            ";
                // line 282
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 282)) {
                    // line 283
                    echo "                              <span style=\"text-decoration: line-through;\">
                                ";
                    // line 284
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 284);
                    echo "
                              </span>
                              <br/>
                              <div class=\"text-danger\">
                                ";
                    // line 288
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 288);
                    echo "
                              </div>
                            ";
                } else {
                    // line 291
                    echo "                              ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 291);
                    echo "
                            ";
                }
                // line 293
                echo "                          </td>
                          <td class=\"text-right\">
                            ";
                // line 295
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 295) <= 0)) {
                    // line 296
                    echo "                              <span class=\"label label-warning\">
                                ";
                    // line 297
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 297);
                    echo "
                              </span>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 299
$context["product"], "quantity", [], "any", false, false, false, 299) <= 5)) {
                    // line 300
                    echo "                              <span class=\"label label-danger\">
                                ";
                    // line 301
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 301);
                    echo "
                              </span>
                            ";
                } else {
                    // line 304
                    echo "                              <span class=\"label label-success\">
                                ";
                    // line 305
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 305);
                    echo "
                              </span>
                            ";
                }
                // line 308
                echo "                          </td>
                          <td class=\"text-left\">
                            ";
                // line 310
                echo ((twig_get_attribute($this->env, $this->source, $context["product"], "acilit_item_id", [], "any", false, false, false, 310)) ? (($context["text_link"] ?? null)) : (($context["text_unlink"] ?? null)));
                echo "
                          </td>

                          <td class=\"text-left\">
                            ";
                // line 314
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 314);
                echo "
                          </td>
                          <td class=\"text-right\">
                            <a href=\"";
                // line 317
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 317);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">
                              <i class=\"fa fa-pencil\"></i>
                            </a>
                          </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "                    ";
        } else {
            // line 324
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"8\">
                          ";
            // line 326
            echo ($context["text_no_results"] ?? null);
            echo "
                        </td>
                      </tr>
                    ";
        }
        // line 330
        echo "                  </tbody>

                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">
                ";
        // line 337
        echo ($context["pagination"] ?? null);
        echo "
              </div>
              <div class=\"col-sm-6 text-right\">
                ";
        // line 340
        echo ($context["results"] ?? null);
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price = \$('input[name=\\'filter_price\\']').val();

\tif (filter_price) {
\t\turl += '&filter_price=' + encodeURIComponent(filter_price);
\t}

\tvar filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

\tif (filter_quantity) {
\t\turl += '&filter_quantity=' + encodeURIComponent(filter_quantity);
\t}


var filter_sync_status = \$('select[name=\\'filter_sync_status\\']').val();

\t\t\t\tif (filter_sync_status !== '') {
\t\turl += '&filter_sync_status=' + encodeURIComponent(filter_sync_status);
\t}
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 388
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script>
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 400
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
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
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 420
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script>
</div>
";
        // line 438
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 438,  826 => 420,  803 => 400,  788 => 388,  737 => 340,  731 => 337,  722 => 330,  715 => 326,  711 => 324,  708 => 323,  694 => 317,  688 => 314,  681 => 310,  677 => 308,  671 => 305,  668 => 304,  662 => 301,  659 => 300,  657 => 299,  652 => 297,  649 => 296,  647 => 295,  643 => 293,  637 => 291,  631 => 288,  624 => 284,  621 => 283,  619 => 282,  613 => 279,  607 => 276,  603 => 274,  597 => 270,  590 => 268,  587 => 267,  585 => 266,  581 => 264,  575 => 262,  570 => 260,  567 => 259,  565 => 258,  561 => 256,  556 => 255,  554 => 254,  545 => 248,  541 => 246,  535 => 243,  530 => 242,  524 => 239,  517 => 238,  515 => 237,  508 => 233,  504 => 231,  498 => 228,  493 => 227,  487 => 224,  480 => 223,  478 => 222,  474 => 220,  468 => 217,  463 => 216,  457 => 213,  450 => 212,  448 => 211,  444 => 209,  438 => 206,  433 => 205,  427 => 202,  420 => 201,  418 => 200,  414 => 198,  408 => 195,  403 => 194,  397 => 191,  390 => 190,  388 => 189,  382 => 186,  370 => 177,  363 => 173,  349 => 162,  341 => 156,  334 => 152,  330 => 150,  323 => 146,  319 => 144,  316 => 143,  309 => 139,  305 => 137,  298 => 133,  294 => 131,  292 => 130,  284 => 125,  277 => 120,  270 => 116,  266 => 114,  259 => 110,  255 => 108,  252 => 107,  245 => 103,  241 => 101,  234 => 97,  230 => 95,  228 => 94,  220 => 89,  211 => 85,  206 => 83,  197 => 79,  192 => 77,  183 => 73,  178 => 71,  169 => 67,  164 => 65,  155 => 59,  147 => 53,  138 => 47,  134 => 45,  131 => 44,  122 => 38,  118 => 36,  116 => 35,  110 => 31,  100 => 27,  96 => 26,  93 => 25,  89 => 24,  83 => 21,  71 => 16,  63 => 13,  55 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}
