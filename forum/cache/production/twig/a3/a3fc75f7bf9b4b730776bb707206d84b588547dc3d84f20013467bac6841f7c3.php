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

/* board_announcements.html */
class __TwigTemplate_65ec3cc4176165764155d78e104372c8d40e4c839f6aa5a20188c82d50f81d17 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "board_announcements.html", 1)->display($context);
        // line 2
        echo "
<script>
\tvar form_name = 'acp_board_announcements';
\tvar text_name = 'board_announcements_text';
\tvar load_draft = false;
\tvar upload = false;
\tvar imageTag = false;
</script>

<a id=\"maincontent\"></a>

<h1>";
        // line 13
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_SETTINGS");
        echo "</h1>

<p>";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_SETTINGS_EXPLAIN");
        echo "</p>

";
        // line 17
        if (($context["ERRORS"] ?? null)) {
            // line 18
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 19
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 20
            echo ($context["ERRORS"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 23
        echo "
<form id=\"acp_board_announcements\" method=\"post\" action=\"";
        // line 24
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 26
        echo $this->extensions['phpbb\template\twig\extension']->lang("GENERAL_OPTIONS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_enable\">";
        // line 28
        echo ($this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_ENABLE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"board_announcements_enable\" name=\"board_announcements_enable\" value=\"1\"";
        // line 30
        if (($context["BOARD_ANNOUNCEMENTS_ENABLED"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"board_announcements_enable\" value=\"0\"";
        // line 31
        if ( !($context["BOARD_ANNOUNCEMENTS_ENABLED"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_index_only\">";
        // line 35
        echo ($this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_INDEX_ONLY") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"board_announcements_index_only\" name=\"board_announcements_index_only\" value=\"1\"";
        // line 37
        if (($context["BOARD_ANNOUNCEMENTS_INDEX_ONLY"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"board_announcements_index_only\" value=\"0\"";
        // line 38
        if ( !($context["BOARD_ANNOUNCEMENTS_INDEX_ONLY"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_dismiss\">";
        // line 42
        echo ($this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_DISMISS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"board_announcements_dismiss\" name=\"board_announcements_dismiss\" value=\"1\"";
        // line 44
        if (($context["BOARD_ANNOUNCEMENTS_DISMISS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"board_announcements_dismiss\" value=\"0\"";
        // line 45
        if ( !($context["BOARD_ANNOUNCEMENTS_DISMISS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_users\">";
        // line 49
        echo ($this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_USERS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"board_announcements_users\" id=\"board_announcements_users\">";
        // line 51
        echo ($context["S_BOARD_ANNOUNCEMENTS_USERS"] ?? null);
        echo "</select>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 56
        if (($context["BOARD_ANNOUNCEMENTS_PREVIEW"] ?? null)) {
            // line 57
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 58
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_PREVIEW");
            echo "</legend>
\t\t\t<div style=\"padding:10px; font-size:1.0em; overflow: auto; ";
            // line 59
            if (($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null)) {
                echo "background-color:#";
                echo ($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null);
            }
            echo "\">";
            echo ($context["BOARD_ANNOUNCEMENTS_PREVIEW"] ?? null);
            echo "</div>
\t\t</fieldset>
\t";
        }
        // line 62
        echo "
\t<fieldset>
\t\t<legend>";
        // line 64
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_TEXT");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_expiry\">";
        // line 66
        echo ($this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_EXPIRY") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_EXPIRY_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<input name=\"board_announcements_expiry\" type=\"text\" id=\"board_announcements_expiry\" value=\"";
        // line 68
        echo ($context["BOARD_ANNOUNCEMENTS_EXPIRY"] ?? null);
        echo "\" size=\"20\" maxlength=\"20\" /> <samp>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_EXPIRY_FORMAT");
        echo "</samp>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"board_announcements_bgcolor\">";
        // line 72
        echo ($this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_BGCOLOR") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_ANNOUNCEMENTS_BGCOLOR_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<input name=\"board_announcements_bgcolor\" type=\"text\" id=\"board_announcements_bgcolor\" value=\"";
        // line 74
        echo ($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null);
        echo "\" size=\"6\" maxlength=\"6\" ";
        if (($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null)) {
            echo "style=\"border-right:20px solid #";
            echo ($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null);
            echo "\"";
        }
        echo " />
\t\t\t</dd>
\t\t</dl>

\t\t<br />

\t\t";
        // line 80
        $this->loadTemplate("acp_posting_buttons.html", "board_announcements.html", 80)->display($context);
        // line 81
        echo "
\t\t<dl class=\"responsive-columns\">
\t\t\t<dt style=\"width: 90px;\" id=\"color_palette_placeholder\" data-orientation=\"v\" data-color-palette=\"v\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dt>
\t\t\t<dd style=\"margin-";
        // line 84
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo ": 90px;\">
\t\t\t\t<textarea name=\"board_announcements_text\" rows=\"10\" cols=\"60\" style=\"width: 95%;\" data-bbcode=\"true\">";
        // line 85
        echo ($context["BOARD_ANNOUNCEMENTS_TEXT"] ?? null);
        echo "</textarea>
\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 87
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo ": 90px; margin-top: 5px;\">
\t\t\t\t";
        // line 88
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 89
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_bbcode\"";
            if (($context["S_BBCODE_DISABLE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_BBCODE");
            echo "</label>
\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t";
        if (($context["S_SMILIES_ALLOWED"] ?? null)) {
            // line 92
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_smilies\"";
            if (($context["S_SMILIES_DISABLE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_SMILIES");
            echo "</label>
\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t";
        if (($context["S_LINKS_ALLOWED"] ?? null)) {
            // line 95
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_magic_url\"";
            if (($context["S_MAGIC_URL_DISABLE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t\t\t";
        }
        // line 97
        echo "\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 98
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo ": 90px; margin-top: 10px;\"><strong>";
        echo ($this->extensions['phpbb\template\twig\extension']->lang("OPTIONS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo " </strong>";
        echo ($context["BBCODE_STATUS"] ?? null);
        echo " :: ";
        echo ($context["IMG_STATUS"] ?? null);
        echo " :: ";
        echo ($context["FLASH_STATUS"] ?? null);
        echo " :: ";
        echo ($context["URL_STATUS"] ?? null);
        echo " :: ";
        echo ($context["SMILIES_STATUS"] ?? null);
        echo "</dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 103
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" name=\"preview\" value=\"";
        // line 104
        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
        echo "\" />
\t\t";
        // line 105
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

<script>
\tconst textarea = document.querySelector(\"textarea[name='board_announcements_text']\");
\ttextarea.addEventListener(\"select\", (e) => storeCaret(e.target));
\ttextarea.addEventListener(\"click\", (e) => storeCaret(e.target));
\ttextarea.addEventListener(\"keyup\", (e) => storeCaret(e.target));
\ttextarea.addEventListener(\"focus\", () => initInsertions());
</script>

";
        // line 117
        $this->loadTemplate("overall_footer.html", "board_announcements.html", 117)->display($context);
    }

    public function getTemplateName()
    {
        return "board_announcements.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 117,  331 => 105,  327 => 104,  323 => 103,  303 => 98,  300 => 97,  290 => 95,  287 => 94,  277 => 92,  274 => 91,  264 => 89,  262 => 88,  258 => 87,  253 => 85,  249 => 84,  244 => 81,  242 => 80,  227 => 74,  220 => 72,  211 => 68,  204 => 66,  199 => 64,  195 => 62,  184 => 59,  180 => 58,  177 => 57,  175 => 56,  167 => 51,  162 => 49,  151 => 45,  143 => 44,  138 => 42,  127 => 38,  119 => 37,  114 => 35,  103 => 31,  95 => 30,  90 => 28,  85 => 26,  80 => 24,  77 => 23,  71 => 20,  67 => 19,  64 => 18,  62 => 17,  57 => 15,  52 => 13,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "board_announcements.html", "");
    }
}
