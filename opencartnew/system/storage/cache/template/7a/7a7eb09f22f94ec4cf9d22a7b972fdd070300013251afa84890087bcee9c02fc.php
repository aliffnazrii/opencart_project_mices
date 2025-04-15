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

/* extension/module/phone_verification.twig */
class __TwigTemplate_e995ac1951001e4d205d120b5b1d70442ea8b1604b7cfad22c8a3774cb10e964 extends \Twig\Template
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
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-3 text-center\">
        <div class=\"well\"> <a href=\"";
        // line 16
        echo ($context["sms_otp"] ?? null);
        echo "\"> <span class=\"fa-stack fa-3x\"> <i class=\"fa fa-square-o fa-stack-2x\"></i> <i class=\"fa fa-commenting fa-stack-1x\"></i> </span>
          <h4>";
        // line 17
        echo ($context["text_sms_otp"] ?? null);
        echo "</h4>
          </a> </div>
      </div>
      <div class=\"col-md-3 text-center\">
        <div class=\"well\"> <a href=\"";
        // line 21
        echo ($context["sms_otp_attempts"] ?? null);
        echo "\"> <span class=\"fa-stack fa-3x\"> <i class=\"fa fa-square-o fa-stack-2x\"></i> <i class=\"fa fa-link fa-stack-1x\"></i> </span>
          <h4>";
        // line 22
        echo ($context["text_sms_otp_attempts"] ?? null);
        echo "</h4>
          </a> </div>
      </div>
      <div class=\"col-md-3 text-center\">
        <div class=\"well\"> <a href=\"";
        // line 26
        echo ($context["setting"] ?? null);
        echo "\"> <span class=\"fa-stack fa-3x\"> <i class=\"fa fa-square-o fa-stack-2x\"></i> <i class=\"fa fa-wrench fa-stack-1x\"></i> </span>
          <h4>";
        // line 27
        echo ($context["text_setting"] ?? null);
        echo "</h4>
          </a> </div>
      </div>
    </div>
</div>
";
        // line 32
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/phone_verification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  99 => 27,  95 => 26,  88 => 22,  84 => 21,  77 => 17,  73 => 16,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/phone_verification.twig", "");
    }
}
