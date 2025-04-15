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

/* journal3/template/journal3/headers/desktop/classic.twig */
class __TwigTemplate_0d2fbc035896dd0032f46c8750fe6dd0fc58116201509f3c98bbb832b1808475 extends \Twig\Template
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
        echo "<div class=\"header header-classic header-lg\">
  <div class=\"top-bar navbar-nav\">
    ";
        // line 3
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => "desktop_top_menu"], "method", false, false, false, 3);
        echo "
    ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => "langPosition"], "method", false, false, false, 4) == "top")) {
            // line 5
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 7
            echo ($context["language"] ?? null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 10
            echo ($context["currency"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 14
        echo "    
\t\t\t\t";
        // line 15
        if ((($context["config_catalog_mode"] ?? null) != 1)) {
            // line 16
            echo "\t\t\t\t\t<div class=\"third-menu\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 16), "get", [0 => "desktop_top_menu_3"], "method", false, false, false, 16);
            echo "</div>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t
    ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 19), "get", [0 => "secondaryMenuPosition"], "method", false, false, false, 19) == "top")) {
            // line 20
            echo "      <div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 20);
            echo "</div>
    ";
        }
        // line 22
        echo "  </div>
  <div class=\"mid-bar navbar-nav\">
    <div class=\"desktop-logo-wrapper\">
      <div id=\"logo\">
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 26), "get", [0 => "logo_src"], "method", false, false, false, 26)) {
            // line 27
            echo "          <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
            <img src=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "logo_src"], "method", false, false, false, 28);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "logo2x_src"], "method", false, false, false, 28)) {
                echo "srcset=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "logo_src"], "method", false, false, false, 28);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "logo2x_src"], "method", false, false, false, 28);
                echo " 2x\"";
            }
            echo " width=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "logo_width"], "method", false, false, false, 28);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "logo_height"], "method", false, false, false, 28);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\"/>
          </a>
        ";
        } else {
            // line 31
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
        ";
        }
        // line 33
        echo "      </div>
    </div>
    ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "headerMainMenu2Position"], "method", false, false, false, 35) == "top")) {
            // line 36
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 36), "get", [0 => "desktop_main_menu_2"], "method", false, false, false, 36);
            echo "
    ";
        }
        // line 38
        echo "    <div class=\"desktop-search-wrapper full-search default-search-wrapper\">
      ";
        // line 39
        echo ($context["search"] ?? null);
        echo "
    </div>
    ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "langPosition"], "method", false, false, false, 41) == "search")) {
            // line 42
            echo "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 44
            echo ($context["language"] ?? null);
            echo "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 47
            echo ($context["currency"] ?? null);
            echo "
        </div>
      </div>
    ";
        }
        // line 51
        echo "
\t\t\t\t";
        // line 52
        if ((($context["config_catalog_mode"] ?? null) != 1)) {
            // line 53
            echo "\t\t\t
    <div class=\"classic-cart-wrapper\">
        ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 55), "get", [0 => "secondaryMenuPosition"], "method", false, false, false, 55) == "cart")) {
                // line 56
                echo "          <div class=\"top-menu secondary-menu\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 56), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 56);
                echo "</div>
        ";
            }
            // line 58
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 58), "get", [0 => "cartPosition"], "method", false, false, false, 58) == "top")) {
                // line 59
                echo "          <div class=\"desktop-cart-wrapper default-cart-wrapper\">
              ";
                // line 60
                echo ($context["cart"] ?? null);
                echo "
          </div>
        ";
            }
            // line 63
            echo "    </div>

\t\t\t\t";
        }
        // line 66
        echo "\t\t\t
  </div>
  <div class=\"desktop-main-menu-wrapper menu-";
        // line 68
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "headerMenuLayout"], "method", false, false, false, 68);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "desktop_main_menu_2"], "method", false, false, false, 68)) {
            echo "has-menu-2";
        }
        echo " navbar-nav\">
    ";
        // line 69
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 69), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 69)) ? ("") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 69), "get", [0 => "desktop_main_menu"], "method", false, false, false, 69)));
        echo "
    ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 70), "get", [0 => "headerMainMenu2Position"], "method", false, false, false, 70) == "menu")) {
            // line 71
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "desktop_main_menu_2"], "method", false, false, false, 71);
            echo "
    ";
        }
        // line 73
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 73), "get", [0 => "cartPosition"], "method", false, false, false, 73) == "menu")) {
            // line 74
            echo "      <div class=\"desktop-cart-wrapper default-cart-wrapper\">
        ";
            // line 75
            echo ($context["cart"] ?? null);
            echo "
      </div>
    ";
        }
        // line 78
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/classic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 78,  232 => 75,  229 => 74,  226 => 73,  220 => 71,  218 => 70,  214 => 69,  206 => 68,  202 => 66,  197 => 63,  191 => 60,  188 => 59,  185 => 58,  179 => 56,  177 => 55,  173 => 53,  171 => 52,  168 => 51,  161 => 47,  155 => 44,  151 => 42,  149 => 41,  144 => 39,  141 => 38,  135 => 36,  133 => 35,  129 => 33,  121 => 31,  99 => 28,  94 => 27,  92 => 26,  86 => 22,  80 => 20,  78 => 19,  75 => 18,  69 => 16,  67 => 15,  64 => 14,  57 => 10,  51 => 7,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/desktop/classic.twig", "C:\\Users\\pc\\Documents\\GitHub\\opencartnew\\system\\storage\\modification\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\desktop\\classic.twig");
    }
}
