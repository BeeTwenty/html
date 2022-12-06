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

/* @vse_passwordstrength/event/overall_footer_after.html */
class __TwigTemplate_648dc45acaf2afcf152cf010d069ec4d66befa2602e6a5ddc0aa5d953c481139 extends \Twig\Template
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
        if ((($context["S_REGISTRATION"] ?? null) || ($context["S_CHANGE_PASSWORD"] ?? null))) {
            // line 2
            echo "\t";
            $this->loadTemplate("@vse_passwordstrength/password_strength.html", "@vse_passwordstrength/event/overall_footer_after.html", 2)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@vse_passwordstrength/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_passwordstrength/event/overall_footer_after.html", "");
    }
}
