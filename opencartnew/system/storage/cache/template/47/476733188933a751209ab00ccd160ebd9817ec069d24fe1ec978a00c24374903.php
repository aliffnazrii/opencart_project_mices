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

/* extension/total/point_transaction_list.twig */
class __TwigTemplate_2865fc327ddcc80c5b77b0e22b22c930692caf76576ab7968f5ffdab8a9ed862 extends \Twig\Template
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
        echo "\" onclick=\"\$('#filter-point-transaction').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-point-transaction\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 21
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 25
        echo ($context["entry_customer_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 26
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-type\">";
        // line 29
        echo ($context["entry_type"] ?? null);
        echo "</label>
              <select name=\"filter_type\" id=\"input-type\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transaction_types"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 33
            echo "                ";
            if ((($context["filter_type"] ?? null) == $context["key"])) {
                // line 34
                echo "                <option value=\"";
                echo $context["key"];
                echo "\" selected=\"selected\">";
                echo $context["value"];
                echo "</option>
                ";
            } else {
                // line 36
                echo "                <option value=\"";
                echo $context["key"];
                echo "\">";
                echo $context["value"];
                echo "</option>
                ";
            }
            // line 38
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-id\">";
        // line 42
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
              <input type=\"number\" name=\"filter_order_id\" value=\"";
        // line 43
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order_id\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 46
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 48
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 55
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
        // line 63
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"table-responsive\">
              <form action=\"";
        // line 67
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-point-transaction\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 71
        if ((($context["sort"] ?? null) == "cp.customer_point_id")) {
            echo "<a href=\"";
            echo ($context["sort_no"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_no"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_no"] ?? null);
            echo "\">";
            echo ($context["column_no"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 72
        if ((($context["sort"] ?? null) == "name")) {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer_name"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_customer_name"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 73
        if ((($context["sort"] ?? null) == "cp.type")) {
            echo "<a href=\"";
            echo ($context["sort_type"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_type"] ?? null);
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 74
        if ((($context["sort"] ?? null) == "cp.order_id")) {
            echo "<a href=\"";
            echo ($context["sort_order_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_order_id"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 75
        if ((($context["sort"] ?? null) == "cp.points")) {
            echo "<a href=\"";
            echo ($context["sort_points"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_points"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_points"] ?? null);
            echo "\">";
            echo ($context["column_points"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 76
        if ((($context["sort"] ?? null) == "cp.date_added")) {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-center\">";
        // line 77
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 81
        if (($context["point_transactions"] ?? null)) {
            // line 82
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["point_transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["point_transaction"]) {
                // line 83
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "customer_point_id", [], "any", false, false, false, 84);
                echo "</td>
                    <td class=\"text-left\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "name", [], "any", false, false, false, 85);
                echo "</td>
                    <td class=\"text-left\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "type", [], "any", false, false, false, 86);
                echo "</td>
                    <td class=\"text-left\">
                      ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["point_transaction"], "order_url", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "                        <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "order_url", [], "any", false, false, false, 89);
                    echo "\" target=\"_blank\">";
                    echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "order_id", [], "any", false, false, false, 89);
                    echo "</a>
                      ";
                } else {
                    // line 91
                    echo "                        <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "order_id", [], "any", false, false, false, 91);
                    echo "</span>
                      ";
                }
                // line 93
                echo "                    </td>
                    <td class=\"text-right\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "points", [], "any", false, false, false, 94);
                echo "</td>
                    <td class=\"text-left\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "date_added", [], "any", false, false, false, 95);
                echo "</td>
                    <td class=\"text-center\">
                      <div class=\"btn-group\"> <a href=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "view", [], "any", false, false, false, 97);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point_transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                  ";
        } else {
            // line 102
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 103
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 106
        echo "                    </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 111
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 112
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('.table-responsive').on('shown.bs.dropdown', function (e) {
    var t = \$(this),
      m = \$(e.target).find('.dropdown-menu'),
      tb = t.offset().top + t.height(),
      mb = m.offset().top + m.outerHeight(true),
      d = 20;
    if (t[0].scrollWidth > t.innerWidth()) {
      if (mb + d > tb) {
        t.css('padding-bottom', ((mb + d) - tb));
      }
    } else {
      t.css('overflow', 'visible');
    }
  }).on('hidden.bs.dropdown', function () {
    \$(this).css({'padding-bottom': '', 'overflow': ''});
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function() {
    url = 'index.php?route=";
        // line 139
        echo ($context["module"] ?? null);
        echo "/transaction&user_token=";
        echo ($context["user_token"] ?? null);
        echo "';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_type = \$('select[name=\\'filter_type\\']').val();
    if (filter_type !== '') {
      url += '&filter_type=' + encodeURIComponent(filter_type);
    }
    
    var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();
    if (filter_order_id) {
      url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
    }
    
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    
    location = url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 167
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 186
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });
  //--></script>
</div>
";
        // line 191
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/total/point_transaction_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 191,  480 => 186,  458 => 167,  425 => 139,  395 => 112,  391 => 111,  384 => 106,  378 => 103,  375 => 102,  372 => 101,  360 => 97,  355 => 95,  351 => 94,  348 => 93,  342 => 91,  334 => 89,  332 => 88,  327 => 86,  323 => 85,  319 => 84,  316 => 83,  311 => 82,  309 => 81,  302 => 77,  284 => 76,  266 => 75,  248 => 74,  230 => 73,  212 => 72,  194 => 71,  187 => 67,  180 => 63,  169 => 55,  157 => 48,  152 => 46,  144 => 43,  140 => 42,  135 => 39,  129 => 38,  121 => 36,  113 => 34,  110 => 33,  106 => 32,  100 => 29,  92 => 26,  88 => 25,  81 => 21,  71 => 13,  60 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/total/point_transaction_list.twig", "");
    }
}
