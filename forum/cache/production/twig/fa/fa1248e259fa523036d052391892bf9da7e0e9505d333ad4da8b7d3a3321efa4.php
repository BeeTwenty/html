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

/* @alex75_welcomeback/event/overall_header_content_before.html */
class __TwigTemplate_abd3c90908fc54a5867023213dd0a7b0d3bd22bf16535f026319582f7c3b2c8e extends \Twig\Template
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
        echo "<!-- Welcome back extension By alex75 https://www.phpbb-store.it -->
";
        // line 2
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null))) {
            // line 3
            echo "<div class=\"welcbackhide\">
<br /><div class=\"forabg\">
<div class=\"inner\">
<ul class=\"topiclist\">
<li class=\"header\">
<dl class=\"row-item\">
<dt>";
            // line 9
            echo ($context["WB_SITENAME"] ?? null);
            echo "</dt>
</dl>
</li>
</ul>
<ul class=\"topiclist forums\">
<li>
<dl>
<dd id=\"blockwb\">
<div>";
            // line 17
            echo $this->extensions['phpbb\template\twig\extension']->lang("WELCOMEBACK_HI");
            echo "<br />";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "<br />";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WELCOMEBACK_SEE");
            echo "</div>
";
            // line 18
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo "<div class=\"welcome-avatar\">";
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
            } else {
                echo "<div class=\"welcome-avatar\"><img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\" /></div>";
            }
            // line 19
            echo "</dd>
<dd class=\"lastpost\" id=\"blockwb1\">
<span>
";
            // line 22
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo "&bull; ";
                echo ($context["LAST_VISIT_DATE"] ?? null);
                echo "<br />&bull; ";
                echo ($context["CURRENT_TIME"] ?? null);
                echo "<br />&bull; ";
                echo ($context["S_TIMEZONE"] ?? null);
            } else {
                echo "&bull; ";
                echo ($context["CURRENT_TIME"] ?? null);
                echo "<br />&bull; ";
                echo ($context["S_TIMEZONE"] ?? null);
            }
            // line 23
            echo "<li class=\"lastpost\"><br />
&bull; <a href=\"";
            // line 24
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "</a><br />
<a href=\"";
            // line 25
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" accesskey=\"e\">&bull; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</a>
";
            // line 26
            if (($context["U_MCP"] ?? null)) {
                echo "<br /><a href=\"";
                echo ($context["U_MCP"] ?? null);
                echo "\">&bull; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
                echo "</a>";
            }
            // line 27
            if (($context["U_ACP"] ?? null)) {
                echo "<br /><a href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\">&bull; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
                echo "</a>";
            }
            echo "<br />
";
            // line 28
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                echo "<br /><br />&bull; <a class=\"wbicon_notify\" href=\"";
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\"><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " [</span><strong>";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong><span>]</span></a>";
            }
            // line 29
            if (($context["S_DISPLAY_PM"] ?? null)) {
                echo "<br />&bull; <a class=\"wbicon_pm\" href=\"";
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\"><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
                echo " [</span><strong>";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong><span>]</span></a>";
            }
            // line 30
            echo "</li>
</span>
<br />
</dd>
";
            // line 34
            if ((($context["SCRIPT_NAME"] ?? null) == "index")) {
                // line 35
                echo "<dd class=\"lastpost\" id=\"blockwb2\"><span>
";
                // line 36
                if (($context["TOTAL_POSTS"] ?? null)) {
                    echo "&bull; ";
                    echo ($context["TOTAL_POSTS"] ?? null);
                    echo " <br />";
                }
                // line 37
                if (($context["TOTAL_TOPICS"] ?? null)) {
                    echo "&bull; ";
                    echo ($context["TOTAL_TOPICS"] ?? null);
                    echo "<br /><br />
&bull; <a href=\"";
                    // line 38
                    echo ($context["U_MEMBERLIST"] ?? null);
                    echo "\"> ";
                    echo ($context["TOTAL_USERS"] ?? null);
                    echo "</a><br />
&bull; ";
                    // line 39
                    echo ($context["NEWEST_USER"] ?? null);
                    echo "<br />";
                }
                // line 40
                echo "&bull; <a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</a><br />
";
                // line 41
                if (($context["U_VIEWONLINE"] ?? null)) {
                    echo "<br /><a href=\"";
                    echo ($context["U_VIEWONLINE"] ?? null);
                    echo "\">&bull; ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                    echo "</a>";
                } else {
                    echo "&bull; ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                }
                echo "<br />
";
                // line 42
                if (($context["TOTAL_USERS_ONLINE"] ?? null)) {
                    echo "&bull; ";
                    echo ($context["RECORD_USERS"] ?? null);
                }
                echo "<br /><br />
";
                // line 43
                if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
                    echo "\t&bull; <strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
                    echo "</strong>";
                    if (($context["BIRTHDAY_LIST"] ?? null)) {
                        echo "<br />";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo ($context["BIRTHDAY_LIST"] ?? null);
                        echo "</strong>";
                    } else {
                        echo "<br />";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BIRTHDAYS");
                    }
                }
                // line 44
                echo "</span>
<br />
</dd>
";
            } else {
                // line 48
                echo "<dd class=\"lastpost\" id=\"blockwb2\">
";
                // line 49
                if (((($context["SCRIPT_NAME"] ?? null) == "viewforum") &&  !($context["TOTAL_TOPICS"] ?? null))) {
                    // line 50
                    echo "<a href=\"";
                    echo ($context["U_VIEW_FORUM"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOU_ARE_HERE");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["FORUM_NAME"] ?? null);
                    echo "</a><br /><br />
";
                }
                // line 52
                if (($context["TOTAL_TOPICS"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_VIEW_FORUM"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOU_ARE_HERE");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["FORUM_NAME"] ?? null);
                    echo "</a><br /><br />&bull; ";
                    echo ($context["TOTAL_TOPICS"] ?? null);
                    echo " ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("IN_THIS_FORUM");
                    echo "<br /><br />";
                }
                // line 53
                if (($context["TOTAL_POSTS"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_VIEW_TOPIC"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOU_ARE_HERE");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["TOPIC_TITLE"] ?? null);
                    echo "</a><br /><br />&bull; ";
                    echo ($context["TOTAL_POSTS"] ?? null);
                    echo " ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("IN_THIS_TOPIC");
                    echo "<br /><br />";
                }
                // line 54
                echo "&bull; <a href=\"";
                echo ($context["U_INDEX"] ?? null);
                echo "\" data-navbar-reference=\"index\">";
                if ( !($context["U_SITE_HOME"] ?? null)) {
                    echo "<i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i>";
                }
                echo "<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                echo "</span></a><br />
&bull; <a href=\"";
                // line 55
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span></a><br />
&bull; <a href=\"";
                // line 56
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span></a><br /><br />
<br /><a href=\"";
                // line 57
                echo ($context["U_FAQ"] ?? null);
                echo "\" rel=\"help\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
                echo "\" role=\"menuitem\"><i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
                echo "</span></a>
<br /><a href=\"";
                // line 58
                echo ($context["U_SEARCH"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "</span></a>
<br /><br /><a href=\"";
                // line 59
                echo ($context["U_DELETE_COOKIES"] ?? null);
                echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\"><i class=\"icon fa-trash fa-fw\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_COOKIES");
                echo "</span></a><br />
<br /><br />
</dd>
";
            }
            // line 63
            echo "<dd id=\"blockwb3\">
";
            // line 64
            if (($context["S_DISPLAY_SEARCH"] ?? null)) {
                // line 65
                if (($context["S_REGISTERED_USER"] ?? null)) {
                    // line 66
                    echo "<br />&bull; <a href=\"";
                    echo ($context["U_WBYOURSUBSCRIBED"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_SUBSCRIBED");
                    echo "\" role=\"menuitem\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_SUBSCRIBED");
                    echo "</a>
<br />&bull; <a href=\"";
                    // line 67
                    echo ($context["U_WBYOURBOOKMARKS"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_BOOKMARKS");
                    echo "\" role=\"menuitem\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_BOOKMARKS");
                    echo "</a>
<br />&bull; <a href=\"";
                    // line 68
                    echo ($context["U_WBYOURDRAFTS"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_DRAFTS");
                    echo "\" role=\"menuitem\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_DRAFTS");
                    echo "</a>
<br />&bull; <a href=\"";
                    // line 69
                    echo ($context["U_WBYOURATTACHMENTS"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_ATTACHMENTS");
                    echo "\" role=\"menuitem\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_ATTACHMENTS");
                    echo "</a>
<br />&bull; <a href=\"";
                    // line 70
                    echo ($context["U_WBYOURTOPICS"] ?? null);
                    echo "\" role=\"menuitem\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("WBMY_TOPICS");
                    echo "</a>
<br />&bull; <a href=\"";
                    // line 71
                    echo ($context["U_SEARCH_SELF"] ?? null);
                    echo "\" role=\"menuitem\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                    echo "</a>
";
                }
                // line 73
                if (($context["S_USER_LOGGED_IN"] ?? null)) {
                    // line 74
                    echo "<br />&bull; <a href=\"";
                    echo ($context["U_SEARCH_NEW"] ?? null);
                    echo "\" role=\"menuitem\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                    echo "</a>
";
                }
                // line 76
                if (($context["S_LOAD_UNREADS"] ?? null)) {
                    echo " 
<br />&bull; <a href=\"";
                    // line 77
                    echo ($context["U_SEARCH_UNREAD"] ?? null);
                    echo "\" role=\"menuitem\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                    echo "</a>
";
                }
                // line 79
                echo "<br />&bull; <a href=\"";
                echo ($context["U_SEARCH_UNANSWERED"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
                echo "</a>
<br />&bull; <a href=\"";
                // line 80
                echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
                echo "</a>
<p class=\"separator\"></p>
";
                // line 82
                if ((($context["SCRIPT_NAME"] ?? null) == "index")) {
                    echo "<br />
<a href=\"";
                    // line 83
                    echo ($context["U_FAQ"] ?? null);
                    echo "\" rel=\"help\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
                    echo "\" role=\"menuitem\"><i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
                    echo "</span></a>
&emsp;<a href=\"";
                    // line 84
                    echo ($context["U_SEARCH"] ?? null);
                    echo "\" role=\"menuitem\"><i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                    echo "</span></a>
&emsp;<a href=\"";
                    // line 85
                    echo ($context["U_LOGIN_LOGOUT"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                    echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                    echo "</span></a>
";
                } else {
                    // line 86
                    echo "\t\t\t\t\t\t
<br /><a href=\"";
                    // line 87
                    echo ($context["U_LOGIN_LOGOUT"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                    echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                    echo "</span></a>
";
                }
            }
            // line 90
            echo "<br /><br />                
</dd>
</dl>
</li>
</ul>
</div></div></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@alex75_welcomeback/event/overall_header_content_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 90,  447 => 87,  444 => 86,  435 => 85,  429 => 84,  421 => 83,  417 => 82,  410 => 80,  403 => 79,  396 => 77,  392 => 76,  384 => 74,  382 => 73,  375 => 71,  369 => 70,  361 => 69,  353 => 68,  345 => 67,  336 => 66,  334 => 65,  332 => 64,  329 => 63,  320 => 59,  314 => 58,  306 => 57,  300 => 56,  294 => 55,  283 => 54,  268 => 53,  253 => 52,  242 => 50,  240 => 49,  237 => 48,  231 => 44,  214 => 43,  207 => 42,  194 => 41,  187 => 40,  183 => 39,  177 => 38,  171 => 37,  165 => 36,  162 => 35,  160 => 34,  154 => 30,  144 => 29,  134 => 28,  124 => 27,  116 => 26,  108 => 25,  100 => 24,  97 => 23,  83 => 22,  78 => 19,  69 => 18,  61 => 17,  50 => 9,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@alex75_welcomeback/event/overall_header_content_before.html", "");
    }
}
