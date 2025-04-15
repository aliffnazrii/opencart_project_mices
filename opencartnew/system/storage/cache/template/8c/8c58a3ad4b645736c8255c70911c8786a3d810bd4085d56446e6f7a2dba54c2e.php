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
class __TwigTemplate_306c0dc85703dbe47a12d3303652f1804a5814cbcf71e52034c217a0a069f955 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      
\t\t\t\t";
        // line 12
        if ((($context["is_voucher"] ?? null) == 1)) {
            // line 13
            echo "\t\t\t\t<h1>";
            echo ($context["voucher_heading_title"] ?? null);
            echo "</h1>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t<h1>";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t
      <ul class=\"breadcrumb\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 20);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 20);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 25
        if (($context["error_warning"] ?? null)) {
            // line 26
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 31
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 35
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 39
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 43
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 44
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 47
        echo ($context["entry_model"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 48
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">";
        // line 51
        echo ($context["entry_price"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_price\" value=\"";
        // line 52
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 55
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 56
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-status\">";
        // line 60
        echo ($context["entry_sync_status"] ?? null);
        echo "</label>
\t\t\t\t<select name=\"filter_sync_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t<option value=\"\"></option>
\t\t\t\t
\t\t\t\t";
        // line 64
        if ((($context["filter_sync_status"] ?? null) == "1")) {
            // line 65
            echo "\t\t\t\t
\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 66
            echo ($context["text_link"] ?? null);
            echo "</option>
\t\t\t\t
\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t
\t\t\t\t<option value=\"1\">";
            // line 70
            echo ($context["text_link"] ?? null);
            echo "</option>
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t";
        if ((($context["filter_sync_status"] ?? null) == "0")) {
            // line 75
            echo "\t\t\t\t
\t\t\t\t
\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 77
            echo ($context["text_unlink"] ?? null);
            echo "</option>
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t
\t\t\t\t<option value=\"0\">";
            // line 82
            echo ($context["text_unlink"] ?? null);
            echo "</option>
\t\t\t\t
\t\t\t\t
\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t
\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 91
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                
                
                  
                

                  ";
        // line 100
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 101
            echo "
                
                
                  
                
                
                <option value=\"1\" selected=\"selected\">";
            // line 107
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 115
            echo "
                
                
                  
                
                
                <option value=\"1\">";
            // line 121
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 129
        echo "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 130
            echo "
                
                
                  
                
                
                <option value=\"0\" selected=\"selected\">";
            // line 136
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 144
            echo "
                
                
                  
                
                
                <option value=\"0\">";
            // line 150
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                
                
                  
                

                  ";
        }
        // line 158
        echo "

              
              
                
              
              
              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 168
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 176
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 179
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-center\">";
        // line 185
        echo ($context["column_image"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 186
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 187
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 188
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 189
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
<td class=\"text-left\">";
        // line 190
        echo ($context["column_sync_status"] ?? null);
        echo "</td>                 
                      <td class=\"text-left\">";
        // line 191
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 192
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 197
        if (($context["products"] ?? null)) {
            // line 198
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 199
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 200
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 200), ($context["selected"] ?? null))) {
                    // line 201
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 201);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 203
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 203);
                    echo "\" />
                      ";
                }
                // line 204
                echo "</td>
                    <td class=\"text-center\">";
                // line 205
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 205)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 205);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 205);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 206);
                echo "</td>
                    <td class=\"text-left\">";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 207);
                echo "</td>
                    <td class=\"text-right\">";
                // line 208
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 208)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 208);
                    echo "</span><br/>
                      <div class=\"text-danger\">";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 209);
                    echo "</div>
                      ";
                } else {
                    // line 211
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 211);
                    echo "
                      ";
                }
                // line 212
                echo "</td>
                    <td class=\"text-right\">";
                // line 213
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 213) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 213);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 213) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 213);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 213);
                    echo "</span> ";
                }
                echo "</td>
<td class=\"text-left\">";
                // line 214
                if (twig_get_attribute($this->env, $this->source, $context["product"], "acilit_item_id", [], "any", false, false, false, 214)) {
                    echo "<span class=\"label label-success\">";
                    echo ($context["text_link"] ?? null);
                    echo "</span>";
                } else {
                    echo "<span class=\"label label-danger\">";
                    echo ($context["text_unlink"] ?? null);
                    echo "</span>";
                }
                echo "</td>                 
                    <td class=\"text-left\">";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 215);
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 216
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 216);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                  ";
        } else {
            // line 220
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 221
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 224
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 230
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 231
        echo ($context["results"] ?? null);
        echo "</div>
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


\t\t\t\tvar filter_sync_status = \$('select[name=\\'filter_sync_status\\']').val();
\t\t\t\t
\t\t\t\tif (filter_sync_status !== '') {
\t\t\t\turl += '&filter_sync_status=' + encodeURIComponent(filter_sync_status);
\t\t\t\t}
\t\t\t\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}


\t\t\t\tvar is_voucher = ";
        // line 280
        echo ($context["is_voucher"] ?? null);
        echo "
\t\t\t\t
\t\t\t\tif (is_voucher == 1) {
\t\t\t\turl += '&is_voucher=1';
\t\t\t\t}
\t\t\t\t
\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 286
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
        // line 298
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
        // line 318
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
//--></script></div>
";
        // line 335
        echo ($context["footer"] ?? null);
        echo " ";
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
        return array (  742 => 335,  722 => 318,  699 => 298,  684 => 286,  675 => 280,  623 => 231,  619 => 230,  611 => 224,  605 => 221,  602 => 220,  599 => 219,  588 => 216,  584 => 215,  572 => 214,  556 => 213,  553 => 212,  547 => 211,  542 => 209,  536 => 208,  532 => 207,  528 => 206,  516 => 205,  513 => 204,  507 => 203,  501 => 201,  499 => 200,  496 => 199,  491 => 198,  489 => 197,  481 => 192,  463 => 191,  459 => 190,  441 => 189,  423 => 188,  405 => 187,  387 => 186,  383 => 185,  374 => 179,  368 => 176,  357 => 168,  345 => 158,  334 => 150,  326 => 144,  315 => 136,  307 => 130,  304 => 129,  293 => 121,  285 => 115,  274 => 107,  266 => 101,  264 => 100,  252 => 91,  245 => 86,  238 => 82,  235 => 81,  228 => 77,  224 => 75,  221 => 74,  214 => 70,  211 => 69,  205 => 66,  202 => 65,  200 => 64,  193 => 60,  184 => 56,  180 => 55,  172 => 52,  168 => 51,  160 => 48,  156 => 47,  148 => 44,  144 => 43,  137 => 39,  131 => 35,  123 => 31,  120 => 30,  112 => 26,  110 => 25,  105 => 22,  94 => 20,  90 => 19,  86 => 17,  80 => 15,  74 => 13,  72 => 12,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}
