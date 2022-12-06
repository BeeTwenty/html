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

/* @rmcgirr83_applicationform/event/overall_header_navigation_prepend.html */
class __TwigTemplate_f37a73635224366dbec8470d5d036b8da8563d975869f8537745e6368abece7b extends \Twig\Template
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
        if (($context["U_APP_FORM"] ?? null)) {
            // line 2
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 3
            echo ($context["U_APP_FORM"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATION_FORM_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t<i class=\"icon fa-forumbee fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 4
            echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATION_FORM");
            echo "</span>
\t\t\t</a>
\t\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_applicationform/event/overall_header_navigation_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@rmcgirr83_applicationform/event/overall_header_navigation_prepend.html", "");
    }
}
