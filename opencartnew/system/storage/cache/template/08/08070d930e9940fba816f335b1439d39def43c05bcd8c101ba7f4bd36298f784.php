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

/* extension/module/xilnex.twig */
class __TwigTemplate_fa8a51a6fa52782d3b97bbf230789abd2453c8f7acc91acadde4a308ed84cb9a extends \Twig\Template
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
                <a href=\"";
        // line 6
        echo ($context["pull_settings_url"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["help_pull_settings"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></a>
                <button type=\"submit\" form=\"form-xilnex-setting\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 23
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 28
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-xilnex-setting\"  class=\"form-horizontal\">
                    <fieldset>
                        <legend>";
        // line 35
        echo ($context["text_general"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"app-id\">";
        // line 37
        echo ($context["entry_app_id"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_xilnex_appid\" id=\"app-id\" class=\"form-control\" value=\"";
        // line 39
        echo ($context["module_xilnex_appid"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"app-id\">";
        // line 44
        echo ($context["entry_token"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_xilnex_token\" id=\"token\" class=\"form-control\" value=\"";
        // line 46
        echo ($context["module_xilnex_token"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"auth\">";
        // line 51
        echo ($context["entry_auth"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_xilnex_auth\" id=\"auth\" class=\"form-control\" value=\"";
        // line 53
        echo ($context["module_xilnex_auth"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"status\">";
        // line 58
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 60
        if (($context["module_xilnex_status"] ?? null)) {
            // line 61
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_status\" value=\"1\" checked=\"checked\" /> ";
            // line 62
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_status\" value=\"0\" /> ";
            // line 65
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 68
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_status\" value=\"1\" /> ";
            // line 69
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_status\" value=\"0\" checked=\"checked\" /> ";
            // line 72
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 75
        echo "                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>";
        // line 80
        echo ($context["text_customer"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 82
        echo ($context["entry_default_customer_outlet"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"module_xilnex_default_customer_outlet\" class=\"form-control\">
                                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["outlets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["outlet"]) {
            // line 86
            echo "                                        ";
            if ((($context["module_xilnex_default_customer_outlet"] ?? null) == twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 86))) {
                // line 87
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 87);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 87);
                echo "</option>
                                        ";
            } else {
                // line 89
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 89);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 89);
                echo "</option>
                                        ";
            }
            // line 91
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['outlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 97
        echo ($context["entry_member_tier"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">";
        // line 102
        echo ($context["column_customer_group"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 103
        echo ($context["column_member_tier"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 104
        echo ($context["column_membership_discount"] ?? null);
        echo "</td>
                                            <td class=\"text-left\"><span data-toggle=\"tooltip\" title=\"";
        // line 105
        echo ($context["help_overlap_coupon"] ?? null);
        echo "\">";
        echo ($context["column_overlap_coupon"] ?? null);
        echo "</span></td>
                                            <td class=\"text-left\"><span data-toggle=\"tooltip\" title=\"";
        // line 106
        echo ($context["help_overlap_product"] ?? null);
        echo "\">";
        echo ($context["column_overlap_product"] ?? null);
        echo "</span></td>
                                            <td class=\"text-left\"><span data-toggle=\"tooltip\" title=\"";
        // line 107
        echo ($context["help_requirement"] ?? null);
        echo "\">";
        echo ($context["column_requirement"] ?? null);
        echo "</span></td>
                                            <td class=\"text-left\"><span data-toggle=\"tooltip\" title=\"";
        // line 108
        echo ($context["help_renewal"] ?? null);
        echo "\">";
        echo ($context["column_renewal"] ?? null);
        echo "</span></td>
                                            <td class=\"text-left\">";
        // line 109
        echo ($context["column_tier_level"] ?? null);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 114
            echo "                                            <tr>
                                                <td>";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 115);
            echo " <input type=\"hidden\" name=\"module_xilnex_membership_tier[";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 115);
            echo "][customer_group_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 115);
            echo "\" /></td>
                                                <td>
                                                    <select class=\"form-control select-customer-type\" data-customer-group-id=\"";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 117);
            echo "\" name=\"module_xilnex_membership_tier[";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 117);
            echo "][xilnex_customer_type]\">
                                                        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_type"]) {
                // line 119
                echo "                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_type"], "xilnex_customer_type_id", [], "any", false, false, false, 119) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_xilnex_membership_tier"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 119)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["xilnex_customer_type"] ?? null) : null))) {
                    // line 120
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_type"], "xilnex_customer_type_id", [], "any", false, false, false, 120);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_type"], "xilnex_customer_type", [], "any", false, false, false, 120);
                    echo "</option>
                                                            ";
                } else {
                    // line 122
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_type"], "xilnex_customer_type_id", [], "any", false, false, false, 122);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_type"], "xilnex_customer_type", [], "any", false, false, false, 122);
                    echo "</option>
                                                            ";
                }
                // line 124
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                                    </select>
                                                    ";
            // line 127
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 138
            echo "                                                    <input type=\"number\" class=\"form-control\" name=\"module_xilnex_membership_tier[";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 138);
            echo "][membership_discount]\" value=\"";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["module_xilnex_membership_tier"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 138)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["membership_discount"] ?? null) : null);
            echo "\">
                                                </td>
                                                <td>
                                                    <select name=\"module_xilnex_membership_tier[";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 141);
            echo "][overlap_coupon]\" class=\"form-control\">
                                                        ";
            // line 142
            if (twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["module_xilnex_membership_tier"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 142)] ?? null) : null), "overlap_coupon", [], "any", false, false, false, 142)) {
                // line 143
                echo "                                                            <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                                                            <option value=\"0\">";
                // line 144
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                                                        ";
            } else {
                // line 146
                echo "                                                            <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                                                            <option value=\"0\" selected=\"selected\">";
                // line 147
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                                                        ";
            }
            // line 149
            echo "                                                    </select>
                                                </td>
                                                <td>
                                                    <select name=\"module_xilnex_membership_tier[";
            // line 152
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 152);
            echo "][overlap_product_promo]\" class=\"form-control\">
                                                        ";
            // line 153
            if (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["module_xilnex_membership_tier"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 153)] ?? null) : null), "overlap_product_promo", [], "any", false, false, false, 153)) {
                // line 154
                echo "                                                            <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                                                            <option value=\"0\">";
                // line 155
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                                                        ";
            } else {
                // line 157
                echo "                                                            <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                                                            <option value=\"0\" selected=\"selected\">";
                // line 158
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                                                        ";
            }
            // line 160
            echo "                                                    </select>
                                                </td>
                                                <td>
                                                    <table class=\"table table-bordered table-hover\">
                                                        <tbody>
                                                            <tr>
                                                                <td>";
            // line 166
            echo ($context["entry_min_purchase"] ?? null);
            echo "</td>
                                                                <td><input type=\"text\" class=\"form-control\" name=\"module_xilnex_membership_tier[";
            // line 167
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 167);
            echo "][req_min_purchase]\" value=\"";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["module_xilnex_membership_tier"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 167)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["req_min_purchase"] ?? null) : null);
            echo "\"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>";
            // line 170
            echo ($context["entry_duration"] ?? null);
            echo "</td>
                                                                <td><input type=\"text\" class=\"form-control\" name=\"module_xilnex_membership_tier[";
            // line 171
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 171);
            echo "][req_duration]\" value=\"";
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["module_xilnex_membership_tier"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 171)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["req_duration"] ?? null) : null);
            echo "\"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>

                                                <td>
                                                    <table class=\"table table-bordered table-hover\">
                                                        <tbody>
                                                            <tr>
                                                                <td>";
            // line 181
            echo ($context["entry_min_purchase"] ?? null);
            echo "</td>
                                                                <td><input type=\"text\" class=\"form-control\" name=\"module_xilnex_membership_tier[";
            // line 182
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 182);
            echo "][renewal_min_purchase]\" value=\"";
            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["module_xilnex_membership_tier"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 182)] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["renewal_min_purchase"] ?? null) : null);
            echo "\"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>";
            // line 185
            echo ($context["entry_duration"] ?? null);
            echo "</td>
                                                                <td><input type=\"text\" class=\"form-control\" name=\"module_xilnex_membership_tier[";
            // line 186
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 186);
            echo "][renewal_duration]\" value=\"";
            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["module_xilnex_membership_tier"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 186)] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["renewal_duration"] ?? null) : null);
            echo "\"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td>
                                                    <input type=\"text\" class=\"form-control\" name=\"module_xilnex_membership_tier[";
            // line 192
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 192);
            echo "][tier_level]\" value=\"";
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["module_xilnex_membership_tier"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 192)] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["tier_level"] ?? null) : null);
            echo "\">
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 202
        echo ($context["entry_renew_membership_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 204
        if (($context["module_xilnex_membership_renew_status"] ?? null)) {
            // line 205
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_membership_renew_status\" value=\"1\" checked=\"checked\" /> ";
            // line 206
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_membership_renew_status\" value=\"0\" /> ";
            // line 209
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 212
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_membership_renew_status\" value=\"1\" /> ";
            // line 213
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_membership_renew_status\" value=\"0\" checked=\"checked\" /> ";
            // line 216
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 219
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 223
        echo ($context["entry_upgrade_membership_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                            ";
        // line 225
        if (($context["module_xilnex_membership_upgrade_status"] ?? null)) {
            // line 226
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_xilnex_membership_upgrade_status\" value=\"1\" checked=\"checked\" /> ";
            // line 227
            echo ($context["text_enabled"] ?? null);
            echo "
                                </label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_xilnex_membership_upgrade_status\" value=\"0\" /> ";
            // line 230
            echo ($context["text_disabled"] ?? null);
            echo "
                                </label>
                            ";
        } else {
            // line 233
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_xilnex_membership_upgrade_status\" value=\"1\" /> ";
            // line 234
            echo ($context["text_enabled"] ?? null);
            echo "
                                </label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_xilnex_membership_upgrade_status\" value=\"0\" checked=\"checked\" /> ";
            // line 237
            echo ($context["text_disabled"] ?? null);
            echo "
                                </label>
                            ";
        }
        // line 240
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 244
        echo ($context["entry_sync_customer_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                            ";
        // line 246
        if (($context["module_xilnex_sync_customer_status"] ?? null)) {
            // line 247
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_xilnex_sync_customer_status\" value=\"1\" checked=\"checked\" /> ";
            // line 248
            echo ($context["text_enabled"] ?? null);
            echo "
                                </label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_xilnex_sync_customer_status\" value=\"0\" /> ";
            // line 251
            echo ($context["text_disabled"] ?? null);
            echo "
                                </label>
                            ";
        } else {
            // line 254
            echo "                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_xilnex_sync_customer_status\" value=\"1\" /> ";
            // line 255
            echo ($context["text_enabled"] ?? null);
            echo "
                                </label>
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"module_xilnex_sync_customer_status\" value=\"0\" checked=\"checked\" /> ";
            // line 258
            echo ($context["text_disabled"] ?? null);
            echo "
                                </label>
                            ";
        }
        // line 261
        echo "                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>";
        // line 266
        echo ($context["text_order"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 268
        echo ($context["entry_pull_order_date"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"module_xilnex_pull_order_date\" value=\"";
        // line 271
        echo ($context["module_xilnex_pull_order_date"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pull_order_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-pull-order-date\" class=\"form-control\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 280
        echo ($context["entry_order_sync_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">                     
                                    ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 284
            echo "                                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 284), ($context["module_xilnex_order_sync_status"] ?? null))) {
                // line 285
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_xilnex_order_sync_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 285);
                echo "\" checked=\"checked\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 285);
                echo "</label></div>
                                        ";
            } else {
                // line 287
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_xilnex_order_sync_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 287);
                echo "\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 287);
                echo "</label></div>
                                        ";
            }
            // line 289
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 295
        echo ($context["entry_order_complete_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"module_xilnex_order_complete_status\" id=\"input-order-status\" class=\"form-control\">
                                ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 299
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 299) == ($context["module_xilnex_order_complete_status"] ?? null))) {
                // line 300
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 300);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 300);
                echo "</option>
                                    ";
            } else {
                // line 302
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 302);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 302);
                echo "</option>
                                    ";
            }
            // line 304
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 310
        echo ($context["entry_order_canceled_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"module_xilnex_order_canceled_status\" class=\"form-control\">
                                ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 314
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 314) == ($context["module_xilnex_order_canceled_status"] ?? null))) {
                // line 315
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 315);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 315);
                echo "</option>
                                    ";
            } else {
                // line 317
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 317);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 317);
                echo "</option>
                                    ";
            }
            // line 319
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"auth\">";
        // line 325
        echo ($context["entry_shipping_item_code"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input name=\"module_xilnex_shipping_item_code\" id=\"shipping-item-code\" class=\"form-control\" value=\"";
        // line 327
        echo ($context["module_xilnex_shipping_item_code"] ?? null);
        echo "\"></input>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 332
        echo ($context["entry_push_order_outlet"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"module_xilnex_push_order_outlet\" class=\"form-control\">
                                    ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["outlets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["outlet"]) {
            // line 336
            echo "                                        ";
            if ((($context["module_xilnex_push_order_outlet"] ?? null) == twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 336))) {
                // line 337
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 337);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 337);
                echo "</option>
                                        ";
            } else {
                // line 339
                echo "                                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 339);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 339);
                echo "</option>
                                        ";
            }
            // line 341
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['outlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 347
        echo ($context["help_alert_order_fail"] ?? null);
        echo "\">";
        echo ($context["entry_alert_order_fail"] ?? null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                ";
        // line 349
        if (($context["module_xilnex_alert_order_fail"] ?? null)) {
            // line 350
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_alert_order_fail\" value=\"1\" checked=\"checked\" /> ";
            // line 351
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_alert_order_fail\" value=\"0\" /> ";
            // line 354
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 357
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_alert_order_fail\" value=\"1\" /> ";
            // line 358
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_alert_order_fail\" value=\"0\" checked=\"checked\" /> ";
            // line 361
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 364
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-alert-order-fail-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 368
        echo ($context["help_alert_order_fail_email"] ?? null);
        echo "\">";
        echo ($context["entry_alert_order_fail_email"] ?? null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                <textarea name=\"module_xilnex_alert_order_fail_email\" rows=\"5\" placeholder=\"";
        // line 370
        echo ($context["entry_alert_order_fail_email"] ?? null);
        echo "\" id=\"input-alert-order-fail-email\" class=\"form-control\">";
        echo ($context["module_xilnex_alert_order_fail_email"] ?? null);
        echo "</textarea>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>";
        // line 376
        echo ($context["text_products"] ?? null);
        echo "</legend>
                         <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 378
        echo ($context["entry_sync_product_quantity_outlet"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">                     
                                    ";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["outlets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["outlet"]) {
            // line 382
            echo "                                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 382), ($context["module_xilnex_sync_product_quantity_outlet"] ?? null))) {
                // line 383
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_xilnex_sync_product_quantity_outlet[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 383);
                echo "\" checked=\"checked\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 383);
                echo "</label></div>
                                        ";
            } else {
                // line 385
                echo "                                            <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"module_xilnex_sync_product_quantity_outlet[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "location_id", [], "any", false, false, false, 385);
                echo "\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["outlet"], "name", [], "any", false, false, false, 385);
                echo "</label></div>
                                        ";
            }
            // line 387
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['outlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 393
        echo ($context["entry_prioritize_product_special"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 395
        if (($context["module_xilnex_prioritize_product_special"] ?? null)) {
            // line 396
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_prioritize_product_special\" value=\"1\" checked=\"checked\" /> ";
            // line 397
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_prioritize_product_special\" value=\"0\" /> ";
            // line 400
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 403
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_prioritize_product_special\" value=\"1\" /> ";
            // line 404
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_prioritize_product_special\" value=\"0\" checked=\"checked\" /> ";
            // line 407
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 410
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 414
        echo ($context["entry_sync_product_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 416
        if (($context["module_xilnex_sync_product_status"] ?? null)) {
            // line 417
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_sync_product_status\" value=\"1\" checked=\"checked\" /> ";
            // line 418
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_sync_product_status\" value=\"0\" /> ";
            // line 421
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        } else {
            // line 424
            echo "                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_sync_product_status\" value=\"1\" /> ";
            // line 425
            echo ($context["text_enabled"] ?? null);
            echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_xilnex_sync_product_status\" value=\"0\" checked=\"checked\" /> ";
            // line 428
            echo ($context["text_disabled"] ?? null);
            echo "
                                    </label>
                                ";
        }
        // line 431
        echo "                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 440
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  \$('.select-customer-type').on('change', function () {
    var customer_group_id = \$(this).data('customer-group-id');
    var customer_type = \$(this).val();
    \$('#discount-percentage-' + customer_group_id).val(customer_type);
  });
  //--></script>

";
        // line 451
        echo ($context["footer"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/xilnex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1066 => 451,  1052 => 440,  1041 => 431,  1035 => 428,  1029 => 425,  1026 => 424,  1020 => 421,  1014 => 418,  1011 => 417,  1009 => 416,  1004 => 414,  998 => 410,  992 => 407,  986 => 404,  983 => 403,  977 => 400,  971 => 397,  968 => 396,  966 => 395,  961 => 393,  954 => 388,  948 => 387,  940 => 385,  932 => 383,  929 => 382,  925 => 381,  919 => 378,  914 => 376,  903 => 370,  896 => 368,  890 => 364,  884 => 361,  878 => 358,  875 => 357,  869 => 354,  863 => 351,  860 => 350,  858 => 349,  851 => 347,  844 => 342,  838 => 341,  830 => 339,  822 => 337,  819 => 336,  815 => 335,  809 => 332,  801 => 327,  796 => 325,  789 => 320,  783 => 319,  775 => 317,  767 => 315,  764 => 314,  760 => 313,  754 => 310,  747 => 305,  741 => 304,  733 => 302,  725 => 300,  722 => 299,  718 => 298,  712 => 295,  705 => 290,  699 => 289,  691 => 287,  683 => 285,  680 => 284,  676 => 283,  670 => 280,  656 => 271,  650 => 268,  645 => 266,  638 => 261,  632 => 258,  626 => 255,  623 => 254,  617 => 251,  611 => 248,  608 => 247,  606 => 246,  601 => 244,  595 => 240,  589 => 237,  583 => 234,  580 => 233,  574 => 230,  568 => 227,  565 => 226,  563 => 225,  558 => 223,  552 => 219,  546 => 216,  540 => 213,  537 => 212,  531 => 209,  525 => 206,  522 => 205,  520 => 204,  515 => 202,  507 => 196,  495 => 192,  484 => 186,  480 => 185,  472 => 182,  468 => 181,  453 => 171,  449 => 170,  441 => 167,  437 => 166,  429 => 160,  424 => 158,  419 => 157,  414 => 155,  409 => 154,  407 => 153,  403 => 152,  398 => 149,  393 => 147,  388 => 146,  383 => 144,  378 => 143,  376 => 142,  372 => 141,  363 => 138,  359 => 127,  356 => 125,  350 => 124,  342 => 122,  334 => 120,  331 => 119,  327 => 118,  321 => 117,  312 => 115,  309 => 114,  305 => 113,  298 => 109,  292 => 108,  286 => 107,  280 => 106,  274 => 105,  270 => 104,  266 => 103,  262 => 102,  254 => 97,  247 => 92,  241 => 91,  233 => 89,  225 => 87,  222 => 86,  218 => 85,  212 => 82,  207 => 80,  200 => 75,  194 => 72,  188 => 69,  185 => 68,  179 => 65,  173 => 62,  170 => 61,  168 => 60,  163 => 58,  155 => 53,  150 => 51,  142 => 46,  137 => 44,  129 => 39,  124 => 37,  119 => 35,  114 => 33,  108 => 30,  104 => 28,  96 => 24,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/xilnex.twig", "");
    }
}
