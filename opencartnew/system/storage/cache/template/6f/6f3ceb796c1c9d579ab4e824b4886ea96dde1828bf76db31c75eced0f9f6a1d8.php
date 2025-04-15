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
class __TwigTemplate_a50f8f2b305cf16b74d4336cd1fab8057eb665353a83af4f772b249203a7a0b5 extends \Twig\Template
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
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li>
        <a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">
          ";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </ul>
  <div class=\"row\">
    ";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "
      <h1>
        ";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "
      </h1>
      ";
        // line 26
        if (($context["coupons"] ?? null)) {
            // line 27
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left\">
                  ";
            // line 32
            echo ($context["column_name"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 35
            echo ($context["column_code"] ?? null);
            echo "
                </td>
                <td class=\"text-right\">
                  ";
            // line 38
            echo ($context["column_discount"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 41
            echo ($context["column_products"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 44
            echo ($context["column_date_start"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 47
            echo ($context["column_date_end"] ?? null);
            echo "
                </td>
                <td class=\"text-left\">
                  ";
            // line 50
            echo ($context["column_status"] ?? null);
            echo "
                </td>
                <td class=\"text-right\">
                  ";
            // line 53
            echo ($context["button_details"] ?? null);
            echo "
                </td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 59
                echo "                <tr>
                  <td class=\"text-left\">
                    ";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 61);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 64);
                echo "
                    <button class=\"btn btn-xs btn-default btn-copy\" data-clipboard-text=\"";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 65);
                echo "\" title=\"";
                echo ($context["button_copy"] ?? null);
                echo "\">
                      <i class=\"fa fa-copy\"></i>
                    </button>
                  </td>
                  <td class=\"text-right\">
                    ";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, $context["coupon"], "type", [], "any", false, false, false, 70) == "P")) {
                    // line 71
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 71);
                    echo "
                      %
                    ";
                } else {
                    // line 74
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 74);
                    echo "
                    ";
                }
                // line 76
                echo "                  </td>
                  <td class=\"text-left\">
                    ";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "products", [], "any", false, false, false, 78);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 81);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 84);
                echo "
                  </td>
                  <td class=\"text-left\">
                    ";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 87);
                echo "
                  </td>
                  <td class=\"text-right\">
                    <a href=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "href", [], "any", false, false, false, 90);
                echo "\" class=\"btn btn-info\">
                      ";
                // line 91
                echo ($context["button_details"] ?? null);
                echo "
                    </a>
                  </td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            </tbody>
          </table>
        </div>
      ";
        } else {
            // line 100
            echo "        <div class=\"alert alert-info\">
          ";
            // line 101
            echo ($context["text_empty"] ?? null);
            echo "
        </div>
      ";
        }
        // line 104
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\">
          <a href=\"";
        // line 106
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">
            ";
        // line 107
        echo ($context["button_continue"] ?? null);
        echo "
          </a>
        </div>
      </div>
      ";
        // line 111
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 113
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  new ClipboardJS('.btn-copy').on('success', function() {
    alert('";
        // line 119
        echo twig_escape_filter($this->env, ($context["text_code_copied"] ?? null), "js");
        echo "');
  });
});
</script>
";
        // line 123
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
        return array (  303 => 123,  296 => 119,  287 => 113,  282 => 111,  275 => 107,  271 => 106,  267 => 104,  261 => 101,  258 => 100,  252 => 96,  241 => 91,  237 => 90,  231 => 87,  225 => 84,  219 => 81,  213 => 78,  209 => 76,  203 => 74,  196 => 71,  194 => 70,  184 => 65,  180 => 64,  174 => 61,  170 => 59,  166 => 58,  158 => 53,  152 => 50,  146 => 47,  140 => 44,  134 => 41,  128 => 38,  122 => 35,  116 => 32,  109 => 27,  107 => 26,  102 => 24,  97 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  64 => 11,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
