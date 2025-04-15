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
class __TwigTemplate_d9e037c17d14311644e680c895109259a297b74069fc633e2f5ab6f5899cc36a extends \Twig\Template
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
<div id=\"account-coupon\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"col\">
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
      <!-- Redeem Coupon Form -->
      <div class=\"card mb-3\">
        <div class=\"card-header\">
          <h4>";
        // line 10
        echo ($context["text_coupon"] ?? null);
        echo "</h4>
        </div>
        <div class=\"card-body\">
          <form id=\"form-coupon\" action=\"\" method=\"post\">
            <div class=\"row mb-3\">
              <label for=\"input-code\" class=\"col-md-3 col-form-label\">";
        // line 15
        echo ($context["text_code"] ?? null);
        echo "</label>
              <div class=\"col-md-9\">
                <input type=\"text\" name=\"code\" value=\"\" placeholder=\"";
        // line 17
        echo ($context["text_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"submit\" class=\"btn btn-primary\">";
        // line 21
        echo ($context["button_submit"] ?? null);
        echo "</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Coupons Table -->
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <th>";
        // line 32
        echo ($context["column_name"] ?? null);
        echo "</th>
              <th>";
        // line 33
        echo ($context["column_code"] ?? null);
        echo "</th>
              <th>";
        // line 34
        echo ($context["column_available"] ?? null);
        echo "</th>
              <th>";
        // line 35
        echo ($context["column_product"] ?? null);
        echo "</th>
              <th>";
        // line 36
        echo ($context["column_category"] ?? null);
        echo "</th>
              <th>";
        // line 37
        echo ($context["text_discount"] ?? null);
        echo "</th>
              <th>";
        // line 38
        echo ($context["text_total"] ?? null);
        echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 42
        if (($context["coupons"] ?? null)) {
            // line 43
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 44
                echo "                <tr>
                  <td>";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 45);
                echo "</td>
                  <td>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 46);
                echo "</td>
                  <td>";
                // line 47
                echo ((twig_get_attribute($this->env, $this->source, $context["coupon"], "available", [], "any", false, false, false, 47)) ? ("Yes") : ("No"));
                echo "</td>
                  <td>";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "product", [], "any", false, false, false, 48);
                echo "</td>
                  <td>";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "category", [], "any", false, false, false, 49);
                echo "</td>
                  <td>";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 50);
                echo "</td>
                  <td>";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["coupon"], "total", [], "any", false, false, false, 51);
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            ";
        } else {
            // line 55
            echo "              <tr>
                <td class=\"text-center\" colspan=\"7\">";
            // line 56
            echo ($context["text_empty"] ?? null);
            echo "</td>
              </tr>
            ";
        }
        // line 59
        echo "          </tbody>
        </table>
      </div>

      <div class=\"row\">
        <div class=\"col-sm-6 text-start\">";
        // line 64
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-end\">";
        // line 65
        echo ($context["results"] ?? null);
        echo "</div>
      </div>

      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-end\"><a href=\"";
        // line 69
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
    </div>
  </div>
</div>
";
        // line 74
        echo ($context["footer"] ?? null);
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
        return array (  200 => 74,  190 => 69,  183 => 65,  179 => 64,  172 => 59,  166 => 56,  163 => 55,  160 => 54,  151 => 51,  147 => 50,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  127 => 45,  124 => 44,  119 => 43,  117 => 42,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  72 => 21,  65 => 17,  60 => 15,  52 => 10,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/account/coupon.twig", "");
    }
}
