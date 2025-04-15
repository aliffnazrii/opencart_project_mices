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

/* extension/total/point_adjustment_list.twig */
class __TwigTemplate_46cde42d3049a63104b69c2e03e7160f8e7f2902984fa6ca1120ba02b4e5a707 extends \Twig\Template
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
        echo "\" onclick=\"\$('#filter-point-adjustment').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
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
        echo "') ? \$('#form-point-adjustment').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
  <div id=\"point-adjustment\" class=\"container-fluid\">";
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
      <div id=\"filter-point-adjustment\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer-name\">";
        // line 36
        echo ($context["entry_customer_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer_name"] ?? null);
        echo "\" id=\"input-customer-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-created-by\">";
        // line 40
        echo ($context["entry_created_by"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_created_by\" value=\"";
        // line 41
        echo ($context["filter_created_by"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_created_by"] ?? null);
        echo "\" id=\"input-created-by\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-modified-by\">";
        // line 44
        echo ($context["entry_modified_by"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_modified_by\" value=\"";
        // line 45
        echo ($context["filter_modified_by"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_modified_by"] ?? null);
        echo "\" id=\"input-modified-by\" class=\"form-control\" />
            </div>
            ";
        // line 60
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 61
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 64
        if ((($context["filter_status"] ?? null) == "pending")) {
            // line 65
            echo "                <option value=\"pending\" selected=\"selected\">";
            echo ($context["text_pending"] ?? null);
            echo "</option>
                ";
        } else {
            // line 67
            echo "                <option value=\"pending\">";
            echo ($context["text_pending"] ?? null);
            echo "</option>
                ";
        }
        // line 69
        echo "                ";
        if ((($context["filter_status"] ?? null) == "approved")) {
            // line 70
            echo "                <option value=\"approved\" selected=\"selected\">";
            echo ($context["text_approved"] ?? null);
            echo "</option>
                ";
        } else {
            // line 72
            echo "                <option value=\"approved\">";
            echo ($context["text_approved"] ?? null);
            echo "</option>
                ";
        }
        // line 74
        echo "                ";
        if ((($context["filter_status"] ?? null) == "rejected")) {
            // line 75
            echo "                <option value=\"rejected\" selected=\"selected\">";
            echo ($context["text_rejected"] ?? null);
            echo "</option>
                ";
        } else {
            // line 77
            echo "                <option value=\"rejected\">";
            echo ($context["text_rejected"] ?? null);
            echo "</option>
                ";
        }
        // line 79
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 82
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 84
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-modified\">";
        // line 91
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 93
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 100
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
        // line 108
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"table-responsive\">
              <form action=\"";
        // line 112
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-point-adjustment\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 117
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
        // line 118
        if ((($context["sort"] ?? null) == "name")) {
            echo "<a href=\"";
            echo ($context["sort_customer_point_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_transaction_no"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_customer_point_id"] ?? null);
            echo "\">";
            echo ($context["column_transaction_no"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 119
        if ((($context["sort"] ?? null) == "created_by_name")) {
            echo "<a href=\"";
            echo ($context["sort_created_by"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_created_by"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_created_by"] ?? null);
            echo "\">";
            echo ($context["column_created_by"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 120
        if ((($context["sort"] ?? null) == "modified_by_name")) {
            echo "<a href=\"";
            echo ($context["sort_modified_by"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_modified_by"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_modified_by"] ?? null);
            echo "\">";
            echo ($context["column_modified_by"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 121
        if ((($context["sort"] ?? null) == "cpa.points")) {
            echo "<a href=\"";
            echo ($context["sort_points"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_points"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_points"] ?? null);
            echo "\">";
            echo ($context["column_points"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      ";
        // line 123
        echo "                      <td class=\"text-left\">";
        if ((($context["sort"] ?? null) == "cpa.status")) {
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
        // line 124
        if ((($context["sort"] ?? null) == "cpa.date_added")) {
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
                      <td class=\"text-left\">";
        // line 125
        if ((($context["sort"] ?? null) == "cpa.date_modified")) {
            echo "<a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-center\">";
        // line 126
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 130
        if (($context["point_adjustments"] ?? null)) {
            // line 131
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["point_adjustments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["point_adjustment"]) {
                // line 132
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 133
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 133), ($context["selected"] ?? null))) {
                    // line 134
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 134);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 136
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 136);
                    echo "\" />
                      ";
                }
                // line 138
                echo "                    </td>
                    <td class=\"text-left\">";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "name", [], "any", false, false, false, 139);
                echo "</td>
                    <td class=\"text-right\">";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_id", [], "any", false, false, false, 140);
                echo "</td>
                    <td class=\"text-left\">";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "created_by_name", [], "any", false, false, false, 141);
                echo "</td>
                    <td class=\"text-left\" id=\"data-approved-rejected-";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 142);
                echo "\" >";
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "modified_by_name", [], "any", false, false, false, 142);
                echo "</td>
                    <td class=\"text-right\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "points", [], "any", false, false, false, 143);
                echo "</td>
                    ";
                // line 145
                echo "                    <td class=\"text-left\" id=\"data-status-";
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 145);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "status", [], "any", false, false, false, 145);
                echo "</td>
                    <td class=\"text-left\">";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "date_added", [], "any", false, false, false, 146);
                echo "</td>
                    <td class=\"text-left\" id=\"data-date-modified-";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 147);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "date_modified", [], "any", false, false, false, 147);
                echo "</td>
                    <td class=\"text-center\" style=\"display: grid; gap: 0.5rem;\">
                      <a href=\"";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "view", [], "any", false, false, false, 149);
                echo "\" class=\"btn btn-primary btn-sm\">";
                echo ($context["button_view"] ?? null);
                echo "</a>
                      ";
                // line 150
                if (twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "can_update", [], "any", false, false, false, 150)) {
                    // line 151
                    echo "                        <button id=\"button-approve-";
                    echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 151);
                    echo "\" type=\"button\" data-id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 151);
                    echo "\" class=\"btn btn-success btn-sm point-adjustment-approve\">";
                    echo ($context["button_approve"] ?? null);
                    echo "</button>
                        <button id=\"button-reject-";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 152);
                    echo "\" type=\"button\" data-id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["point_adjustment"], "customer_point_adjustment_id", [], "any", false, false, false, 152);
                    echo "\" class=\"btn btn-danger btn-sm point-adjustment-reject\">";
                    echo ($context["button_reject"] ?? null);
                    echo "</button>
                      ";
                }
                // line 154
                echo "                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point_adjustment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                  ";
        } else {
            // line 158
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"9\">";
            // line 159
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 162
        echo "                    </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 167
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 168
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\">
  \$('.point-adjustment-approve').on('click', function(e) {
    e.preventDefault();

    var customer_point_adjustment_id = \$(this).data('id');

    \$.ajax({
      url: '";
        // line 182
        echo ($context["modal_update_adjustment"] ?? null);
        echo "&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&customer_point_adjustment_id=' + customer_point_adjustment_id + '&type=list&status=approved',
      dataType: 'html',
      beforeSend: function() {
        \$('#button-approve-' + customer_point_adjustment_id).button('loading');
        \$('#button-reject-' + customer_point_adjustment_id).button('loading');
      },
      complete: function() {
        \$('#button-approve-' + customer_point_adjustment_id).button('reset');
        \$('#button-reject-' + customer_point_adjustment_id).button('reset');
      },
      success: function(html) {
        \$('#modal-point-adjustment-updatee').remove();
        
        \$('body').prepend('<div id=\"modal-point-adjustment-update\" class=\"modal fade\">' + html + '</div>');
        
        \$('#modal-point-adjustment-update').modal('show');
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  \$('.point-adjustment-reject').on('click', function(e) {
    e.preventDefault();

    var customer_point_adjustment_id = \$(this).data('id');

    \$.ajax({
      url: '";
        // line 210
        echo ($context["modal_update_adjustment"] ?? null);
        echo "&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&customer_point_adjustment_id=' + customer_point_adjustment_id + '&type=list&status=rejected',
      dataType: 'html',
      beforeSend: function() {
        \$('#button-approve-' + customer_point_adjustment_id).button('loading');
        \$('#button-reject-' + customer_point_adjustment_id).button('loading');
      },
      complete: function() {
        \$('#button-approve-' + customer_point_adjustment_id).button('reset');
        \$('#button-reject-' + customer_point_adjustment_id).button('reset');
      },
      success: function(html) {
        \$('#modal-point-adjustment-update').remove();
        
        \$('body').prepend('<div id=\"modal-point-adjustment-update\" class=\"modal fade\">' + html + '</div>');
        
        \$('#modal-point-adjustment-update').modal('show');
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  </script>
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
    url = '";
        // line 253
        echo ($context["filter_url"] ?? null);
        echo "&user_token=";
        echo ($context["user_token"] ?? null);
        echo "';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }
    var filter_created_by = \$('input[name=\\'filter_created_by\\']').val();
    if (filter_created_by) {
      url += '&filter_created_by=' + encodeURIComponent(filter_created_by);
    }
    var filter_modified_by = \$('input[name=\\'filter_modified_by\\']').val();
    if (filter_modified_by) {
      url += '&filter_modified_by=' + encodeURIComponent(filter_modified_by);
    }
    //var filter_reason = \$('select[name=\\'filter_reason\\']').val();
    //if (filter_reason !== '') {
    //  url += '&filter_reason=' + encodeURIComponent(filter_reason); 
    //}
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();
    if (filter_date_modified) {
      url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
    }
    location = url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: '";
        // line 289
        echo ($context["autocomplete_name"] ?? null);
        echo "&user_token=";
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
  \$('input[name=\\'filter_created_by\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: '";
        // line 308
        echo ($context["autocomplete_name"] ?? null);
        echo "&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&filter_created_by=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['username'],
              value: item['user_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_created_by\\']').val(item['label']);
    }
  });
  \$('input[name=\\'filter_modified_by\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: '";
        // line 327
        echo ($context["autocomplete_name"] ?? null);
        echo "&user_token=";
        echo ($context["user_token"] ?? null);
        echo "&filter_modified_by=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['username'],
              value: item['user_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_modified_by\\']').val(item['label']);
    }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 346
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });
  //--></script>
</div>
";
        // line 351
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/total/point_adjustment_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  770 => 351,  762 => 346,  738 => 327,  714 => 308,  690 => 289,  649 => 253,  601 => 210,  568 => 182,  551 => 168,  547 => 167,  540 => 162,  534 => 159,  531 => 158,  528 => 157,  520 => 154,  511 => 152,  502 => 151,  500 => 150,  494 => 149,  487 => 147,  483 => 146,  476 => 145,  472 => 143,  466 => 142,  462 => 141,  458 => 140,  454 => 139,  451 => 138,  445 => 136,  439 => 134,  437 => 133,  434 => 132,  429 => 131,  427 => 130,  420 => 126,  402 => 125,  384 => 124,  365 => 123,  347 => 121,  329 => 120,  311 => 119,  293 => 118,  275 => 117,  267 => 112,  260 => 108,  249 => 100,  237 => 93,  232 => 91,  220 => 84,  215 => 82,  210 => 79,  204 => 77,  198 => 75,  195 => 74,  189 => 72,  183 => 70,  180 => 69,  174 => 67,  168 => 65,  166 => 64,  160 => 61,  157 => 60,  150 => 45,  146 => 44,  138 => 41,  134 => 40,  126 => 37,  122 => 36,  115 => 32,  109 => 28,  101 => 24,  98 => 23,  90 => 19,  88 => 18,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/total/point_adjustment_list.twig", "");
    }
}
