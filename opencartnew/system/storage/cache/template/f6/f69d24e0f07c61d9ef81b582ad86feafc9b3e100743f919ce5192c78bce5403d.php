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

/* journal3/template/account/coupon.twig */
class __TwigTemplate_ff5a99bdfa89d33c98a09b165f2433ef75fd2360498cdefa5cc2081bc6963856 extends \Twig\Template
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
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "    <li>
      <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">
        ";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 11), "get", [0 => "pageTitlePosition"], "method", false, false, false, 11) == "top")) {
            // line 12
            echo "  <h1 class=\"title page-title\">
    <span>
      ";
            // line 14
            echo ($context["heading_title"] ?? null);
            echo "
    </span>
  </h1>
";
        }
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 18);
        echo "
<div id=\"account-transaction\" class=\"container\">
  <div class=\"row\">
    ";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 22
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 23
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 24
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 28
            echo "    ";
        }
        // line 29
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "pageTitlePosition"], "method", false, false, false, 30) == "default")) {
            // line 31
            echo "        <h1 class=\"title page-title\">
          ";
            // line 32
            echo ($context["heading_title"] ?? null);
            echo "
        </h1>
      ";
        }
        // line 35
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      <p>
        ";
        // line 37
        echo ($context["text_total"] ?? null);
        echo "
        <b>
          ";
        // line 39
        echo ($context["total"] ?? null);
        echo "
        </b>
        .
      </p>
      ";
        // line 43
        if (($context["success"] ?? null)) {
            // line 44
            echo "        <div class=\"alert alert-success alert-dismissible\">
          <i class=\"fa fa-check-circle\"></i>
          ";
            // line 46
            echo ($context["text_success_redeem"] ?? null);
            echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
      ";
        }
        // line 50
        echo "      ";
        if (($context["error"] ?? null)) {
            // line 51
            echo "        <div class=\"alert alert-danger alert-dismissible\">
          <i class=\"fa fa-exclamation-circle\"></i>
          ";
            // line 53
            echo ($context["error_coupon"] ?? null);
            echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
      ";
        }
        // line 57
        echo "      <!-- Redeem Coupon Form -->
      <div class=\"card mb-3\">
        <div class=\"card-header\">
          <h4>
            ";
        // line 61
        echo ($context["text_coupon"] ?? null);
        echo "
          </h4>
        </div>
        <div class=\"card-body\">
          <form id=\"form-coupon\" action=\"";
        // line 65
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
            <div class=\"row mb-3\">
              <label for=\"input-code\" class=\"col-md-3 col-form-label\">
                ";
        // line 68
        echo ($context["text_code"] ?? null);
        echo "
              </label>
              <div class=\"col-md-9\">
                <input type=\"text\" name=\"code\" value=\"\" placeholder=\"";
        // line 71
        echo ($context["text_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 76
        echo ($context["button_submit"] ?? null);
        echo "
              </button>
            </div>
          </form>
        </div>
      </div>
     
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">
          ";
        // line 85
        echo ($context["pagination"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-6 text-right\">
          ";
        // line 88
        echo ($context["results"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 93
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 94
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 98
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 100
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 103
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/account/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 103,  245 => 100,  240 => 98,  233 => 94,  229 => 93,  221 => 88,  215 => 85,  203 => 76,  195 => 71,  189 => 68,  183 => 65,  176 => 61,  170 => 57,  163 => 53,  159 => 51,  156 => 50,  149 => 46,  145 => 44,  143 => 43,  136 => 39,  131 => 37,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  109 => 29,  106 => 28,  103 => 27,  100 => 26,  97 => 25,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  79 => 18,  72 => 14,  68 => 12,  66 => 11,  63 => 10,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
