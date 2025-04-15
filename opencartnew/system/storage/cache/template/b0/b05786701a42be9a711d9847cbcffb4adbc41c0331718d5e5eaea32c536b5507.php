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

/* catalog/voucher_form.twig */
class __TwigTemplate_6199a1b6e427cf36a2bf300afab920eb797e2dee44cb0d1792728006ec6f5efb extends \Twig\Template
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
                <button type=\"submit\" form=\"form-voucher\" data-toggle=\"tooltip\" title=\"";
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
            echo "                    <li>
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 29
        if (($context["error_warning"] ?? null)) {
            // line 30
            echo "            <div class=\"alert alert-danger alert-dismissible\">
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
        echo "        <div class=\"panel panel-default\">
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-voucher\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\">
                            <a href=\"#tab-general\" data-toggle=\"tab\">
                                ";
        // line 50
        echo ($context["tab_general"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-data\" data-toggle=\"tab\">
                                ";
        // line 55
        echo ($context["tab_data"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-links\" data-toggle=\"tab\">
                                ";
        // line 60
        echo ($context["tab_links"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-attribute\" data-toggle=\"tab\">
                                ";
        // line 65
        echo ($context["tab_attribute"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-option\" data-toggle=\"tab\">
                                ";
        // line 70
        echo ($context["tab_option"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-recurring\" data-toggle=\"tab\">
                                ";
        // line 75
        echo ($context["tab_recurring"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-discount\" data-toggle=\"tab\">
                                ";
        // line 80
        echo ($context["tab_discount"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-special\" data-toggle=\"tab\">
                                ";
        // line 85
        echo ($context["tab_special"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-image\" data-toggle=\"tab\">
                                ";
        // line 90
        echo ($context["tab_image"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-reward\" data-toggle=\"tab\">
                                ";
        // line 95
        echo ($context["tab_reward"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-seo\" data-toggle=\"tab\">
                                ";
        // line 100
        echo ($context["tab_seo"] ?? null);
        echo "
                            </a>
                        </li>
                        <li>
                            <a href=\"#tab-design\" data-toggle=\"tab\">
                                ";
        // line 105
        echo ($context["tab_design"] ?? null);
        echo "
                            </a>
                        </li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 113
            echo "                                    <li>
                                        <a href=\"#language";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            echo "\" data-toggle=\"tab\">
                                            <img src=\"language/";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 115);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 115);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 115);
            echo "\" />
                                            ";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 116);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 123
            echo "                                    <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123);
            echo "\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125);
            echo "\">
                                                ";
            // line 126
            echo ($context["entry_name"] ?? null);
            echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\" name=\"voucher_description[";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["voucher_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["voucher_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129)] ?? null) : null), "name", [], "any", false, false, false, 129)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129);
            echo "\" class=\"form-control\" />
                                                ";
            // line 130
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130)] ?? null) : null)) {
                // line 131
                echo "                                                    <div class=\"text-danger\">
                                                        ";
                // line 132
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132)] ?? null) : null);
                echo "
                                                    </div>
                                                ";
            }
            // line 135
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138);
            echo "\">
                                                ";
            // line 139
            echo ($context["entry_description"] ?? null);
            echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <textarea name=\"voucher_description[";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 142);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "locale", [], "any", false, false, false, 142);
            echo "\" class=\"form-control\">
                                                    ";
            // line 143
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["voucher_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["voucher_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143)] ?? null) : null), "description", [], "any", false, false, false, 143)) : (""));
            echo "
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 148
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148);
            echo "\">
                                                ";
            // line 149
            echo ($context["entry_meta_title"] ?? null);
            echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\" name=\"voucher_description[";
            // line 152
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["voucher_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["voucher_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152)] ?? null) : null), "meta_title", [], "any", false, false, false, 152)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
            echo "\" class=\"form-control\" />
                                                ";
            // line 153
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_meta_title"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153)] ?? null) : null)) {
                // line 154
                echo "                                                    <div class=\"text-danger\">
                                                        ";
                // line 155
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_meta_title"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 155)] ?? null) : null);
                echo "
                                                    </div>
                                                ";
            }
            // line 158
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 161
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 161);
            echo "\">
                                                ";
            // line 162
            echo ($context["entry_meta_description"] ?? null);
            echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <textarea name=\"voucher_description[";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            echo "\" class=\"form-control\">
                                                    ";
            // line 166
            echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["voucher_description"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 166)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["voucher_description"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 166)] ?? null) : null), "meta_description", [], "any", false, false, false, 166)) : (""));
            echo "
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 171
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 171);
            echo "\">
                                                ";
            // line 172
            echo ($context["entry_meta_keyword"] ?? null);
            echo "
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <textarea name=\"voucher_description[";
            // line 175
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 175);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 175);
            echo "\" class=\"form-control\">
                                                    ";
            // line 176
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["voucher_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 176)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["voucher_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 176)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 176)) : (""));
            echo "
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 181
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 181);
            echo "\">
                                                <span data-toggle=\"tooltip\" title=\"";
            // line 182
            echo ($context["help_tag"] ?? null);
            echo "\">
                                                    ";
            // line 183
            echo ($context["entry_tag"] ?? null);
            echo "
                                                </span>
                                            </label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\" name=\"voucher_description[";
            // line 187
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 187);
            echo "][tag]\" value=\"";
            echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["voucher_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 187)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["voucher_description"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 187)] ?? null) : null), "tag", [], "any", false, false, false, 187)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 187);
            echo "\" class=\"form-control\" />
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">
                                    ";
        // line 197
        echo ($context["entry_model"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"model\" value=\"";
        // line 200
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                                    ";
        // line 201
        if (($context["error_model"] ?? null)) {
            // line 202
            echo "                                        <div class=\"text-danger\">
                                            ";
            // line 203
            echo ($context["error_model"] ?? null);
            echo "
                                        </div>
                                    ";
        }
        // line 206
        echo "                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sku\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 210
        echo ($context["help_sku"] ?? null);
        echo "\">
                                        ";
        // line 211
        echo ($context["entry_sku"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sku\" value=\"";
        // line 215
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-upc\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 220
        echo ($context["help_upc"] ?? null);
        echo "\">
                                        ";
        // line 221
        echo ($context["entry_upc"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"upc\" value=\"";
        // line 225
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-ean\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 230
        echo ($context["help_ean"] ?? null);
        echo "\">
                                        ";
        // line 231
        echo ($context["entry_ean"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"ean\" value=\"";
        // line 235
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-jan\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 240
        echo ($context["help_jan"] ?? null);
        echo "\">
                                        ";
        // line 241
        echo ($context["entry_jan"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"jan\" value=\"";
        // line 245
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-isbn\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 250
        echo ($context["help_isbn"] ?? null);
        echo "\">
                                        ";
        // line 251
        echo ($context["entry_isbn"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"isbn\" value=\"";
        // line 255
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-mpn\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 260
        echo ($context["help_mpn"] ?? null);
        echo "\">
                                        ";
        // line 261
        echo ($context["entry_mpn"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"mpn\" value=\"";
        // line 265
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-location\">
                                    ";
        // line 270
        echo ($context["entry_location"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"location\" value=\"";
        // line 273
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-price\">
                                    ";
        // line 278
        echo ($context["entry_price"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"price\" value=\"";
        // line 281
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">
                                    ";
        // line 286
        echo ($context["entry_tax_class"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                                        <option value=\"0\">
                                            ";
        // line 291
        echo ($context["text_none"] ?? null);
        echo "
                                        </option>
                                        ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 294
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 294) == ($context["tax_class_id"] ?? null))) {
                // line 295
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 295);
                echo "\" selected=\"selected\">
                                                    ";
                // line 296
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 296);
                echo "
                                                </option>
                                            ";
            } else {
                // line 299
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 299);
                echo "\">
                                                    ";
                // line 300
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 300);
                echo "
                                                </option>
                                            ";
            }
            // line 303
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">
                                    ";
        // line 309
        echo ($context["entry_quantity"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 312
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-minimum\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 317
        echo ($context["help_minimum"] ?? null);
        echo "\">
                                        ";
        // line 318
        echo ($context["entry_minimum"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"minimum\" value=\"";
        // line 322
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">
                                    ";
        // line 327
        echo ($context["entry_subtract"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                                        ";
        // line 331
        if (($context["subtract"] ?? null)) {
            // line 332
            echo "                                            <option value=\"1\" selected=\"selected\">
                                                ";
            // line 333
            echo ($context["text_yes"] ?? null);
            echo "
                                            </option>
                                            <option value=\"0\">
                                                ";
            // line 336
            echo ($context["text_no"] ?? null);
            echo "
                                            </option>
                                        ";
        } else {
            // line 339
            echo "                                            <option value=\"1\">
                                                ";
            // line 340
            echo ($context["text_yes"] ?? null);
            echo "
                                            </option>
                                            <option value=\"0\" selected=\"selected\">
                                                ";
            // line 343
            echo ($context["text_no"] ?? null);
            echo "
                                            </option>
                                        ";
        }
        // line 346
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 351
        echo ($context["help_stock_status"] ?? null);
        echo "\">
                                        ";
        // line 352
        echo ($context["entry_stock_status"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                                        ";
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 358
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 358) == ($context["stock_status_id"] ?? null))) {
                // line 359
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 359);
                echo "\" selected=\"selected\">
                                                    ";
                // line 360
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 360);
                echo "
                                                </option>
                                            ";
            } else {
                // line 363
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 363);
                echo "\">
                                                    ";
                // line 364
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 364);
                echo "
                                                </option>
                                            ";
            }
            // line 367
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">
                                    ";
        // line 373
        echo ($context["entry_shipping"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <label class=\"radio-inline\">
                                        ";
        // line 377
        if (($context["shipping"] ?? null)) {
            // line 378
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                                            ";
            // line 379
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        } else {
            // line 381
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"1\" />
                                            ";
            // line 382
            echo ($context["text_yes"] ?? null);
            echo "
                                        ";
        }
        // line 384
        echo "                                    </label>
                                    <label class=\"radio-inline\">
                                        ";
        // line 386
        if ( !($context["shipping"] ?? null)) {
            // line 387
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                                            ";
            // line 388
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        } else {
            // line 390
            echo "                                            <input type=\"radio\" name=\"shipping\" value=\"0\" />
                                            ";
            // line 391
            echo ($context["text_no"] ?? null);
            echo "
                                        ";
        }
        // line 393
        echo "                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">
                                    ";
        // line 398
        echo ($context["entry_date_available"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 402
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\" />
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"button\">
                                                <i class=\"fa fa-calendar\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-length\">
                                    ";
        // line 413
        echo ($context["entry_dimension"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"length\" value=\"";
        // line 418
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\" />
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"width\" value=\"";
        // line 421
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"height\" value=\"";
        // line 424
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">
                                    ";
        // line 431
        echo ($context["entry_length_class"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                                        ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 436
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 436) == ($context["length_class_id"] ?? null))) {
                // line 437
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 437);
                echo "\" selected=\"selected\">
                                                    ";
                // line 438
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 438);
                echo "
                                                </option>
                                            ";
            } else {
                // line 441
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 441);
                echo "\">
                                                    ";
                // line 442
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 442);
                echo "
                                                </option>
                                            ";
            }
            // line 445
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-weight\">
                                    ";
        // line 451
        echo ($context["entry_weight"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"weight\" value=\"";
        // line 454
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">
                                    ";
        // line 459
        echo ($context["entry_weight_class"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                                        ";
        // line 463
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 464
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 464) == ($context["weight_class_id"] ?? null))) {
                // line 465
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 465);
                echo "\" selected=\"selected\">
                                                    ";
                // line 466
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 466);
                echo "
                                                </option>
                                            ";
            } else {
                // line 469
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 469);
                echo "\">
                                                    ";
                // line 470
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 470);
                echo "
                                                </option>
                                            ";
            }
            // line 473
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">
                                    ";
        // line 479
        echo ($context["entry_status"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 483
        if (($context["status"] ?? null)) {
            // line 484
            echo "                                            <option value=\"1\" selected=\"selected\">
                                                ";
            // line 485
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </option>
                                            <option value=\"0\">
                                                ";
            // line 488
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </option>
                                        ";
        } else {
            // line 491
            echo "                                            <option value=\"1\">
                                                ";
            // line 492
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </option>
                                            <option value=\"0\" selected=\"selected\">
                                                ";
            // line 495
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </option>
                                        ";
        }
        // line 498
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">
                                    ";
        // line 503
        echo ($context["entry_sort_order"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 506
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-links\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 513
        echo ($context["help_manufacturer"] ?? null);
        echo "\">
                                        ";
        // line 514
        echo ($context["entry_manufacturer"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 518
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
                                    <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 519
        echo ($context["manufacturer_id"] ?? null);
        echo "\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-category\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 524
        echo ($context["help_category"] ?? null);
        echo "\">
                                        ";
        // line 525
        echo ($context["entry_category"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 529
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                                    <div id=\"voucher-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 531
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_category"]) {
            // line 532
            echo "                                            <div id=\"voucher-category";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_category"], "category_id", [], "any", false, false, false, 532);
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 534
            echo twig_get_attribute($this->env, $this->source, $context["voucher_category"], "name", [], "any", false, false, false, 534);
            echo "
                                                <input type=\"hidden\" name=\"voucher_category[]\" value=\"";
            // line 535
            echo twig_get_attribute($this->env, $this->source, $context["voucher_category"], "category_id", [], "any", false, false, false, 535);
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-filter\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 543
        echo ($context["help_filter"] ?? null);
        echo "\">
                                        ";
        // line 544
        echo ($context["entry_filter"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 548
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                                    <div id=\"voucher-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 550
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_filter"]) {
            // line 551
            echo "                                            <div id=\"voucher-filter";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_filter"], "filter_id", [], "any", false, false, false, 551);
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 553
            echo twig_get_attribute($this->env, $this->source, $context["voucher_filter"], "name", [], "any", false, false, false, 553);
            echo "
                                                <input type=\"hidden\" name=\"voucher_filter[]\" value=\"";
            // line 554
            echo twig_get_attribute($this->env, $this->source, $context["voucher_filter"], "filter_id", [], "any", false, false, false, 554);
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 557
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">
                                    ";
        // line 562
        echo ($context["entry_store"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 566
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 567
            echo "                                            <div class=\"checkbox\">
                                                <label>
                                                    ";
            // line 569
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 569), ($context["voucher_store"] ?? null))) {
                // line 570
                echo "                                                        <input type=\"checkbox\" name=\"voucher_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 570);
                echo "\" checked=\"checked\" />
                                                        ";
                // line 571
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 571);
                echo "
                                                    ";
            } else {
                // line 573
                echo "                                                        <input type=\"checkbox\" name=\"voucher_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 573);
                echo "\" />
                                                        ";
                // line 574
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 574);
                echo "
                                                    ";
            }
            // line 576
            echo "                                                </label>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 579
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-download\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 584
        echo ($context["help_download"] ?? null);
        echo "\">
                                        ";
        // line 585
        echo ($context["entry_download"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 589
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\" />
                                    <div id=\"voucher-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_download"]) {
            // line 592
            echo "                                            <div id=\"voucher-download";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_download"], "download_id", [], "any", false, false, false, 592);
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 594
            echo twig_get_attribute($this->env, $this->source, $context["voucher_download"], "name", [], "any", false, false, false, 594);
            echo "
                                                <input type=\"hidden\" name=\"voucher_download[]\" value=\"";
            // line 595
            echo twig_get_attribute($this->env, $this->source, $context["voucher_download"], "download_id", [], "any", false, false, false, 595);
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 598
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 603
        echo ($context["help_related"] ?? null);
        echo "\">
                                        ";
        // line 604
        echo ($context["entry_related"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 608
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\" />
                                    <div id=\"voucher-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 610
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_related"]) {
            // line 611
            echo "                                            <div id=\"voucher-related";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_related"], "voucher_id", [], "any", false, false, false, 611);
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 613
            echo twig_get_attribute($this->env, $this->source, $context["voucher_related"], "name", [], "any", false, false, false, 613);
            echo "
                                                <input type=\"hidden\" name=\"voucher_related[]\" value=\"";
            // line 614
            echo twig_get_attribute($this->env, $this->source, $context["voucher_related"], "voucher_id", [], "any", false, false, false, 614);
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 617
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-attribute\">
                            <div class=\"table-responsive\">
                                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 627
        echo ($context["entry_attribute"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-left\">
                                                ";
        // line 630
        echo ($context["entry_text"] ?? null);
        echo "
                                            </td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 636
        $context["attribute_row"] = 0;
        // line 637
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_attribute"]) {
            // line 638
            echo "                                            <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                                                <td class=\"text-left\" style=\"width: 40%;\">
                                                    <input type=\"text\" name=\"voucher_attribute[";
            // line 640
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_attribute"], "name", [], "any", false, false, false, 640);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\" />
                                                    <input type=\"hidden\" name=\"voucher_attribute[";
            // line 641
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_attribute"], "attribute_id", [], "any", false, false, false, 641);
            echo "\" />
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
            // line 644
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 645
                echo "                                                        <div class=\"input-group\">
                                                            <span class=\"input-group-addon\">
                                                                <img src=\"language/";
                // line 647
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 647);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 647);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 647);
                echo "\" />
                                                            </span>
                                                            <textarea name=\"voucher_attribute[";
                // line 649
                echo ($context["attribute_row"] ?? null);
                echo "][voucher_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 649);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">
                                                                ";
                // line 650
                echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["voucher_attribute"], "voucher_attribute_description", [], "any", false, false, false, 650)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 650)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["voucher_attribute"], "voucher_attribute_description", [], "any", false, false, false, 650)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 650)] ?? null) : null), "text", [], "any", false, false, false, 650)) : (""));
                echo "
                                                            </textarea>
                                                        </div>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 654
            echo "                                                </td>
                                                <td class=\"text-right\">
                                                    <button type=\"button\" onclick=\"\$('#attribute-row";
            // line 656
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\">
                                                        <i class=\"fa fa-minus-circle\"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            ";
            // line 661
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 662
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 663
        echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan=\"2\"></td>
                                            <td class=\"text-right\">
                                                <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 668
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
                                                    <i class=\"fa fa-plus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-option\">
                            <div class=\"row\">
                                <div class=\"col-sm-2\">
                                    <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                                        ";
        // line 681
        $context["option_row"] = 0;
        // line 682
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_option"]) {
            // line 683
            echo "                                            <li>
                                                <a href=\"#tab-option";
            // line 684
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            // line 685
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i>
                                                    ";
            // line 686
            echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "name", [], "any", false, false, false, 686);
            echo "
                                                </a>
                                            </li>
                                            ";
            // line 689
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 690
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 691
        echo "                                        <li>
                                            <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 692
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\" />
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-10\">
                                    <div class=\"tab-content\">
                                        ";
        // line 698
        $context["option_row"] = 0;
        // line 699
        echo "                                        ";
        $context["option_value_row"] = 0;
        // line 700
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_option"]) {
            // line 701
            echo "                                            <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                                <input type=\"hidden\" name=\"voucher_option[";
            // line 702
            echo ($context["option_row"] ?? null);
            echo "][voucher_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "voucher_option_id", [], "any", false, false, false, 702);
            echo "\" />
                                                <input type=\"hidden\" name=\"voucher_option[";
            // line 703
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "name", [], "any", false, false, false, 703);
            echo "\" />
                                                <input type=\"hidden\" name=\"voucher_option[";
            // line 704
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "option_id", [], "any", false, false, false, 704);
            echo "\" />
                                                <input type=\"hidden\" name=\"voucher_option[";
            // line 705
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 705);
            echo "\" />
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 707
            echo ($context["option_row"] ?? null);
            echo "\">
                                                        ";
            // line 708
            echo ($context["entry_required"] ?? null);
            echo "
                                                    </label>
                                                    <div class=\"col-sm-10\">
                                                        <select name=\"voucher_option[";
            // line 711
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">
                                                            ";
            // line 712
            if (twig_get_attribute($this->env, $this->source, $context["voucher_option"], "required", [], "any", false, false, false, 712)) {
                // line 713
                echo "                                                                <option value=\"1\" selected=\"selected\">
                                                                    ";
                // line 714
                echo ($context["text_yes"] ?? null);
                echo "
                                                                </option>
                                                                <option value=\"0\">
                                                                    ";
                // line 717
                echo ($context["text_no"] ?? null);
                echo "
                                                                </option>
                                                            ";
            } else {
                // line 720
                echo "                                                                <option value=\"1\">
                                                                    ";
                // line 721
                echo ($context["text_yes"] ?? null);
                echo "
                                                                </option>
                                                                <option value=\"0\" selected=\"selected\">
                                                                    ";
                // line 724
                echo ($context["text_no"] ?? null);
                echo "
                                                                </option>
                                                            ";
            }
            // line 727
            echo "                                                        </select>
                                                    </div>
                                                </div>
                                                ";
            // line 730
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 730) == "text")) {
                // line 731
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 732
                echo ($context["option_row"] ?? null);
                echo "\">
                                                            ";
                // line 733
                echo ($context["entry_option_value"] ?? null);
                echo "
                                                        </label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\" name=\"voucher_option[";
                // line 736
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "value", [], "any", false, false, false, 736);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 740
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 740) == "textarea")) {
                // line 741
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 742
                echo ($context["option_row"] ?? null);
                echo "\">
                                                            ";
                // line 743
                echo ($context["entry_option_value"] ?? null);
                echo "
                                                        </label>
                                                        <div class=\"col-sm-10\">
                                                            <textarea name=\"voucher_option[";
                // line 746
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">
                                                                ";
                // line 747
                echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "value", [], "any", false, false, false, 747);
                echo "
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 752
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 752) == "file")) {
                // line 753
                echo "                                                    <div class=\"form-group\" style=\"display: none;\">
                                                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 754
                echo ($context["option_row"] ?? null);
                echo "\">
                                                            ";
                // line 755
                echo ($context["entry_option_value"] ?? null);
                echo "
                                                        </label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\" name=\"voucher_option[";
                // line 758
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "value", [], "any", false, false, false, 758);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 762
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 762) == "date")) {
                // line 763
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 764
                echo ($context["option_row"] ?? null);
                echo "\">
                                                            ";
                // line 765
                echo ($context["entry_option_value"] ?? null);
                echo "
                                                        </label>
                                                        <div class=\"col-sm-3\">
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\" name=\"voucher_option[";
                // line 769
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "value", [], "any", false, false, false, 769);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                                                <span class=\"input-group-btn\">
                                                                    <button class=\"btn btn-default\" type=\"button\">
                                                                        <i class=\"fa fa-calendar\"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 779
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 779) == "time")) {
                // line 780
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 781
                echo ($context["option_row"] ?? null);
                echo "\">
                                                            ";
                // line 782
                echo ($context["entry_option_value"] ?? null);
                echo "
                                                        </label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\" name=\"voucher_option[";
                // line 786
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "value", [], "any", false, false, false, 786);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\">
                                                                        <i class=\"fa fa-calendar\"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 796
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 796) == "datetime")) {
                // line 797
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 798
                echo ($context["option_row"] ?? null);
                echo "\">
                                                            ";
                // line 799
                echo ($context["entry_option_value"] ?? null);
                echo "
                                                        </label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\" name=\"voucher_option[";
                // line 803
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["voucher_option"], "value", [], "any", false, false, false, 803);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\" />
                                                                <span class=\"input-group-btn\">
                                                                    <button type=\"button\" class=\"btn btn-default\">
                                                                        <i class=\"fa fa-calendar\"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 813
            echo "                                                ";
            if (((((twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 813) == "select") || (twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 813) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 813) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["voucher_option"], "type", [], "any", false, false, false, 813) == "image"))) {
                // line 814
                echo "                                                    <div class=\"table-responsive\">
                                                        <table id=\"option-value";
                // line 815
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                                                            <thead>
                                                                <tr>
                                                                    <td class=\"text-left\">
                                                                        ";
                // line 819
                echo ($context["entry_option_value"] ?? null);
                echo "
                                                                    </td>
                                                                    <td class=\"text-right\">
                                                                        ";
                // line 822
                echo ($context["entry_quantity"] ?? null);
                echo "
                                                                    </td>
                                                                    <td class=\"text-left\">
                                                                        ";
                // line 825
                echo ($context["entry_subtract"] ?? null);
                echo "
                                                                    </td>
                                                                    <td class=\"text-right\">
                                                                        ";
                // line 828
                echo ($context["entry_price"] ?? null);
                echo "
                                                                    </td>
                                                                    <td class=\"text-right\">
                                                                        ";
                // line 831
                echo ($context["entry_option_points"] ?? null);
                echo "
                                                                    </td>
                                                                    <td class=\"text-right\">
                                                                        ";
                // line 834
                echo ($context["entry_weight"] ?? null);
                echo "
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                ";
                // line 840
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["voucher_option"], "voucher_option_value", [], "any", false, false, false, 840));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher_option_value"]) {
                    // line 841
                    echo "                                                                    <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                                                        <td class=\"text-left\">
                                                                            <select name=\"voucher_option[";
                    // line 843
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control\">
                                                                                ";
                    // line 844
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["voucher_option"], "option_id", [], "any", false, false, false, 844)] ?? null) : null)) {
                        // line 845
                        echo "                                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["voucher_option"], "option_id", [], "any", false, false, false, 845)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 846
                            echo "                                                                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 846) == twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "option_value_id", [], "any", false, false, false, 846))) {
                                // line 847
                                echo "                                                                                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 847);
                                echo "\" selected=\"selected\">
                                                                                                ";
                                // line 848
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 848);
                                echo "
                                                                                            </option>
                                                                                        ";
                            } else {
                                // line 851
                                echo "                                                                                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 851);
                                echo "\">
                                                                                                ";
                                // line 852
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 852);
                                echo "
                                                                                            </option>
                                                                                        ";
                            }
                            // line 855
                            echo "                                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 856
                        echo "                                                                                ";
                    }
                    // line 857
                    echo "                                                                            </select>
                                                                            <input type=\"hidden\" name=\"voucher_option[";
                    // line 858
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][voucher_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "voucher_option_value_id", [], "any", false, false, false, 858);
                    echo "\" />
                                                                        </td>
                                                                        <td class=\"text-right\">
                                                                            <input type=\"text\" name=\"voucher_option[";
                    // line 861
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "quantity", [], "any", false, false, false, 861);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control\" />
                                                                        </td>
                                                                        <td class=\"text-left\">
                                                                            <select name=\"voucher_option[";
                    // line 864
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">
                                                                                ";
                    // line 865
                    if (twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "subtract", [], "any", false, false, false, 865)) {
                        // line 866
                        echo "                                                                                    <option value=\"1\" selected=\"selected\">
                                                                                        ";
                        // line 867
                        echo ($context["text_yes"] ?? null);
                        echo "
                                                                                    </option>
                                                                                    <option value=\"0\">
                                                                                        ";
                        // line 870
                        echo ($context["text_no"] ?? null);
                        echo "
                                                                                    </option>
                                                                                ";
                    } else {
                        // line 873
                        echo "                                                                                    <option value=\"1\">
                                                                                        ";
                        // line 874
                        echo ($context["text_yes"] ?? null);
                        echo "
                                                                                    </option>
                                                                                    <option value=\"0\" selected=\"selected\">
                                                                                        ";
                        // line 877
                        echo ($context["text_no"] ?? null);
                        echo "
                                                                                    </option>
                                                                                ";
                    }
                    // line 880
                    echo "                                                                            </select>
                                                                        </td>
                                                                        <td class=\"text-right\">
                                                                            <select name=\"voucher_option[";
                    // line 883
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control\">
                                                                                ";
                    // line 884
                    if ((twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "price_prefix", [], "any", false, false, false, 884) == "+")) {
                        // line 885
                        echo "                                                                                    <option value=\"+\" selected=\"selected\">
                                                                                        +
                                                                                    </option>
                                                                                ";
                    } else {
                        // line 889
                        echo "                                                                                    <option value=\"+\">
                                                                                        +
                                                                                    </option>
                                                                                ";
                    }
                    // line 893
                    echo "                                                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "price_prefix", [], "any", false, false, false, 893) == "-")) {
                        // line 894
                        echo "                                                                                    <option value=\"-\" selected=\"selected\">
                                                                                        -
                                                                                    </option>
                                                                                ";
                    } else {
                        // line 898
                        echo "                                                                                    <option value=\"-\">
                                                                                        -
                                                                                    </option>
                                                                                ";
                    }
                    // line 902
                    echo "                                                                            </select>
                                                                            <input type=\"text\" name=\"voucher_option[";
                    // line 903
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "price", [], "any", false, false, false, 903);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control\" />
                                                                        </td>
                                                                        <td class=\"text-right\">
                                                                            <select name=\"voucher_option[";
                    // line 906
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control\">
                                                                                ";
                    // line 907
                    if ((twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "points_prefix", [], "any", false, false, false, 907) == "+")) {
                        // line 908
                        echo "                                                                                    <option value=\"+\" selected=\"selected\">
                                                                                        +
                                                                                    </option>
                                                                                ";
                    } else {
                        // line 912
                        echo "                                                                                    <option value=\"+\">
                                                                                        +
                                                                                    </option>
                                                                                ";
                    }
                    // line 916
                    echo "                                                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "points_prefix", [], "any", false, false, false, 916) == "-")) {
                        // line 917
                        echo "                                                                                    <option value=\"-\" selected=\"selected\">
                                                                                        -
                                                                                    </option>
                                                                                ";
                    } else {
                        // line 921
                        echo "                                                                                    <option value=\"-\">
                                                                                        -
                                                                                    </option>
                                                                                ";
                    }
                    // line 925
                    echo "                                                                            </select>
                                                                            <input type=\"text\" name=\"voucher_option[";
                    // line 926
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "points", [], "any", false, false, false, 926);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control\" />
                                                                        </td>
                                                                        <td class=\"text-right\">
                                                                            <select name=\"voucher_option[";
                    // line 929
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control\">
                                                                                ";
                    // line 930
                    if ((twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "weight_prefix", [], "any", false, false, false, 930) == "+")) {
                        // line 931
                        echo "                                                                                    <option value=\"+\" selected=\"selected\">
                                                                                        +
                                                                                    </option>
                                                                                ";
                    } else {
                        // line 935
                        echo "                                                                                    <option value=\"+\">
                                                                                        +
                                                                                    </option>
                                                                                ";
                    }
                    // line 939
                    echo "                                                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "weight_prefix", [], "any", false, false, false, 939) == "-")) {
                        // line 940
                        echo "                                                                                    <option value=\"-\" selected=\"selected\">
                                                                                        -
                                                                                    </option>
                                                                                ";
                    } else {
                        // line 944
                        echo "                                                                                    <option value=\"-\">
                                                                                        -
                                                                                    </option>
                                                                                ";
                    }
                    // line 948
                    echo "                                                                            </select>
                                                                            <input type=\"text\" name=\"voucher_option[";
                    // line 949
                    echo ($context["option_row"] ?? null);
                    echo "][voucher_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["voucher_option_value"], "weight", [], "any", false, false, false, 949);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control\" />
                                                                        </td>
                                                                        <td class=\"text-right\">
                                                                            <button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 952
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\">
                                                                                <i class=\"fa fa-minus-circle\"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    ";
                    // line 957
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 958
                    echo "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 959
                echo "                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td colspan=\"6\"></td>
                                                                    <td class=\"text-left\">
                                                                        <button type=\"button\" onclick=\"addOptionValue('";
                // line 964
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\">
                                                                            <i class=\"fa fa-plus-circle\"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <select id=\"option-values";
                // line 972
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">
                                                        ";
                // line 973
                if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["option_values"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["voucher_option"], "option_id", [], "any", false, false, false, 973)] ?? null) : null)) {
                    // line 974
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["option_values"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["voucher_option"], "option_id", [], "any", false, false, false, 974)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 975
                        echo "                                                                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 975);
                        echo "\">
                                                                    ";
                        // line 976
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 976);
                        echo "
                                                                </option>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 979
                    echo "                                                        ";
                }
                // line 980
                echo "                                                    </select>
                                                ";
            }
            // line 982
            echo "                                            </div>
                                            ";
            // line 983
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 984
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 985
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-recurring\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 995
        echo ($context["entry_recurring"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-left\">
                                                ";
        // line 998
        echo ($context["entry_customer_group"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-left\"></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 1004
        $context["recurring_row"] = 0;
        // line 1005
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_recurring"]) {
            // line 1006
            echo "                                            <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                                                <td class=\"text-left\">
                                                    <select name=\"voucher_recurring[";
            // line 1008
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">
                                                        ";
            // line 1009
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1010
                echo "                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1010) == twig_get_attribute($this->env, $this->source, $context["voucher_recurring"], "recurring_id", [], "any", false, false, false, 1010))) {
                    // line 1011
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1011);
                    echo "\" selected=\"selected\">
                                                                    ";
                    // line 1012
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1012);
                    echo "
                                                                </option>
                                                            ";
                } else {
                    // line 1015
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1015);
                    echo "\">
                                                                    ";
                    // line 1016
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1016);
                    echo "
                                                                </option>
                                                            ";
                }
                // line 1019
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1020
            echo "                                                    </select>
                                                </td>
                                                <td class=\"text-left\">
                                                    <select name=\"voucher_recurring[";
            // line 1023
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                                                        ";
            // line 1024
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1025
                echo "                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1025) == twig_get_attribute($this->env, $this->source, $context["voucher_recurring"], "customer_group_id", [], "any", false, false, false, 1025))) {
                    // line 1026
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1026);
                    echo "\" selected=\"selected\">
                                                                    ";
                    // line 1027
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1027);
                    echo "
                                                                </option>
                                                            ";
                } else {
                    // line 1030
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1030);
                    echo "\">
                                                                    ";
                    // line 1031
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1031);
                    echo "
                                                                </option>
                                                            ";
                }
                // line 1034
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1035
            echo "                                                    </select>
                                                </td>
                                                <td class=\"text-left\">
                                                    <button type=\"button\" onclick=\"\$('#recurring-row";
            // line 1038
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\">
                                                        <i class=\"fa fa-minus-circle\"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            ";
            // line 1043
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 1044
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1045
        echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan=\"2\"></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 1050
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
                                                    <i class=\"fa fa-plus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-discount\">
                            <div class=\"table-responsive\">
                                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 1065
        echo ($context["entry_customer_group"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-right\">
                                                ";
        // line 1068
        echo ($context["entry_quantity"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-right\">
                                                ";
        // line 1071
        echo ($context["entry_priority"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-right\">
                                                ";
        // line 1074
        echo ($context["entry_price"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-left\">
                                                ";
        // line 1077
        echo ($context["entry_date_start"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-left\">
                                                ";
        // line 1080
        echo ($context["entry_date_end"] ?? null);
        echo "
                                            </td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 1086
        $context["discount_row"] = 0;
        // line 1087
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_discount"]) {
            // line 1088
            echo "                                            <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                                <td class=\"text-left\">
                                                    <select name=\"voucher_discount[";
            // line 1090
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                                                        ";
            // line 1091
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1092
                echo "                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1092) == twig_get_attribute($this->env, $this->source, $context["voucher_discount"], "customer_group_id", [], "any", false, false, false, 1092))) {
                    // line 1093
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1093);
                    echo "\" selected=\"selected\">
                                                                    ";
                    // line 1094
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1094);
                    echo "
                                                                </option>
                                                            ";
                } else {
                    // line 1097
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1097);
                    echo "\">
                                                                    ";
                    // line 1098
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1098);
                    echo "
                                                                </option>
                                                            ";
                }
                // line 1101
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1102
            echo "                                                    </select>
                                                </td>
                                                <td class=\"text-right\">
                                                    <input type=\"text\" name=\"voucher_discount[";
            // line 1105
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_discount"], "quantity", [], "any", false, false, false, 1105);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\" />
                                                </td>
                                                <td class=\"text-right\">
                                                    <input type=\"text\" name=\"voucher_discount[";
            // line 1108
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_discount"], "priority", [], "any", false, false, false, 1108);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" />
                                                </td>
                                                <td class=\"text-right\">
                                                    <input type=\"text\" name=\"voucher_discount[";
            // line 1111
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_discount"], "price", [], "any", false, false, false, 1111);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                                                </td>
                                                <td class=\"text-left\" style=\"width: 20%;\">
                                                    <div class=\"input-group date\">
                                                        <input type=\"text\" name=\"voucher_discount[";
            // line 1115
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_discount"], "date_start", [], "any", false, false, false, 1115);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                                                        <span class=\"input-group-btn\">
                                                            <button class=\"btn btn-default\" type=\"button\">
                                                                <i class=\"fa fa-calendar\"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=\"text-left\" style=\"width: 20%;\">
                                                    <div class=\"input-group date\">
                                                        <input type=\"text\" name=\"voucher_discount[";
            // line 1125
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_discount"], "date_end", [], "any", false, false, false, 1125);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                                                        <span class=\"input-group-btn\">
                                                            <button class=\"btn btn-default\" type=\"button\">
                                                                <i class=\"fa fa-calendar\"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=\"text-left\">
                                                    <button type=\"button\" onclick=\"\$('#discount-row";
            // line 1134
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\">
                                                        <i class=\"fa fa-minus-circle\"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            ";
            // line 1139
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1140
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1141
        echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan=\"6\"></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 1146
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
                                                    <i class=\"fa fa-plus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-special\">
                            <div class=\"table-responsive\">
                                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 1161
        echo ($context["entry_customer_group"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-right\">
                                                ";
        // line 1164
        echo ($context["entry_priority"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-right\">
                                                ";
        // line 1167
        echo ($context["entry_price"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-left\">
                                                ";
        // line 1170
        echo ($context["entry_date_start"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-left\">
                                                ";
        // line 1173
        echo ($context["entry_date_end"] ?? null);
        echo "
                                            </td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 1179
        $context["special_row"] = 0;
        // line 1180
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_special"]) {
            // line 1181
            echo "                                            <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                                <td class=\"text-left\">
                                                    <select name=\"voucher_special[";
            // line 1183
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                                                        ";
            // line 1184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1185
                echo "                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1185) == twig_get_attribute($this->env, $this->source, $context["voucher_special"], "customer_group_id", [], "any", false, false, false, 1185))) {
                    // line 1186
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1186);
                    echo "\" selected=\"selected\">
                                                                    ";
                    // line 1187
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1187);
                    echo "
                                                                </option>
                                                            ";
                } else {
                    // line 1190
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1190);
                    echo "\">
                                                                    ";
                    // line 1191
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1191);
                    echo "
                                                                </option>
                                                            ";
                }
                // line 1194
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1195
            echo "                                                    </select>
                                                </td>
                                                <td class=\"text-right\">
                                                    <input type=\"text\" name=\"voucher_special[";
            // line 1198
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_special"], "priority", [], "any", false, false, false, 1198);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" />
                                                </td>
                                                <td class=\"text-right\">
                                                    <input type=\"text\" name=\"voucher_special[";
            // line 1201
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_special"], "price", [], "any", false, false, false, 1201);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\" />
                                                </td>
                                                <td class=\"text-left\" style=\"width: 20%;\">
                                                    <div class=\"input-group date\">
                                                        <input type=\"text\" name=\"voucher_special[";
            // line 1205
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_special"], "date_start", [], "any", false, false, false, 1205);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                                                        <span class=\"input-group-btn\">
                                                            <button class=\"btn btn-default\" type=\"button\">
                                                                <i class=\"fa fa-calendar\"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=\"text-left\" style=\"width: 20%;\">
                                                    <div class=\"input-group date\">
                                                        <input type=\"text\" name=\"voucher_special[";
            // line 1215
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_special"], "date_end", [], "any", false, false, false, 1215);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                                                        <span class=\"input-group-btn\">
                                                            <button class=\"btn btn-default\" type=\"button\">
                                                                <i class=\"fa fa-calendar\"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class=\"text-left\">
                                                    <button type=\"button\" onclick=\"\$('#special-row";
            // line 1224
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\">
                                                        <i class=\"fa fa-minus-circle\"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            ";
            // line 1229
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1230
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1231
        echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan=\"5\"></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1236
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
                                                    <i class=\"fa fa-plus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-image\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 1251
        echo ($context["entry_image"] ?? null);
        echo "
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=\"text-left\">
                                                <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
                                                    <img src=\"";
        // line 1259
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                                                </a>
                                                <input type=\"hidden\" name=\"image\" value=\"";
        // line 1261
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"table-responsive\">
                                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 1272
        echo ($context["entry_additional_image"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-right\">
                                                ";
        // line 1275
        echo ($context["entry_sort_order"] ?? null);
        echo "
                                            </td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 1281
        $context["image_row"] = 0;
        // line 1282
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_image"]) {
            // line 1283
            echo "                                            <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                                                <td class=\"text-left\">
                                                    <a href=\"\" id=\"thumb-image";
            // line 1285
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
                                                        <img src=\"";
            // line 1286
            echo twig_get_attribute($this->env, $this->source, $context["voucher_image"], "thumb", [], "any", false, false, false, 1286);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" />
                                                    </a>
                                                    <input type=\"hidden\" name=\"voucher_image[";
            // line 1288
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_image"], "image", [], "any", false, false, false, 1288);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\" />
                                                </td>
                                                <td class=\"text-right\">
                                                    <input type=\"text\" name=\"voucher_image[";
            // line 1291
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_image"], "sort_order", [], "any", false, false, false, 1291);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\" />
                                                </td>
                                                <td class=\"text-left\">
                                                    <button type=\"button\" onclick=\"\$('#image-row";
            // line 1294
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\">
                                                        <i class=\"fa fa-minus-circle\"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            ";
            // line 1299
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1300
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1301
        echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan=\"2\"></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1306
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\">
                                                    <i class=\"fa fa-plus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-reward\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-points\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 1318
        echo ($context["help_points"] ?? null);
        echo "\">
                                        ";
        // line 1319
        echo ($context["entry_points"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"points\" value=\"";
        // line 1323
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 1331
        echo ($context["entry_customer_group"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-right\">
                                                ";
        // line 1334
        echo ($context["entry_reward"] ?? null);
        echo "
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 1339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1340
            echo "                                            <tr>
                                                <td class=\"text-left\">
                                                    ";
            // line 1342
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1342);
            echo "
                                                </td>
                                                <td class=\"text-right\">
                                                    <input type=\"text\" name=\"voucher_reward[";
            // line 1345
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1345);
            echo "][points]\" value=\"";
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["voucher_reward"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1345)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["voucher_reward"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1345)] ?? null) : null), "points", [], "any", false, false, false, 1345)) : (""));
            echo "\" class=\"form-control\" />
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1349
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"alert alert-info\">
                                <i class=\"fa fa-info-circle\"></i>
                                ";
        // line 1356
        echo ($context["text_keyword"] ?? null);
        echo "
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 1363
        echo ($context["entry_store"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-left\">
                                                ";
        // line 1366
        echo ($context["entry_keyword"] ?? null);
        echo "
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 1371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1372
            echo "                                            <tr>
                                                <td class=\"text-left\">
                                                    ";
            // line 1374
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1374);
            echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    ";
            // line 1377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1378
                echo "                                                        <div class=\"input-group\">
                                                            <span class=\"input-group-addon\">
                                                                <img src=\"language/";
                // line 1380
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1380);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1380);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1380);
                echo "\" />
                                                            </span>
                                                            <input type=\"text\" name=\"voucher_seo_url[";
                // line 1382
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1382);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1382);
                echo "]\" value=\"";
                if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["voucher_seo_url"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1382)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1382)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["voucher_seo_url"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1382)] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1382)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" />
                                                        </div>
                                                        ";
                // line 1384
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_keyword"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1384)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1384)] ?? null) : null)) {
                    // line 1385
                    echo "                                                            <div class=\"text-danger\">
                                                                ";
                    // line 1386
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_keyword"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1386)] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1386)] ?? null) : null);
                    echo "
                                                            </div>
                                                        ";
                }
                // line 1389
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1390
            echo "                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1393
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-design\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 1403
        echo ($context["entry_store"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-left\">
                                                ";
        // line 1406
        echo ($context["entry_layout"] ?? null);
        echo "
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 1411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1412
            echo "                                            <tr>
                                                <td class=\"text-left\">
                                                    ";
            // line 1414
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1414);
            echo "
                                                </td>
                                                <td class=\"text-left\">
                                                    <select name=\"voucher_layout[";
            // line 1417
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1417);
            echo "]\" class=\"form-control\">
                                                        <option value=\"\"></option>
                                                        ";
            // line 1419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1420
                echo "                                                            ";
                if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["voucher_layout"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1420)] ?? null) : null) && ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["voucher_layout"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1420)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1420)))) {
                    // line 1421
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1421);
                    echo "\" selected=\"selected\">
                                                                    ";
                    // line 1422
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1422);
                    echo "
                                                                </option>
                                                            ";
                } else {
                    // line 1425
                    echo "                                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1425);
                    echo "\">
                                                                    ";
                    // line 1426
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1426);
                    echo "
                                                                </option>
                                                            ";
                }
                // line 1429
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1430
            echo "                                                    </select>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1434
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
    <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
    <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\" />
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
    <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1457
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1462
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1484
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#voucher-category' + item['value']).remove();

\t\t  \$('#voucher-category').append('<div id=\"voucher-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"voucher_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#voucher-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1513
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#voucher-filter' + item['value']).remove();

\t\t  \$('#voucher-filter').append('<div id=\"voucher-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"voucher_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#voucher-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1542
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#voucher-download' + item['value']).remove();

\t\t  \$('#voucher-download').append('<div id=\"voucher-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"voucher_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#voucher-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/voucher/autocomplete&user_token=";
        // line 1571
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['voucher_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#voucher-related' + item['value']).remove();

\t\t  \$('#voucher-related').append('<div id=\"voucher-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"voucher_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#voucher-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
    <script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 1597
        echo ($context["attribute_row"] ?? null);
        echo ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"voucher_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1601
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"voucher_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 1603
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1604
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1604);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1604);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1604);
            echo "\" /></span><textarea name=\"voucher_attribute[' + attribute_row + '][voucher_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1604);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1606
        echo "\t  html += '  </td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1607
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'voucher_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1621
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'voucher_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'voucher_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
    <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1646
        echo ($context["option_row"] ?? null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1651
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"voucher_option[' + option_row + '][voucher_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"voucher_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"voucher_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"voucher_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1674
        echo ($context["entry_required"] ?? null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"voucher_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1676
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1677
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1683
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"voucher_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1684
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1690
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"voucher_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1691
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1697
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"voucher_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1698
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1704
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"voucher_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1705
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1711
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"voucher_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1712
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1718
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"voucher_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1719
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1728
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1729
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1730
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1731
        echo ($context["entry_price"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1732
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1733
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"6\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1742
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 1770
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 1775
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 1780
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
    <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 1790
        echo ($context["option_value_row"] ?? null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][voucher_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1797
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 1799
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 1800
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1806
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1811
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"voucher_option[' + option_row + '][voucher_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1816
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1817
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
    <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 1828
        echo ($context["discount_row"] ?? null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"voucher_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1833
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1834
            echo "\t  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1834);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1834), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1836
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"voucher_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1837
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"voucher_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1838
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"voucher_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1839
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"voucher_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1840
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"voucher_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1841
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1842
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
    <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 1856
        echo ($context["special_row"] ?? null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"voucher_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1861
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1862
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1862);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1862), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1864
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"voucher_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1865
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"voucher_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1866
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"voucher_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1867
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"voucher_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1868
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1869
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 1875
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
    <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 1884
        echo ($context["image_row"] ?? null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1888
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"voucher_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"voucher_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1889
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1890
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
    <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 1900
        echo ($context["recurring_row"] ?? null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"voucher_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 1906
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1907
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1907);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1907);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1909
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"voucher_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 1913
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1914
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1914);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1914);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1916
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1919
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
    <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 1931
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 1936
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 1941
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
    <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>
";
        // line 1951
        echo ($context["footer"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "catalog/voucher_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4017 => 1951,  4004 => 1941,  3996 => 1936,  3988 => 1931,  3973 => 1919,  3968 => 1916,  3957 => 1914,  3953 => 1913,  3947 => 1909,  3936 => 1907,  3932 => 1906,  3923 => 1900,  3910 => 1890,  3906 => 1889,  3900 => 1888,  3893 => 1884,  3881 => 1875,  3872 => 1869,  3868 => 1868,  3864 => 1867,  3860 => 1866,  3856 => 1865,  3853 => 1864,  3842 => 1862,  3838 => 1861,  3830 => 1856,  3813 => 1842,  3809 => 1841,  3805 => 1840,  3801 => 1839,  3797 => 1838,  3793 => 1837,  3790 => 1836,  3779 => 1834,  3775 => 1833,  3767 => 1828,  3753 => 1817,  3749 => 1816,  3741 => 1811,  3733 => 1806,  3724 => 1800,  3720 => 1799,  3715 => 1797,  3705 => 1790,  3692 => 1780,  3684 => 1775,  3676 => 1770,  3645 => 1742,  3633 => 1733,  3629 => 1732,  3625 => 1731,  3621 => 1730,  3617 => 1729,  3613 => 1728,  3601 => 1719,  3597 => 1718,  3588 => 1712,  3584 => 1711,  3575 => 1705,  3571 => 1704,  3562 => 1698,  3558 => 1697,  3549 => 1691,  3545 => 1690,  3536 => 1684,  3532 => 1683,  3523 => 1677,  3519 => 1676,  3514 => 1674,  3488 => 1651,  3480 => 1646,  3452 => 1621,  3435 => 1607,  3432 => 1606,  3415 => 1604,  3411 => 1603,  3406 => 1601,  3399 => 1597,  3370 => 1571,  3338 => 1542,  3306 => 1513,  3274 => 1484,  3249 => 1462,  3241 => 1457,  3216 => 1434,  3207 => 1430,  3201 => 1429,  3195 => 1426,  3190 => 1425,  3184 => 1422,  3179 => 1421,  3176 => 1420,  3172 => 1419,  3167 => 1417,  3161 => 1414,  3157 => 1412,  3153 => 1411,  3145 => 1406,  3139 => 1403,  3127 => 1393,  3119 => 1390,  3113 => 1389,  3107 => 1386,  3104 => 1385,  3102 => 1384,  3089 => 1382,  3080 => 1380,  3076 => 1378,  3072 => 1377,  3066 => 1374,  3062 => 1372,  3058 => 1371,  3050 => 1366,  3044 => 1363,  3034 => 1356,  3025 => 1349,  3013 => 1345,  3007 => 1342,  3003 => 1340,  2999 => 1339,  2991 => 1334,  2985 => 1331,  2972 => 1323,  2965 => 1319,  2961 => 1318,  2946 => 1306,  2939 => 1301,  2933 => 1300,  2931 => 1299,  2921 => 1294,  2911 => 1291,  2901 => 1288,  2894 => 1286,  2890 => 1285,  2884 => 1283,  2879 => 1282,  2877 => 1281,  2868 => 1275,  2862 => 1272,  2848 => 1261,  2841 => 1259,  2830 => 1251,  2812 => 1236,  2805 => 1231,  2799 => 1230,  2797 => 1229,  2787 => 1224,  2771 => 1215,  2754 => 1205,  2743 => 1201,  2733 => 1198,  2728 => 1195,  2722 => 1194,  2716 => 1191,  2711 => 1190,  2705 => 1187,  2700 => 1186,  2697 => 1185,  2693 => 1184,  2689 => 1183,  2683 => 1181,  2678 => 1180,  2676 => 1179,  2667 => 1173,  2661 => 1170,  2655 => 1167,  2649 => 1164,  2643 => 1161,  2625 => 1146,  2618 => 1141,  2612 => 1140,  2610 => 1139,  2600 => 1134,  2584 => 1125,  2567 => 1115,  2556 => 1111,  2546 => 1108,  2536 => 1105,  2531 => 1102,  2525 => 1101,  2519 => 1098,  2514 => 1097,  2508 => 1094,  2503 => 1093,  2500 => 1092,  2496 => 1091,  2492 => 1090,  2486 => 1088,  2481 => 1087,  2479 => 1086,  2470 => 1080,  2464 => 1077,  2458 => 1074,  2452 => 1071,  2446 => 1068,  2440 => 1065,  2422 => 1050,  2415 => 1045,  2409 => 1044,  2407 => 1043,  2397 => 1038,  2392 => 1035,  2386 => 1034,  2380 => 1031,  2375 => 1030,  2369 => 1027,  2364 => 1026,  2361 => 1025,  2357 => 1024,  2353 => 1023,  2348 => 1020,  2342 => 1019,  2336 => 1016,  2331 => 1015,  2325 => 1012,  2320 => 1011,  2317 => 1010,  2313 => 1009,  2309 => 1008,  2303 => 1006,  2298 => 1005,  2296 => 1004,  2287 => 998,  2281 => 995,  2269 => 985,  2263 => 984,  2261 => 983,  2258 => 982,  2254 => 980,  2251 => 979,  2242 => 976,  2237 => 975,  2232 => 974,  2230 => 973,  2226 => 972,  2213 => 964,  2206 => 959,  2200 => 958,  2198 => 957,  2188 => 952,  2176 => 949,  2173 => 948,  2167 => 944,  2161 => 940,  2158 => 939,  2152 => 935,  2146 => 931,  2144 => 930,  2138 => 929,  2126 => 926,  2123 => 925,  2117 => 921,  2111 => 917,  2108 => 916,  2102 => 912,  2096 => 908,  2094 => 907,  2088 => 906,  2076 => 903,  2073 => 902,  2067 => 898,  2061 => 894,  2058 => 893,  2052 => 889,  2046 => 885,  2044 => 884,  2038 => 883,  2033 => 880,  2027 => 877,  2021 => 874,  2018 => 873,  2012 => 870,  2006 => 867,  2003 => 866,  2001 => 865,  1995 => 864,  1983 => 861,  1973 => 858,  1970 => 857,  1967 => 856,  1961 => 855,  1955 => 852,  1950 => 851,  1944 => 848,  1939 => 847,  1936 => 846,  1931 => 845,  1929 => 844,  1923 => 843,  1917 => 841,  1913 => 840,  1904 => 834,  1898 => 831,  1892 => 828,  1886 => 825,  1880 => 822,  1874 => 819,  1867 => 815,  1864 => 814,  1861 => 813,  1842 => 803,  1835 => 799,  1831 => 798,  1828 => 797,  1825 => 796,  1806 => 786,  1799 => 782,  1795 => 781,  1792 => 780,  1789 => 779,  1770 => 769,  1763 => 765,  1759 => 764,  1756 => 763,  1753 => 762,  1740 => 758,  1734 => 755,  1730 => 754,  1727 => 753,  1724 => 752,  1716 => 747,  1708 => 746,  1702 => 743,  1698 => 742,  1695 => 741,  1692 => 740,  1679 => 736,  1673 => 733,  1669 => 732,  1666 => 731,  1664 => 730,  1659 => 727,  1653 => 724,  1647 => 721,  1644 => 720,  1638 => 717,  1632 => 714,  1629 => 713,  1627 => 712,  1621 => 711,  1615 => 708,  1611 => 707,  1604 => 705,  1598 => 704,  1592 => 703,  1586 => 702,  1581 => 701,  1576 => 700,  1573 => 699,  1571 => 698,  1562 => 692,  1559 => 691,  1553 => 690,  1551 => 689,  1545 => 686,  1539 => 685,  1535 => 684,  1532 => 683,  1527 => 682,  1525 => 681,  1509 => 668,  1502 => 663,  1496 => 662,  1494 => 661,  1484 => 656,  1480 => 654,  1470 => 650,  1462 => 649,  1453 => 647,  1449 => 645,  1445 => 644,  1437 => 641,  1429 => 640,  1423 => 638,  1418 => 637,  1416 => 636,  1407 => 630,  1401 => 627,  1389 => 617,  1380 => 614,  1376 => 613,  1370 => 611,  1366 => 610,  1361 => 608,  1354 => 604,  1350 => 603,  1343 => 598,  1334 => 595,  1330 => 594,  1324 => 592,  1320 => 591,  1315 => 589,  1308 => 585,  1304 => 584,  1297 => 579,  1289 => 576,  1284 => 574,  1279 => 573,  1274 => 571,  1269 => 570,  1267 => 569,  1263 => 567,  1259 => 566,  1252 => 562,  1245 => 557,  1236 => 554,  1232 => 553,  1226 => 551,  1222 => 550,  1217 => 548,  1210 => 544,  1206 => 543,  1199 => 538,  1190 => 535,  1186 => 534,  1180 => 532,  1176 => 531,  1171 => 529,  1164 => 525,  1160 => 524,  1152 => 519,  1146 => 518,  1139 => 514,  1135 => 513,  1123 => 506,  1117 => 503,  1110 => 498,  1104 => 495,  1098 => 492,  1095 => 491,  1089 => 488,  1083 => 485,  1080 => 484,  1078 => 483,  1071 => 479,  1064 => 474,  1058 => 473,  1052 => 470,  1047 => 469,  1041 => 466,  1036 => 465,  1033 => 464,  1029 => 463,  1022 => 459,  1012 => 454,  1006 => 451,  999 => 446,  993 => 445,  987 => 442,  982 => 441,  976 => 438,  971 => 437,  968 => 436,  964 => 435,  957 => 431,  945 => 424,  937 => 421,  929 => 418,  921 => 413,  905 => 402,  898 => 398,  891 => 393,  886 => 391,  883 => 390,  878 => 388,  875 => 387,  873 => 386,  869 => 384,  864 => 382,  861 => 381,  856 => 379,  853 => 378,  851 => 377,  844 => 373,  837 => 368,  831 => 367,  825 => 364,  820 => 363,  814 => 360,  809 => 359,  806 => 358,  802 => 357,  794 => 352,  790 => 351,  783 => 346,  777 => 343,  771 => 340,  768 => 339,  762 => 336,  756 => 333,  753 => 332,  751 => 331,  744 => 327,  734 => 322,  727 => 318,  723 => 317,  713 => 312,  707 => 309,  700 => 304,  694 => 303,  688 => 300,  683 => 299,  677 => 296,  672 => 295,  669 => 294,  665 => 293,  660 => 291,  652 => 286,  642 => 281,  636 => 278,  626 => 273,  620 => 270,  610 => 265,  603 => 261,  599 => 260,  589 => 255,  582 => 251,  578 => 250,  568 => 245,  561 => 241,  557 => 240,  547 => 235,  540 => 231,  536 => 230,  526 => 225,  519 => 221,  515 => 220,  505 => 215,  498 => 211,  494 => 210,  488 => 206,  482 => 203,  479 => 202,  477 => 201,  471 => 200,  465 => 197,  458 => 192,  441 => 187,  434 => 183,  430 => 182,  426 => 181,  418 => 176,  410 => 175,  404 => 172,  400 => 171,  392 => 166,  384 => 165,  378 => 162,  374 => 161,  369 => 158,  363 => 155,  360 => 154,  358 => 153,  348 => 152,  342 => 149,  338 => 148,  330 => 143,  320 => 142,  314 => 139,  310 => 138,  305 => 135,  299 => 132,  296 => 131,  294 => 130,  284 => 129,  278 => 126,  274 => 125,  268 => 123,  264 => 122,  260 => 120,  250 => 116,  242 => 115,  238 => 114,  235 => 113,  231 => 112,  221 => 105,  213 => 100,  205 => 95,  197 => 90,  189 => 85,  181 => 80,  173 => 75,  165 => 70,  157 => 65,  149 => 60,  141 => 55,  133 => 50,  126 => 46,  119 => 42,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  55 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/voucher_form.twig", "");
    }
}
