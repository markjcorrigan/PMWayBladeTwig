<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* simplemedia.twig */
class __TwigTemplate_0ed7c8909ade43a9d58b06017137f254 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        // line 1
        yield "﻿<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<!--<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">-->
\t\t\t<title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
\t\t\t<!--<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">-->
\t\t <!---------------------Original bootstrap 4.5 before fixed for ableplayer <link rel=\"stylesheet\" href=\"/bootstrapfourfivetwo/css/bootstrap.css\" /> ---->
\t<link rel=\"stylesheet\" href=\"/bootstrapfourfivetwo/css/bootstrapfixedforableplayer.css\" />
\t<link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
    <!--<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css\">-->
    <link rel=\"stylesheet\" href=\"/bootstrapfourthreeone/fontawesomeprowebfivetwo/css/all.css\">
  <!--  <link rel=\"stylesheet\" href=\"/bootstrapfourthreeone/css/jquery-ui.css\"> --------------------------------------NB recently -->
    <link rel=\"stylesheet\" href=\"/css/styles.css\">





\t\t<!--\t<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/bootstrapableplay.css\" >-->
\t\t\t<!--<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\">-->
\t\t\t<link rel=\"stylesheet\" href=\"/ableaudio/build/ableplayer.min.css\" type=\"text/css\">





\t\t\t\t</head>
\t\t\t\t<body class=\"d-flex flex-column\" oncontextmenu=\"return false\" ondragstart=\"return true\"
onselectstart=\"return false\">

\t\t\t\t\t<nav class=\"navbar navbar-expand-sm navbar-dark bg-dark mb-3\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">PMWay</a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarNav\">

\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">

    \t\t ";
        // line 42
        if ((($tmp =  !($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "


    \t\t\t \t\t\t\t<!--NB trying to get Contact and Blog to work
    \t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/blog/contactpmway.php\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li class=\"nav-item\">-->

                   \t\t\t<!--\t<li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                &nbsp;Contact | Blog
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                              <a class=\"dropdown-item\" href=\"/contact\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact</a>
                              <a class=\"dropdown-item\" href=\"/blog/index.php\"><i class=\"fab fa-blogger\" aria-hidden=\"true\"></i>&nbsp;Blog</a>-->

\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">  ---NB trying to get Contact and Blog working-->
\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/register\" id=\"register\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;Register
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/login\" id=\"login\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-unlock\" aria-hidden=\"true\"></i>&nbsp;Login
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\"> -->



    \t\t\t \t\t\t\t<!--NB trying to get Contact and Blog to work-->
    \t\t\t\t\t\t\t<!--\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/blog/contactpmway.php\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li class=\"nav-item\">-->

                   \t\t\t<!--\t<li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                &nbsp;Contact | Blog
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                              <a class=\"dropdown-item\" href=\"/contact\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact</a>
                              <a class=\"dropdown-item\" href=\"/blog/index.php\"><i class=\"fab fa-blogger\" aria-hidden=\"true\"></i>&nbsp;Blog</a>-->

\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">  ---NB trying to get Contact and Blog working-->
\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/register\" id=\"register\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;Register
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/login\" id=\"login\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-unlock\" aria-hidden=\"true\"></i>&nbsp;Login
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\"> -->



                   ";
        }
        // line 113
        yield "
         ";
        // line 114
        if ((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "         \t<!-- Global Site Tag (gtag.js) - Google Analytics -->
<!--<script async src=\"https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-31126291-1');
</script>-->

                  \t\t  <!--<ul class=\"navbar-nav ml-auto\">

                  <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                &nbsp;Contact | <!--Blog |--> <!--Search
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                              <a class=\"dropdown-item\" href=\"/blog/contact.php\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact</a>
                              <!--<a class=\"dropdown-item\" href=\"/blog/index.php\"><i class=\"fab fa-blogger\" aria-hidden=\"true\"></i>&nbsp;Blog</a>-->
                              <!--<a class=\"dropdown-item\" href=\"/search/search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i>&nbsp;Search</a>
                              <!--<a class=\"dropdown-item\" href=\"/search/ajax\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i>&nbsp;Add (admin only)</a>-->

                              </div>

    \t\t<!--
                   \t\t\t\t<li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                &nbsp;Scrum Foundation
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                              <a class=\"dropdown-item\" href=\"/scrum/sfone/index\">&nbsp;SFOne</a>

                              </div>
                              </li class=\"nav-item\">-->
\t\t\t\t\t\t\t\t<!--\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/home/pmbokprocessnutshell\"><i class=\"fa fa-cogs\"></i>&nbsp;How To
\t\t\t\t\t\t\t\t\t</a>-->



              <!-- <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-cogs\"></i>&nbsp;PMWays
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
              <a class=\"dropdown-item\" href=\"/home/pmbokprocessnutshell\"><i class=\"fa fa-cogs\"></i>&nbsp;PMBOK Dashboard \"How To\"</a>
              <a class=\"dropdown-item\" href=\"/home/intwomins\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i>&nbsp;PMWay (in2minutes)</a>
               <a class=\"dropdown-item\" href=\"/home/intenmins\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i>&nbsp;PMWay (in10minutes)</a>  -->

\t\t\t\t\t\t\t\t\t\t<!--<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarNav\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>&nbsp;Logout

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left\" aria-labelledby=\"navbarDropdownPortfolio\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>&nbsp;Logout
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/logoutb\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-unlock\" aria-hidden=\"true\"></i>&nbsp;ticked
\t\t\t\t\t\t\t\t\t\t\t<br>remember?
\t\t\t\t\t\t\t\t\t\t\t</a>-->
\t\t\t\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\"><a class=\"nav-link\" href=\"/home/pmbokprocessnutshell\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i>&nbsp;PMBOK 'How To'</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li class=\"nav-item\">-->

\t\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/profile/show\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;Profile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i>&nbsp;Log out</a></li class=\"nav-item\">\t-->


                    ";
        }
        // line 189
        yield "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</nav>





        ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["flash_messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 198
            yield "
\t\t\t\t\t\t\t\t\t<div style=\"text-align:center\" class=\"alert alert-";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 199), "html", null, true);
            yield "\">
                ";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["message"], "body", [], "any", false, false, false, 200), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "

        ";
        // line 205
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 215
        yield "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!--<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>-->
\t\t\t\t\t\t\t\t\t<!--<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>-->
\t\t\t\t\t\t\t\t\t<!--<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>-->

\t\t\t\t\t\t\t\t\t<!--<script src=\"https://use.fontawesome.com/2f08d8400c.js\"></script>-->


\t\t\t\t\t<!-- Dependencies -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"/ableaudio/thirdparty/js.cookie.js\"></script>

<!-- CSS -->
<link rel=\"stylesheet\" href=\"/ableaudio/build/ableplayer.min.css\" type=\"text/css\"/>

<!-- JavaScript -->
<script src=\"/ableaudio/build/ableplayer.min.js\"></script>




\t<!--
\t\t\t\t\t\t\t\t\t<script src=\"/bootstrapfourfivetwo/js/jquery.js\"></script>

\t\t\t\t\t\t\t\t\t<script src=\"/bootstrapfourfivetwo/js/bootstrap.js\"></script>

<script src=\"/ableaudio/build/ableplayer.js\"></script>

<script src=\"/ableaudio/thirdparty/js.cookie.js\"></script>  -->







\t\t\t\t\t\t\t\t\t<!--<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t\t\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t\t\t\t\t-->




";
        // line 260
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 294
        yield "</body>
</html>


";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 205
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 206
        yield "
\t\t\t\t\t\t\t\t\t<div class=\"container\" style=\"text-align:center\">






        ";
        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 261
        yield "

<footer id=\"sticky-footer\" class=\"py-4 bg-dark text-white-50\">
    <div class=\"container text-center\">
        <div class=\"row\">
            <div class=\"col-md-6\">

                <p style=\"text-align:center\" class=\"text-white\">Project &amp; Process Management
\t\t\t\t<span lang=\"en-za\">Best Practice</span>

            <br>at <!--<a href=\"/cmmi\" title=\"Where are you at?  Click here for PMWay's 1 minute self assessment challenge.  We dare you to take the pin test now!\" >-->CM Level 2<!--</a>--> and above</p>
\t\t\t\t\t<p align=\"center\"><!--<a href=\"/gamestats\">--><img alt=\"Up Stat or Down Stat\" class=\"img-fluid\" src=\"/images/devopsimagemedium.png\" title=\"How are your game stats?\"><!--</a>--></p>




\t\t\t\t <p style=\"text-align:center\" class=\"text-white\">underpinned by <!--<a href=\"/home/itil\">-->ITIL<!--</a>--></p>

            </div>

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-10 text-right small align-self-end text-white\">2009 PMWay<br><small >People Process Technology Governance Execution</small></div>
        </div>
    </div>

</footer>



";
        // line 290
        if ((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 291
            yield "
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "simplemedia.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  411 => 291,  409 => 290,  378 => 261,  371 => 260,  358 => 206,  351 => 205,  341 => 7,  332 => 294,  330 => 260,  283 => 215,  281 => 205,  277 => 203,  268 => 200,  264 => 199,  261 => 198,  257 => 197,  247 => 189,  171 => 115,  169 => 114,  166 => 113,  94 => 43,  92 => 42,  54 => 7,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<!--<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">-->
\t\t\t<title>{% block title %}{% endblock %}</title>
\t\t\t<!--<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">-->
\t\t <!---------------------Original bootstrap 4.5 before fixed for ableplayer <link rel=\"stylesheet\" href=\"/bootstrapfourfivetwo/css/bootstrap.css\" /> ---->
\t<link rel=\"stylesheet\" href=\"/bootstrapfourfivetwo/css/bootstrapfixedforableplayer.css\" />
\t<link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
    <!--<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css\">-->
    <link rel=\"stylesheet\" href=\"/bootstrapfourthreeone/fontawesomeprowebfivetwo/css/all.css\">
  <!--  <link rel=\"stylesheet\" href=\"/bootstrapfourthreeone/css/jquery-ui.css\"> --------------------------------------NB recently -->
    <link rel=\"stylesheet\" href=\"/css/styles.css\">





\t\t<!--\t<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/bootstrapableplay.css\" >-->
\t\t\t<!--<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/styles.css\">-->
\t\t\t<link rel=\"stylesheet\" href=\"/ableaudio/build/ableplayer.min.css\" type=\"text/css\">





\t\t\t\t</head>
\t\t\t\t<body class=\"d-flex flex-column\" oncontextmenu=\"return false\" ondragstart=\"return true\"
onselectstart=\"return false\">

\t\t\t\t\t<nav class=\"navbar navbar-expand-sm navbar-dark bg-dark mb-3\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">PMWay</a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarNav\">

\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">

    \t\t {% if not user %}



    \t\t\t \t\t\t\t<!--NB trying to get Contact and Blog to work
    \t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/blog/contactpmway.php\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li class=\"nav-item\">-->

                   \t\t\t<!--\t<li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                &nbsp;Contact | Blog
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                              <a class=\"dropdown-item\" href=\"/contact\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact</a>
                              <a class=\"dropdown-item\" href=\"/blog/index.php\"><i class=\"fab fa-blogger\" aria-hidden=\"true\"></i>&nbsp;Blog</a>-->

\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">  ---NB trying to get Contact and Blog working-->
\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/register\" id=\"register\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;Register
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/login\" id=\"login\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-unlock\" aria-hidden=\"true\"></i>&nbsp;Login
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\"> -->



    \t\t\t \t\t\t\t<!--NB trying to get Contact and Blog to work-->
    \t\t\t\t\t\t\t<!--\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/blog/contactpmway.php\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li class=\"nav-item\">-->

                   \t\t\t<!--\t<li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                &nbsp;Contact | Blog
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                              <a class=\"dropdown-item\" href=\"/contact\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact</a>
                              <a class=\"dropdown-item\" href=\"/blog/index.php\"><i class=\"fab fa-blogger\" aria-hidden=\"true\"></i>&nbsp;Blog</a>-->

\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">  ---NB trying to get Contact and Blog working-->
\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/register\" id=\"register\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;Register
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/login\" id=\"login\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-unlock\" aria-hidden=\"true\"></i>&nbsp;Login
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\"> -->



                   {% endif %}

         {% if user %}
         \t<!-- Global Site Tag (gtag.js) - Google Analytics -->
<!--<script async src=\"https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-31126291-1');
</script>-->

                  \t\t  <!--<ul class=\"navbar-nav ml-auto\">

                  <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                &nbsp;Contact | <!--Blog |--> <!--Search
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                              <a class=\"dropdown-item\" href=\"/blog/contact.php\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>&nbsp;Contact</a>
                              <!--<a class=\"dropdown-item\" href=\"/blog/index.php\"><i class=\"fab fa-blogger\" aria-hidden=\"true\"></i>&nbsp;Blog</a>-->
                              <!--<a class=\"dropdown-item\" href=\"/search/search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i>&nbsp;Search</a>
                              <!--<a class=\"dropdown-item\" href=\"/search/ajax\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i>&nbsp;Add (admin only)</a>-->

                              </div>

    \t\t<!--
                   \t\t\t\t<li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                &nbsp;Scrum Foundation
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                              <a class=\"dropdown-item\" href=\"/scrum/sfone/index\">&nbsp;SFOne</a>

                              </div>
                              </li class=\"nav-item\">-->
\t\t\t\t\t\t\t\t<!--\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/home/pmbokprocessnutshell\"><i class=\"fa fa-cogs\"></i>&nbsp;How To
\t\t\t\t\t\t\t\t\t</a>-->



              <!-- <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-cogs\"></i>&nbsp;PMWays
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
              <a class=\"dropdown-item\" href=\"/home/pmbokprocessnutshell\"><i class=\"fa fa-cogs\"></i>&nbsp;PMBOK Dashboard \"How To\"</a>
              <a class=\"dropdown-item\" href=\"/home/intwomins\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i>&nbsp;PMWay (in2minutes)</a>
               <a class=\"dropdown-item\" href=\"/home/intenmins\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i>&nbsp;PMWay (in10minutes)</a>  -->

\t\t\t\t\t\t\t\t\t\t<!--<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarNav\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>&nbsp;Logout

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-left\" aria-labelledby=\"navbarDropdownPortfolio\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/logout\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>&nbsp;Logout
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/logoutb\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-unlock\" aria-hidden=\"true\"></i>&nbsp;ticked
\t\t\t\t\t\t\t\t\t\t\t<br>remember?
\t\t\t\t\t\t\t\t\t\t\t</a>-->
\t\t\t\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\"><a class=\"nav-link\" href=\"/home/pmbokprocessnutshell\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i>&nbsp;PMBOK 'How To'</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li class=\"nav-item\">-->

\t\t\t\t\t\t\t\t\t<!--<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/profile/show\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;Profile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li class=\"nav-item\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/logout\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i>&nbsp;Log out</a></li class=\"nav-item\">\t-->


                    {% endif %}

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</nav>





        {% for message in flash_messages %}

\t\t\t\t\t\t\t\t\t<div style=\"text-align:center\" class=\"alert alert-{{ message.type }}\">
                {{ message.body }}
            </div>
        {% endfor %}


        {% block body %}

\t\t\t\t\t\t\t\t\t<div class=\"container\" style=\"text-align:center\">






        {% endblock %}

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!--<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>-->
\t\t\t\t\t\t\t\t\t<!--<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>-->
\t\t\t\t\t\t\t\t\t<!--<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>-->

\t\t\t\t\t\t\t\t\t<!--<script src=\"https://use.fontawesome.com/2f08d8400c.js\"></script>-->


\t\t\t\t\t<!-- Dependencies -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script src=\"/ableaudio/thirdparty/js.cookie.js\"></script>

<!-- CSS -->
<link rel=\"stylesheet\" href=\"/ableaudio/build/ableplayer.min.css\" type=\"text/css\"/>

<!-- JavaScript -->
<script src=\"/ableaudio/build/ableplayer.min.js\"></script>




\t<!--
\t\t\t\t\t\t\t\t\t<script src=\"/bootstrapfourfivetwo/js/jquery.js\"></script>

\t\t\t\t\t\t\t\t\t<script src=\"/bootstrapfourfivetwo/js/bootstrap.js\"></script>

<script src=\"/ableaudio/build/ableplayer.js\"></script>

<script src=\"/ableaudio/thirdparty/js.cookie.js\"></script>  -->







\t\t\t\t\t\t\t\t\t<!--<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t\t\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t\t\t\t\t-->




{% block footer %}


<footer id=\"sticky-footer\" class=\"py-4 bg-dark text-white-50\">
    <div class=\"container text-center\">
        <div class=\"row\">
            <div class=\"col-md-6\">

                <p style=\"text-align:center\" class=\"text-white\">Project &amp; Process Management
\t\t\t\t<span lang=\"en-za\">Best Practice</span>

            <br>at <!--<a href=\"/cmmi\" title=\"Where are you at?  Click here for PMWay's 1 minute self assessment challenge.  We dare you to take the pin test now!\" >-->CM Level 2<!--</a>--> and above</p>
\t\t\t\t\t<p align=\"center\"><!--<a href=\"/gamestats\">--><img alt=\"Up Stat or Down Stat\" class=\"img-fluid\" src=\"/images/devopsimagemedium.png\" title=\"How are your game stats?\"><!--</a>--></p>




\t\t\t\t <p style=\"text-align:center\" class=\"text-white\">underpinned by <!--<a href=\"/home/itil\">-->ITIL<!--</a>--></p>

            </div>

            <div class=\"col-md-3\"></div>
            <div class=\"col-md-10 text-right small align-self-end text-white\">2009 PMWay<br><small >People Process Technology Governance Execution</small></div>
        </div>
    </div>

</footer>



{% if user %}

  {% endif %}
{% endblock %}
</body>
</html>


", "simplemedia.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/simplemedia.html");
    }
}
