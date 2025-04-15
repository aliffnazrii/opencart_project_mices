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

/* default/template/mail/register.twig */
class __TwigTemplate_b8ba782568ee6363de773836a1425567b6baeb02e77fe244711d6e92d3f6be6d extends \Twig\Template
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
        echo ($context["text_welcome"] ?? null);
        echo "

";
        // line 3
        if ( !($context["approval"] ?? null)) {
            // line 4
            echo ($context["text_login"] ?? null);
            echo "

";
            // line 6
            echo ($context["login"] ?? null);
            echo "

";
            // line 8
            if (($context["text_acilit_login"] ?? null)) {
                // line 9
                echo ($context["text_acilit_login"] ?? null);
                echo "
";
            }
            // line 11
            echo "
";
            // line 12
            echo ($context["text_service"] ?? null);
            echo "

";
            // line 14
            echo ($context["text_thanks"] ?? null);
            echo "
";
            // line 15
            echo ($context["store"] ?? null);
            echo "
";
        } else {
            // line 17
            echo ($context["text_approval"] ?? null);
            echo "

";
            // line 19
            echo ($context["login"] ?? null);
            echo "

";
            // line 21
            echo ($context["text_thanks"] ?? null);
            echo "
";
            // line 22
            echo ($context["store"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  88 => 21,  83 => 19,  78 => 17,  73 => 15,  69 => 14,  64 => 12,  61 => 11,  56 => 9,  54 => 8,  49 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/register.twig", "");
    }
}
