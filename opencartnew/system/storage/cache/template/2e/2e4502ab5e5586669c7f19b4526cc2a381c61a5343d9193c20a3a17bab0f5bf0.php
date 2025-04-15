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

/* journal3/template/common/language.twig */
class __TwigTemplate_d62d925e5d617ec17028e72c1ff09914e1c383e41835a0e9bb427ce5678db6da extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1), "get", [0 => "catalogLanguageStatus"], "method", false, false, false, 1)) {
            // line 2
            if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                // line 3
                echo "  ";
                $context["current_language"] = null;
                // line 4
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 5
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null))) {
                        // line 6
                        echo "      ";
                        $context["current_language"] = $context["language"];
                        // line 7
                        echo "    ";
                    }
                    // line 8
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "  <div id=\"language\" class=\"language\">
    <form action=\"";
                // line 10
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
      
                ";
                // line 34
                echo "
                <ul class=\"j-menu\">
\t\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 37
                    echo "\t\t\t\t\t";
                    $context["name"] = twig_upper_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 37), 0, 2));
                    // line 38
                    echo "\t\t\t\t\t";
                    if ((($context["name"] ?? null) == "MY")) {
                        // line 39
                        echo "\t\t\t\t\t\t";
                        $context["name"] = "BM";
                        // line 40
                        echo "\t\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"language-select\" data-name=\"";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
                    echo "\">";
                    echo ($context["name"] ?? null);
                    echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    // line 44
                    if (((twig_length_filter($this->env, ($context["languages"] ?? null)) - 1) >= twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44))) {
                        // line 45
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<span class=\"language-select\">|</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 49
                    echo "\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "\t\t\t\t</ul>

\t\t\t\t<style>
\t\t\t\t\t.language-currency {
\t\t\t\t\t\tpointer-events: auto;
\t\t\t\t\t\tmargin-right: unset !important;
\t\t\t\t\t\torder: -1;
\t\t\t\t\t}
\t\t\t\t\t.top-menu.top-menu-2{
\t\t\t\t\t\tmargin-right: auto;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 64
                echo ($context["redirect"] ?? null);
                echo "\"/>
    </form>
  </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 64,  137 => 50,  123 => 49,  117 => 45,  115 => 44,  108 => 42,  105 => 41,  102 => 40,  99 => 39,  96 => 38,  93 => 37,  76 => 36,  72 => 34,  67 => 10,  64 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/language.twig", "");
    }
}
