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
class __TwigTemplate_ada1f9f912f637f7d055bd65953faee342cbe6385a4f87524d72d5b7cc3f641a extends \Twig\Template
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
                <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
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
        echo ($context["voucher_heading_title"] ?? null);
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
        echo ($context["voucher_text_form"] ?? null);
        echo "
                </h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 46
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
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
                            <a href=\"#tab-image\" data-toggle=\"tab\">
                                ";
        // line 55
        echo ($context["tab_image"] ?? null);
        echo "
                            </a>
                        </li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 63
            echo "                                    <li>
                                        <a href=\"#language";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "\" data-toggle=\"tab\">
                                            <img src=\"language/";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 65);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 65);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 65);
            echo "\" />
                                            ";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 66);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                            </ul>
                            ";
        // line 72
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 73
            echo "                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            echo "\">
                                        ";
            // line 75
            echo ($context["entry_name"] ?? null);
            echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"product_description[";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null), "name", [], "any", false, false, false, 78)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            echo "\" class=\"form-control\" />
                                        ";
            // line 79
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79)] ?? null) : null)) {
                // line 80
                echo "                                            <div class=\"text-danger\">
                                                ";
                // line 81
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null);
                echo "
                                            </div>
                                        ";
            }
            // line 84
            echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "\">
                                        ";
            // line 88
            echo ($context["entry_description"] ?? null);
            echo "
                                    </label>
                                    <div class=\"col-sm-10\">
                                        <textarea name=\"product_description[";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "locale", [], "any", false, false, false, 91);
            echo "\" class=\"form-control\">
                                            ";
            // line 92
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["product_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null), "description", [], "any", false, false, false, 92)) : (""));
            echo "
                                        </textarea>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            ";
        // line 98
        echo "                            
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">
                                    ";
        // line 101
        echo ($context["entry_model"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"model\" value=\"";
        // line 104
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                                    ";
        // line 105
        if (($context["error_model"] ?? null)) {
            // line 106
            echo "                                        <div class=\"text-danger\">
                                            ";
            // line 107
            echo ($context["error_model"] ?? null);
            echo "
                                        </div>
                                    ";
        }
        // line 110
        echo "                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-voucher-mapping\">
                                    <span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo ($context["help_category"] ?? null);
        echo "\">
                                        ";
        // line 115
        echo ($context["entry_voucher_mapping"] ?? null);
        echo "
                                    </span>
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"voucher_mapping\" value=\"\" placeholder=\"";
        // line 119
        echo ($context["entry_voucher_mapping"] ?? null);
        echo "\" id=\"input-voucher-mapping\" class=\"form-control\" />
                                    <div id=\"product-voucher-mapping\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                       
                                    <div class=\"voucher_mapping\" id=\"product-voucher-mapping";
        // line 122
        echo ($context["voucher_id"] ?? null);
        echo "\">
                                        ";
        // line 123
        if (($context["voucher_id"] ?? null)) {
            // line 124
            echo "                                            <i class=\"fa fa-minus-circle\"></i> ";
            echo ($context["voucher_name"] ?? null);
            echo "
                                            <input type=\"hidden\" name=\"product_voucher_mapping\" value=\"";
            // line 125
            echo ($context["voucher_id"] ?? null);
            echo "\" />
                                        ";
        }
        // line 127
        echo "                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">
                                    ";
        // line 134
        echo ($context["entry_point_redeem"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"number\" name=\"price\" value=\"";
        // line 137
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_point_redeem"] ?? null);
        echo "\" id=\"input-point-redeem\" class=\"form-control\" />
                                    ";
        // line 138
        if (($context["error_point_redeem"] ?? null)) {
            // line 139
            echo "                                        <div class=\"text-danger\">
                                            ";
            // line 140
            echo ($context["error_point_redeem"] ?? null);
            echo "
                                        </div>
                                    ";
        }
        // line 143
        echo "                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">
                                    ";
        // line 147
        echo ($context["entry_discount"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"discount\" value=\"";
        // line 150
        echo ($context["discount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_discount"] ?? null);
        echo "\" id=\"input-discount\" class=\"form-control\" />
                                    ";
        // line 151
        if (($context["error_discount"] ?? null)) {
            // line 152
            echo "                                        <div class=\"text-danger\">
                                            ";
            // line 153
            echo ($context["error_discount"] ?? null);
            echo "
                                        </div>
                                    ";
        }
        // line 156
        echo "                                </div>
                            </div>
                            ";
        // line 171
        echo "                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">
                                    ";
        // line 173
        echo ($context["entry_quantity"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 176
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">
                                    ";
        // line 181
        echo ($context["entry_status"] ?? null);
        echo "
                                </label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 185
        if (($context["status"] ?? null)) {
            // line 186
            echo "                                            <option value=\"1\" selected=\"selected\">
                                                ";
            // line 187
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </option>
                                            <option value=\"0\">
                                                ";
            // line 190
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </option>
                                        ";
        } else {
            // line 193
            echo "                                            <option value=\"1\">
                                                ";
            // line 194
            echo ($context["text_enabled"] ?? null);
            echo "
                                            </option>
                                            <option value=\"0\" selected=\"selected\">
                                                ";
            // line 197
            echo ($context["text_disabled"] ?? null);
            echo "
                                            </option>
                                        ";
        }
        // line 200
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-image\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">
                                                ";
        // line 210
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
        // line 218
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                                                </a>
                                                <input type=\"hidden\" name=\"image\" value=\"";
        // line 220
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
        // line 231
        echo ($context["entry_additional_image"] ?? null);
        echo "
                                            </td>
                                            <td class=\"text-right\">
                                                ";
        // line 234
        echo ($context["entry_sort_order"] ?? null);
        echo "
                                            </td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 240
        $context["image_row"] = 0;
        // line 241
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 242
            echo "                                            <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                                                <td class=\"text-left\">
                                                    <a href=\"\" id=\"thumb-image";
            // line 244
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
                                                        <img src=\"";
            // line 245
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 245);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" />
                                                    </a>
                                                    <input type=\"hidden\" name=\"product_image[";
            // line 247
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 247);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\" />
                                                </td>
                                                <td class=\"text-right\">
                                                    <input type=\"text\" name=\"product_image[";
            // line 250
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 250);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\" />
                                                </td>
                                                <td class=\"text-left\">
                                                    <button type=\"button\" onclick=\"\$('#image-row";
            // line 253
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\">
                                                        <i class=\"fa fa-minus-circle\"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            ";
            // line 258
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 259
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan=\"2\"></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 265
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
        // line 293
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 298
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

  // Voucher Mapping
  \$('input[name=\\'voucher_mapping\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocompleteVoucherMapping&user_token=";
        // line 320
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['voucher_id'],
                          discount: item['discount'],
                          discount_type: item['discount_type'],
                          quantity: item['quantity'],
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },


\t  'select': function(item) {
\t\t  \$('input[name=\\'voucher_mapping\\']').val('');

          
\t\t  \$('.voucher_mapping').remove();



\t\t  \$('#product-voucher-mapping').append('<div class=\"voucher_mapping\" id=\"product-voucher-mapping' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_voucher_mapping\" value=\"' + item['value'] + '\" /></div>');

          \$('#input-discount').val(item['discount']);
          ";
        // line 349
        echo "          \$('#input-quantity').val(item['quantity']);
\t  }
  });

  \$('#product-voucher-mapping').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });


  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 362
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

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 391
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

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 420
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

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 449
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });


  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 479
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
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });



  var image_row = ";
        // line 505
        echo ($context["image_row"] ?? null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 509
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 510
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 511
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  
  
    <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>
";
        // line 527
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
        return array (  883 => 527,  864 => 511,  860 => 510,  854 => 509,  847 => 505,  818 => 479,  785 => 449,  753 => 420,  721 => 391,  689 => 362,  674 => 349,  643 => 320,  618 => 298,  610 => 293,  579 => 265,  572 => 260,  566 => 259,  564 => 258,  554 => 253,  544 => 250,  534 => 247,  527 => 245,  523 => 244,  517 => 242,  512 => 241,  510 => 240,  501 => 234,  495 => 231,  481 => 220,  474 => 218,  463 => 210,  451 => 200,  445 => 197,  439 => 194,  436 => 193,  430 => 190,  424 => 187,  421 => 186,  419 => 185,  412 => 181,  402 => 176,  396 => 173,  392 => 171,  388 => 156,  382 => 153,  379 => 152,  377 => 151,  371 => 150,  365 => 147,  359 => 143,  353 => 140,  350 => 139,  348 => 138,  342 => 137,  336 => 134,  327 => 127,  322 => 125,  317 => 124,  315 => 123,  311 => 122,  305 => 119,  298 => 115,  294 => 114,  288 => 110,  282 => 107,  279 => 106,  277 => 105,  271 => 104,  265 => 101,  260 => 98,  258 => 97,  247 => 92,  237 => 91,  231 => 88,  227 => 87,  222 => 84,  216 => 81,  213 => 80,  211 => 79,  201 => 78,  195 => 75,  191 => 74,  188 => 73,  183 => 72,  180 => 70,  170 => 66,  162 => 65,  158 => 64,  155 => 63,  151 => 62,  141 => 55,  133 => 50,  126 => 46,  119 => 42,  113 => 38,  104 => 32,  100 => 30,  98 => 29,  92 => 25,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  65 => 15,  55 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/voucher_form.twig", "");
    }
}
