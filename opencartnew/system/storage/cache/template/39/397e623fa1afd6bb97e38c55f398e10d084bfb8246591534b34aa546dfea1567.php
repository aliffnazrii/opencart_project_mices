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

/* extension/total/point_customer.twig */
class __TwigTemplate_96f1e62a6b09cc6c94377dbcc6f852cd3b7f6bd5503b18edce8e4afe1c464ce5 extends \Twig\Template
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
        echo "<p>";
        echo ($context["text_total_points"] ?? null);
        echo "</p>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 6
        echo ($context["column_date_added"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 7
        echo ($context["column_description"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 8
        echo ($context["column_points"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if (($context["point_transactions"] ?? null)) {
            // line 13
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["point_transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["point_transaction"]) {
                // line 14
                echo "      <tr>
        <td class=\"text-left\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "date_added", [], "any", false, false, false, 15);
                echo "</td>
        <td class=\"text-left\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "description", [], "any", false, false, false, 16);
                echo "</td>
        <td class=\"text-right\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["point_transaction"], "points", [], "any", false, false, false, 17);
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point_transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      ";
        } else {
            // line 21
            echo "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 22
            echo ($context["text_no_results"] ?? null);
            echo "</td>
      </tr>
      ";
        }
        // line 25
        echo "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 29
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 30
        echo ($context["results"] ?? null);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/total/point_customer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  106 => 29,  100 => 25,  94 => 22,  91 => 21,  88 => 20,  79 => 17,  75 => 16,  71 => 15,  68 => 14,  63 => 13,  61 => 12,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/total/point_customer.twig", "");
    }
}
