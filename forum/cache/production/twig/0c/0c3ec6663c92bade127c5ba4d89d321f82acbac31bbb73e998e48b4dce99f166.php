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

/* @vse_passwordstrength/password_strength.html */
class __TwigTemplate_843824467990e04dff6f2e23eeeebb215454082a8f370ddd241872c5449c8ffe extends \Twig\Template
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
        echo "<script>
\t(function(\$) {
\t\t'use strict';
\t\t\$.fn.passwordStrength = function() {
\t\t\treturn this.each(function() {
\t\t\t\tvar \$passField = \$(this),
\t\t\t\t\t\$resultMsg = \$('<div/>'),
\t\t\t\t\tdisplayAry = [];
\t\t\t\tdisplayAry[0] = [\$passField.css('background-color'), '']; // 0 defaults
\t\t\t\tdisplayAry[1] = ['#f5a9a9', '";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PS_VERY_WEAK"), "js");
        echo "']; // 1 red, very weak
\t\t\t\tdisplayAry[2] = ['#f5d0a9', '";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PS_WEAK"), "js");
        echo "']; // 2 orange, weak
\t\t\t\tdisplayAry[3] = ['#f3f781', '";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PS_GOOD"), "js");
        echo "']; // 3 yellow, good
\t\t\t\tdisplayAry[4] = ['#a9f5a9', '";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PS_STRONG"), "js");
        echo "']; // 4 light green, strong
\t\t\t\tdisplayAry[5] = ['#00ff00', '";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("PS_VERY_STRONG"), "js");
        echo "']; // 5 green, very strong
\t\t\t\tfunction showStrength(field, score) {
\t\t\t\t\tfield.css('background-color', displayAry[score][0]);
\t\t\t\t\t\$resultMsg.html(displayAry[score][1]);
\t\t\t\t}
\t\t\t\tfunction trigger() {
\t\t\t\t\tvar input = \$passField.val();
\t\t\t\t\tvar score =";
        // line 22
        if (($context["S_USE_ZXCVBN"] ?? null)) {
            // line 23
            echo "zxcvbn(input).score + (input.length > 0);";
        } else {
            // line 25
            echo "Math.max(complexity(input), +(input.length > 0));";
        }
        // line 27
        echo "showStrength(\$passField, score);
\t\t\t\t}
\t\t\t\t\$passField.on('keyup blur', trigger).after(\$resultMsg);
\t\t\t});
\t\t};
\t\t";
        // line 32
        if (($context["S_USE_ZXCVBN"] ?? null)) {
            // line 33
            echo "\t\t\t\$.ajax({
\t\t\t\turl: '";
            // line 34
            echo ($context["ROOT_PATH"] ?? null);
            echo "ext/vse/passwordstrength/lib/zxcvbn/zxcvbn.js',
\t\t\t\tdataType: 'script',
\t\t\t\tcache: true,
\t\t\t\tsuccess: function() {
\t\t\t\t\t\$('input[name=new_password]').passwordStrength();
\t\t\t\t}
\t\t\t});
\t\t";
        } else {
            // line 42
            echo "\t\t\tfunction complexity(password) {
\t\t\t\treturn 0
\t\t\t\t\t+ (password.length > 5) // more than 5 chars
\t\t\t\t\t+ (password.length > 12) // more than 12 chars
\t\t\t\t\t+ (/[a-z]/.test(password) && /[A-Z]/.test(password)) // mixed case chars
\t\t\t\t\t+ (/\\d/.test(password) && /\\D/.test(password)) // at least 1 number and 1 other char
\t\t\t\t\t+ (/[!@#\$%^&*?_~\\-(),]/.test(password) && /\\w/.test(password)); // letters and special chars
\t\t\t}
\t\t\t\$(function() {
\t\t\t\t\$('input[name=new_password]').passwordStrength();
\t\t\t});
\t\t";
        }
        // line 54
        echo "\t})(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "@vse_passwordstrength/password_strength.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  105 => 42,  94 => 34,  91 => 33,  89 => 32,  82 => 27,  79 => 25,  76 => 23,  74 => 22,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_passwordstrength/password_strength.html", "");
    }
}
