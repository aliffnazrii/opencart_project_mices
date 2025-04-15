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

/* customer/customer_list.twig */
class __TwigTemplate_afd19d45ac1faee439e0298cdc3804bb00a1b786c3ca4b83f82846801c35f7e2 extends \Twig\Template
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
        echo "\" onclick=\"\$('#filter-customer').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-customer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div> 
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-email\">";
        // line 40
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_email\" value=\"";
        // line 41
        echo ($context["filter_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-store\">";
        // line 45
        echo ($context["entry_store"] ?? null);
        echo "</label>
\t\t\t\t<select name=\"filter_store\" id=\"input-store\" class=\"form-control\">
\t\t\t\t<option value=\"\"></option>
\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 49
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 49) == ($context["filter_store"] ?? null)) && (($context["filter_store"] ?? null) != ""))) {
                // line 50
                echo "\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 50);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 50);
                echo "</option>
\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 52);
                echo "</option>
\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer-group\">";
        // line 59
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
              <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 63
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 63) == ($context["filter_customer_group_id"] ?? null))) {
                // line 64
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 64);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 64);
                echo "</option>
                ";
            } else {
                // line 66
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 66);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 66);
                echo "</option>
                ";
            }
            // line 68
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "              </select>
            </div>

\t\t\t<div class=\"form-group\">
              <label class=\"control-label\" for=\"input-synced\">";
        // line 73
        echo ($context["entry_synced"] ?? null);
        echo "</label>
              <select name=\"filter_synced\" id=\"input-synced\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 76
        if ((($context["filter_synced"] ?? null) == "1")) {
            // line 77
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                ";
        } else {
            // line 79
            echo "                <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                ";
        }
        // line 81
        echo "                ";
        if ((($context["filter_synced"] ?? null) == "0")) {
            // line 82
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
                ";
        } else {
            // line 84
            echo "                <option value=\"0\">";
            echo ($context["text_no"] ?? null);
            echo "</option>
                ";
        }
        // line 86
        echo "              </select>
            </div>
\t\t\t
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 90
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 93
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 94
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option> 
                ";
        } else {
            // line 96
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 98
        echo "                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 99
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 101
            echo "                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 103
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-ip\">";
        // line 106
        echo ($context["entry_ip"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 107
        echo ($context["filter_ip"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ip"] ?? null);
        echo "\" id=\"input-ip\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 110
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 112
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
        // line 119
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
        // line 127
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"table-responsive\">
              <form action=\"";
        // line 131
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 136
        if ((($context["sort"] ?? null) == "name")) {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 137
        if ((($context["sort"] ?? null) == "c.email")) {
            echo "<a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>";
        }
        echo "</td>
 <td class=\"text-left\">";
        // line 138
        if ((($context["sort"] ?? null) == "s.store_id")) {
            echo "<a href=\"";
            echo ($context["sort_store"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_store_id"] ?? null);
            echo "\">";
            echo ($context["column_store"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 139
        if ((($context["sort"] ?? null) == "customer_group")) {
            echo "<a href=\"";
            echo ($context["sort_customer_group"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer_group"] ?? null);
            echo "\">";
            echo ($context["column_customer_group"] ?? null);
            echo "</a>";
        }
        echo "</td>

\t\t\t<td class=\"text-left\">";
        // line 141
        echo ($context["column_xilnex_id"] ?? null);
        echo "</td>
\t\t\t<td class=\"text-left\">";
        // line 142
        echo ($context["column_synced"] ?? null);
        echo "</td>
\t\t\t
                      <td class=\"text-left\">";
        // line 144
        if ((($context["sort"] ?? null) == "c.status")) {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 145
        if ((($context["sort"] ?? null) == "c.ip")) {
            echo "<a href=\"";
            echo ($context["sort_ip"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_ip"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_ip"] ?? null);
            echo "\">";
            echo ($context["column_ip"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 146
        if ((($context["sort"] ?? null) == "c.date_added")) {
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
                      <td class=\"text-right\">";
        // line 147
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 151
        if (($context["customers"] ?? null)) {
            // line 152
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 153
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 154
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 154), ($context["selected"] ?? null))) {
                    // line 155
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 155);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 157
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 157);
                    echo "\" />
                      ";
                }
                // line 159
                echo "                    </td>
                      <td class=\"text-left\">";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 160);
                echo "</td>
                    <td class=\"text-left\">";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 161);
                echo "</td>
<td class=\"text-left\">";
                // line 162
                echo (((twig_get_attribute($this->env, $this->source, $context["customer"], "store_name", [], "any", false, false, false, 162) != "")) ? (twig_get_attribute($this->env, $this->source, $context["customer"], "store_name", [], "any", false, false, false, 162)) : (twig_get_attribute($this->env, $this->source, ($context["default_stores"] ?? null), "name", [], "any", false, false, false, 162)));
                echo "</td>
                    <td class=\"text-left\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 163);
                echo "</td>

\t\t\t<td class=\"text-left\">";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "xilnex_client_id", [], "any", false, false, false, 165);
                echo "</td>
\t\t\t<td class=\"text-left\">
\t\t\t\t";
                // line 167
                if ((twig_get_attribute($this->env, $this->source, $context["customer"], "synced", [], "any", false, false, false, 167) == 1)) {
                    // line 168
                    echo "\t\t\t\t<span class=\"label label-success\">";
                    echo ($context["text_synced"] ?? null);
                    echo "</span>
\t\t\t\t";
                } else {
                    // line 170
                    echo "\t\t\t\t<span class=\"label label-danger\">";
                    echo ($context["text_not_synced"] ?? null);
                    echo "</span>
\t\t\t\t";
                }
                // line 172
                echo "\t\t\t</td>
\t\t\t
                    <td class=\"text-left\">";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 174);
                echo "</td>
                    <td class=\"text-left\">";
                // line 175
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 175);
                echo "</td>
                    <td class=\"text-left\">";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 176);
                echo "</td>
                    <td class=\"text-right\">
                      <div class=\"btn-group\" style=\"min-width: 65px;\">
                        <a href=\"";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 179);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li class=\"dropdown-header\">";
                // line 182
                echo ($context["text_option"] ?? null);
                echo "</li>
                          ";
                // line 183
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 183)) {
                    // line 184
                    echo "                          <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 184);
                    echo "\"><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                          ";
                } else {
                    // line 186
                    echo "                          <li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i> ";
                    echo ($context["text_unlock"] ?? null);
                    echo "</a></li>
                          ";
                }
                // line 188
                echo "                          <li role=\"separator\" class=\"divider\"></li>
                          <li class=\"dropdown-header\">";
                // line 189
                echo ($context["text_login"] ?? null);
                echo "</li>
                          ";
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["customer"], "store", [], "any", false, false, false, 190));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 191
                    echo "                          <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 191);
                    echo "\" target=\"_blank\"><i class=\"fa fa-lock\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 191);
                    echo "</a></li>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 193
                echo "                        </ul>
                      </div>
                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                  ";
        } else {
            // line 199
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 200
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 203
        echo "                    </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 208
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 209
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
    url = 'index.php?route=customer/customer&user_token=";
        // line 236
        echo ($context["user_token"] ?? null);
        echo "';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }

\t\t\t\tvar filter_store = \$('input[name=\\'filter_store\\']').val();
\t\t\t\tvar filter_store = \$('select[name=\\'filter_store\\']').val();
\t\t\t\tif (filter_store) {
\t\t\t\t\turl += '&filter_store=' + encodeURIComponent(filter_store);
\t\t\t\t}
\t\t\t\t
    var filter_email = \$('input[name=\\'filter_email\\']').val();
    if (filter_email) {
      url += '&filter_email=' + encodeURIComponent(filter_email);
    }

\t\t\tvar filter_synced = \$('select[name=\\'filter_synced\\']').val();
\t\t\tif (filter_synced !== '') {
\t\t\t\turl += '&filter_synced=' + encodeURIComponent(filter_synced); 
\t\t\t}
\t\t\t
    var filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();
    if (filter_customer_group_id !== '') {
      url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
    }
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }
    var filter_ip = \$('input[name=\\'filter_ip\\']').val();
    if (filter_ip) {
      url += '&filter_ip=' + encodeURIComponent(filter_ip);
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
        // line 281
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
  \$('input[name=\\'filter_email\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 300
        echo ($context["user_token"] ?? null);
        echo "&filter_email=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['email'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_email\\']').val(item['label']);
    }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 319
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });
  //--></script>
</div>
";
        // line 324
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "customer/customer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  802 => 324,  794 => 319,  772 => 300,  750 => 281,  702 => 236,  672 => 209,  668 => 208,  661 => 203,  655 => 200,  652 => 199,  649 => 198,  639 => 193,  628 => 191,  624 => 190,  620 => 189,  617 => 188,  611 => 186,  603 => 184,  601 => 183,  597 => 182,  589 => 179,  583 => 176,  579 => 175,  575 => 174,  571 => 172,  565 => 170,  559 => 168,  557 => 167,  552 => 165,  547 => 163,  543 => 162,  539 => 161,  535 => 160,  532 => 159,  526 => 157,  520 => 155,  518 => 154,  515 => 153,  510 => 152,  508 => 151,  501 => 147,  483 => 146,  465 => 145,  447 => 144,  442 => 142,  438 => 141,  419 => 139,  401 => 138,  383 => 137,  365 => 136,  357 => 131,  350 => 127,  339 => 119,  327 => 112,  322 => 110,  314 => 107,  310 => 106,  305 => 103,  299 => 101,  293 => 99,  290 => 98,  284 => 96,  278 => 94,  276 => 93,  270 => 90,  264 => 86,  258 => 84,  252 => 82,  249 => 81,  243 => 79,  237 => 77,  235 => 76,  229 => 73,  223 => 69,  217 => 68,  209 => 66,  201 => 64,  198 => 63,  194 => 62,  188 => 59,  182 => 55,  176 => 54,  168 => 52,  160 => 50,  157 => 49,  153 => 48,  147 => 45,  138 => 41,  134 => 40,  126 => 37,  122 => 36,  115 => 32,  109 => 28,  101 => 24,  98 => 23,  90 => 19,  88 => 18,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_list.twig", "");
    }
}
