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

/* C:\xampp\htdocs\pmway\resources\views/Home/about.twig */
class __TwigTemplate_7fa6ad904733184705c33691da6fac55 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        $this->parent = $this->load("base.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        if ((($tmp =  !($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "PMWay";
        }
        yield " ";
        if ((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Why PMWay";
        }
        yield "  ";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        if ((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "
<div class=\"container\" align=\"center\">
<h3>PMWay web is an ideas sandbox</h3>

<p align=\"center\"><font size=\"-1\">Click the sandbox below for more information about this web site</font></p>



<button class=\"btn align-center clearfix\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsewhypmway\" aria-expanded=\"false\" aria-controls=\"collapseperformancestats\"><img class=\"img-fluid\" src=\"/images/sandpitwithoutshadow.png\" onmouseover=\"this.src='/images/sandpit1.png'\" onmouseout=\"this.src='/images/sandpitwithoutshadow.png'\" title=\"Click here if you want to know Why PMWay?\"><br><br>

<!--Click the sandbox for ways to up Project and Process skills and <a href=\"/gamestats\" target=\"_blank\">game stats</a>.<!-----------------------------------------------------------------
<br>PMWay also suggests a \"mind set change\" that is urgently required,<br>if the goal for South Africa is a prosperous future for our Rainbow Nation.</button>
<br>----->



</button>
<br>

<div class=\"collapse\" id=\"collapsewhypmway\">
    <div class=\"container\">
        <div class=\"card text-center\">
<h5 class=\"card-header\" align=\"center\">More Information About PMWay?</h5>
            <div class=\"card-body text-center\">
<h3 align=\"left\">PMWay:  The Way to Project and Process Management
Excellence</h3> <br>

                       <ul>
                            <li>
                                <p align=\"left\">I built PMWay to facilitate the pinning down of knowledge (a store of assets) pertaining to Project and Process Management.  The <a href=\"/pmway/?slide=2\" target=_blank\">link here about the Frameworks landscape</a> gives a quick overview of PMWay's scope.  Over time the web site has been converted to underpin an ICT
\t\t\t\t\t\t\t\tMSc. Dissertation.&nbsp; <br>The use of the
\t\t\t\t\t\t\t\tPMBOK as a foundation in PMWay is based on&nbsp;my
\t\t\t\t\t\t\t\tappreciation of the fact that the PMBOK has
\t\t\t\t\t\t\t\tstatus as a Standard&nbsp;<a href=\"/pmway/?slide=2\" title=\"The Standards / Frameworks Landscape slide #2\" target=\"_blank\">grouped along with the ANSI, ISO and BS
\t\t\t\t\t\t\t\tStandards</a>.
<br>




<div align=\"center\">

<br><button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapseopinion\" aria-expanded=\"false\" aria-controls=
        \"collapseopinion\">PMWay Opinion:<br>
About Agile @ CM L1
</button>

<div class=\"collapse\" id=\"collapseopinion\">
    <div class=\"container\">
        <div class=\"card text-center\">
<h5 class=\"card-header\" align=\"center\">If you have a different (better) understanding <a href=\"/contacts/new\" target=\"_blank\">please send it to PMWay</a></h5>
            <div class=\"card-body text-center\">
            <p align=\"left\">The above said, I am
\t\t\t\t\t\t\t\tconstantly amazed by many I speak to who totally
\t\t\t\t\t\t\t\tdisregard the above &quot;state of affairs,&quot;
\t\t\t\t\t\t\t\twhile
\t\t\t\t\t\t\t\tfanatically insisting on hyping on and on about agile!&nbsp;
\t\t\t\t\t\t\t\tOne person said to me, when I explained that
\t\t\t\t\t\t\t\tagile was not on the above <a href=\"/pmway/?slide=2\" title=\"The Standards / Frameworks Landscape slide #2\" target=\"_blank\">Standards, Frameworks
\t\t\t\t\t\t\t\tmatrix</a>: &quot;Yes but how old is your diagram?&quot;&nbsp;
\t\t\t\t\t\t\t\tI thought to myself, &quot;<a href=\"/images/birdbrain.jpg\" target=\"_blank\">Your point taken and rejected</a>, my point (<a href=\"/pmway/?slide=2\" title=\"The Standards / Frameworks Landscape slide #2\" target=\"_blank\">if you look carefully at the Standards Frameworks Landscape</a>) totally
\t\t\t\t\t\t\t\tmisunderstood by you!\"<br><br>Don't get me
\t\t\t\t\t\t\t\twrong. I love agile and especially Scrum:&nbsp;
\t\t\t\t\t\t\t\tBut only If well run using the Scrum processes that are defined and operate at CM Level 2+!<br>(<a href=\"/\" target=\"_blank\" title=\"The PMBOK Dashboard clearly shows the Knowledge Areas that need monitoring and control for project success\">With
\t\t\t\t\t\t\t\tlapsed traditional project management controls</a>
\t\t\t\t\t\t\t\tthat very often occur with agile,
\t\t\t\t\t\t\t\tit will have to be
\t\t\t<a href=\"/scrumrca#indexc\" target=\"_blank\"><u><b>run very well</b></u></a>
\t\t\t(regularly <a href=\"/workingsoftware\" target=\"_blank\">demonstrating and releasing working software</a>) to mitigate serious risks
\t\t\t\t\t\t\t\tassociated with agile's loose approach!) ELSE AGILE IS NO BETTER THAN BADLY (CM L1) RUN TRADITIONAL PROJECT MANAGEMENT!
\t\t\t\t\t\t\t\t<a href=\"/pmway/?slide=12\" target=\"_blank\"> <br>
\t\t\t\t\t\t\t\t<br>A deeper look at the section
\t\t\t\t\t\t\t\tin PMWay on Scrum here
\t\t\t\t\t\t\t</a> will
\t\t\t\t\t\t\t\tclearly explain why processes should be
\t\t\t\t\t\t\t\tcorrectly used at Capability
\t\t\t\t\t\t\t\tMaturity Level 2+ for success; which (if you
\t\t\t\t\t\t\t\tjoint the dots at the bottom of the home page)
\t\t\t\t\t\t\t\twill also explain what
\t\t\t\t\t\t\t\tthis web site is all about.&nbsp; <br>Operating at
\t\t\t\t\t\t\t\tCapability Maturity Level 1, especially with
\t\t\t\t\t\t\t\tagile, must surely be, as I often see, from a
\t\t\t\t\t\t\t\tproject management perspective, a recipe for
\t\t\t\t\t\t\t\tdisaster!<br>Following the SBOK (Scrum Body
\t\t\t\t\t\t\t\tof Knowledge) processes more closely on the
\t\t\t\t\t\t\t\tother hand will greatly assist in improving the
\t\t\t\t\t\t\t\tagile (Scrum) project's success rate!&nbsp;
\t\t\t\t\t\t\t\tAppreciating the PMBOK processes (mindful also
\t\t\t\t\t\t\t\tof joining all the dots found on the home page)
\t\t\t\t\t\t\t\tas a \"best way to run projects,\" when using
\t\t\t\t\t\t\t\tagile must further reduce risk and waste while
\t\t\t\t\t\t\t\timproving productivity and quality.<br>Take
\t\t\t\t\t\t\t\tthe PMWay&nbsp;<a href=\"/pin\" target=\"_blank\" >pin test</a>
\t\t\t\t\t\t\t\tnow if you want to ascertain your application of project method and associated risk exposure.<br>
\t\t\t\t\t\t\t\t<br>This image
\t\t\t\t\t\t\t\tbelow, from the PRINCE2 agile manual, in my mind
\t\t\t\t\t\t\t\tsuccinctly illustrates that while agility
\t\t\t\t\t\t\t\tis awesome, it must not come about at the expense of well engineered
\t\t\t\t\t\t\t\tsoftware solutions.<br>
\t\t\t\t\t\t\t\t<a href=\"/agileisdead\" target=\"_blank\" title=\"Death of Agile?\"><img alt=\"PRINCE2 Agile\" class=\"img-fluid\" src=\"/images/p2afighter.png\"></a><br>(If interested click the image
\t\t\t\t\t\t\t\tabove to jump to an
\t\t\t\t\t\t\t\texcellent talk about the death of Agile (with a
\t\t\t\t\t\t\t\tcapital A); from one of the guys who attended
\t\t\t\t\t\t\t\tSnowbird in Utah and gave us <a href=\"/agile?slide=12\" target=\"_blank\" title=\"Click here for the Agile Manifesto\">the
\t\t\t\t\t\t\t\tagile manifesto</a>)<br><br>Therefore, because I appreciate the PMBOK's value to assist me to run my Programs and Projects
                                    better, in
                                    the interest of project management process improvement, you are
                                    welcome to use the assets you find here.<br><br>
\t\t\t\t\t\t\t\t<em><strong>Note:&nbsp; </strong></em>Unlike Business As Usual (BAU) a
\t\t\t\t\t\t\t\tproject is a temporary undertaking!&nbsp; <br>Again I am consistently amazed at companies who bundle what are essentially project management processes into BAU!?<br>
\t\t\t\t\t\t\t\tThey also appear to be bundling
\t\t\t\t\t\t\t\tthe SS, SD and ST ITIL processes into BAU
\t\t\t\t\t\t\t\t(essentially SO) stating that DevOps is a replacement for ITIL best practice!?<br>
\t\t\t\t\t\t\t\tIt is obvious to anyone who understand the ITIL processes that SS, SD and ST processes exist in the project management domain and are intended to assist the organization to \"<a href=\"/pmway/?slide=7\" target=\"_blank\">mind the gap\" / \"avoid getting stuck in the tar pit.\"</a><br>
\t\t\t\t\t\t\t\tIn
\t\t\t\t\t\t\t\tessence (via
\t\t\t\t\t\t\t\tthe project) you are &quot;<a href=\"/vmodel\" target=\"_blank\">jumping a gap</a>&quot; from
\t\t\t\t\t\t\t\tone baseline to a new (improved) baseline which import, if lost, means that the organization essentially will surely get stuck (lost) in the tar pit.<br><br>Also, from a
\t\t\t\t\t\t\t\tP3O perspective the project can be run alone or
\t\t\t\t\t\t\t\tas an essential building block of Portfolio's and
\t\t\t\t\t\t\t\tPrograms.<br><br>And from the perspective of the project
\t\t\t\t\t\t\t\titself, scheduled TAsks (Time Asks) are the essence
\t\t\t\t\t\t\t\tof project management.&nbsp; <br>(This truth is
\t\t\t\t\t\t\t\tfound in <a href=\"/\" target=\"_blank\">processes 4.2, 6.5, 4.3, 4.5
\t\t\t\t\t\t\t\tin the PMBOK 6 Dashboard</a>.&nbsp;
\t\t\t\t\t\t\t\tCan you
\t\t\t\t\t\t\t\tsee it?)</p>            </div>
            <div class=\"card-footer\">

            </div>
        </div>
    </div>
</div>
<br>
<br>

<div align=\"center\">





<button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapsesa\" aria-expanded=\"false\" aria-controls=
        \"collapsesa\">PMWay Opinion:<br>South Africa's
Government<br>without Governance <br>operating @ CM L ZERO
</button>

<div class=\"collapse\" id=\"collapsesa\">
    <div class=\"container\">
        <div class=\"card text-center\">
<h5 class=\"card-header\" align=\"center\">What follows is extremely concerning.<br>
Can you see it?</h5>
            <div class=\"card-body text-center\">

            <p align=\"center\"><img class=\"img-fluid\" src=\"/images/communismnutshell.jpg\"></p>
<p align=\"left\">As part of my MSC Dissertation  I was especially inspired by the idea of the Capability Maturity levels as a way to install governance and professionalism in a New South Africa; clearly headed in the wrong direction.<br>
Click the image below and see if you agree with the opinion and what this means for the
future of the Rainbow Nation envisaged by Nelson Mandela (and the many
liberal supporters; of the vision who love South Africa)
&quot;Captured&quot; and &quot;Junked&quot; by a Communist Government with Absolutely No Clue.&nbsp; <br>
Note:&nbsp; As opinion is played with in the PMWay sandbox, these are rushed
into creation as visual concepts.&nbsp; I.e. a picture often speaks a
thousand words.&nbsp; If you do not appreciate this approach or what is being
said (to get at the truth of the problem and solution) please, rather, do not enter the sandbox.</p>
<p align=\"center\"><a href=\"/home/zaprobsol\" target=\"_blank\" title=\"Unethical Communists with Absolutely No Clue!.\"><img alt=\"\" class=\"img-fluid\" src=\"/images/teardroppigeoncommie.png\" onmouseover=\"this.src='/images/lordhelpussmall.jpg'\" onmouseout=\"this.src='/images/teardroppigeoncommie.png'\"></a></p>
<p>I.e. find <a href=\"/home/carousel?slide=4\" target=\"_blank\">\"Capability Maturity Level ZERO here</a> to place where we would find this type of behaviour as a basis to start repair work.</p>
                                                     <br>





            </div>
            <div class=\"card-footer\">

            </div>
        </div>
    </div>
</div>
<br>

<br>




<li><div align=\"left\"><a name=\"sa\"></a><p align=\"left\">PMWay explains
\t\t\t\t\t\t\t\ta sure way to implement process
\t\t\t\t\t\t\t\timprovements for higher Capability Maturity levels
\t\t\t\t\t\t\t\tto increase Productivity
\t\t\t\t\t\t\t\tand Quality.<br>At the same time focus on process improvements will reduce Risk, Rework and Waste!<br><a href=\"/pmway/?slide=4\" target=\"_blank\">Capability Maturity Level 2 (CM
\t\t\t\t\t\t\t\tL2) is all about Project Management processes</a>.&nbsp;
\t\t\t\t\t\t\t\tCM L2 automatically installs &quot;<a href=\"/pmway/?slide=2\" target=\"_blank\">Good
\t\t\t\t\t\t\t\tGovernance</a>.<br>The ideas of how to operate at CM L2+ investigated here (<a href=\"/images/mastersdissertationmodel20200201.png\" target=\"_blank\">summarized in this model)</a> are applicable wherever Quality and Productivity improvements (and a reduction of \"<a href=\"/homeviewpdf/resources/chaos-report.pdf\" target=\"_blank\">the chaos</a>\") are the goal.</p></div></li>

<!--<br>
\t<a href=\"/home/southafrica\" target=\"_blank\"><img alt=\"failed state\" src=\"/images/safailedstatesmall.png\">Concerned
\tSouth African Citizens click here</a> for some hard hitting analysis (using the knowledge and technology of PMWay) of South Africa under our current government.<br>
\tThe focus is on the urgent need to install Governance in order to avoid a
\tfailed state.<br>Note:  A disclaimer applies.</p>--><li>
                               <div>
                                    <p style=\"text-align:left\">The Project Management Body of Knowledge
                                        version 6 Dashboard (<a href=\"/\" target=\"_blank\">the
\t\t\t\t\t\t\t\t\tmatrix / asset found on the PMWay home page</a>) is:</p>

                                    <p align=\"center\"><span><em>\"the beating
                    heart (as primal source and power center)</em></span><br></p>
                                </div>

                                <div style=\"text-align:center\">
                                    <img class=\"img-fluid\" id=\"heart\" alt=\"\" height=\"82\" src=
                                    \"/images/beatingheart.gif\" width=\"60\" title=\"Use you mouse and drag the heart around.  Notice that when all is said and done, getting to the heart of project management, to do it right you will need to return back to the processes found in the PMBOK Dashboard\" ><br>
                                </div>

                                <div>
                                    <p align=\"center\"><span><i>for the collated
                    knowledge found in the PMBOK&quot;</i></span></p>
\t\t\t\t\t\t\t\t\t</div>

                                <p align=\"left\">Using this Dashboard you can easily access all the
                                    PMBOK Processes, and thereby, each of their <strong>*ITTO's</strong>
                                    found within the Guide.&nbsp;</p>

                                <table border=\"1\" style=\"width: 100%\" cellpadding=\"10\">
                                    <tr>
                                        <td>
                                            <p style=\"text-align: left\"><strong>*ITTO's are:</strong> <em><strong>Process Inputs, Tools
                                                    and Techniques and Outputs</strong></em> - for each of the 49
                                            PMBOK processes on the Dashboard.<br>
                                            Processes (and their ITTO's) are used from the beginning
                                            (INITIATION) to the end (CLOSURE) of a project (cross referenced
                                            by Knowledge Area), at each step of your project management
                                            journey and form a well defined method (you can think recipe with
                                            essential ingredients) for project management success.</p>

                                            <table border=\"1\" style=\"width: 100%\" cellpadding=\"10\" align=\"left\">
                                                <tr>
                                                    <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p align=\"left\"><strong><em>Note:</em><br>When logged in:</strong> All of the 49 processes and their
                                                        ITTO's are accessible via drilldown off the PMBOK
                                                        Dashboard.<br><strong>When logged in:</strong> PMWay has a teaching section
                                                        specifically focused on how to use the
\t\t\t\t\t\t\t\t\t\t\t\t\tDashboard (with visual
                                                        teaching overlay over the
\t\t\t\t\t\t\t\t\t\t\t\t\tDashboard) showing you exactly how
                                                        to use this asset to run projects successfully at Capability
                                                        Maturity level 2.<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>When logged in:
\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>&nbsp;Many web pages
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/cmmi\" target=\"_blank\">consolidate
\t\t\t\t\t\t\t\t\t\t\t\t\tPMWay detail into a possible
\t\t\t\t\t\t\t\t\t\t\t\t\tstrategy / vision to achieve
\t\t\t\t\t\t\t\t\t\t\t\t\tCapability Maturity L2</a> which you are welcome
\t\t\t\t\t\t\t\t\t\t\t\t\tto peruse. I.e. while agile
\t\t\t\t\t\t\t\t\t\t\t\t\tis often touted as the
\t\t\t\t\t\t\t\t\t\t\t\t\tpanacea, PMWay knows that
\t\t\t\t\t\t\t\t\t\t\t\t\tagile (or any project
\t\t\t\t\t\t\t\t\t\t\t\t\tmethodology),
\t\t\t\t\t\t\t\t\t\t\t\t\tbadly run at CM L1, does
\t\t\t\t\t\t\t\t\t\t\t\t\tnot have what it takes to
\t\t\t\t\t\t\t\t\t\t\t\t\teliminate the
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/homeviewpdf/resources/chaosreport.pdf\" target=\"_blank\">chaos</a>.<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>PMWay
\t\t\t\t\t\t\t\t\t\t\t\t\tmembers (which is
                                                            optional):</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\tcan use elevated access and
\t\t\t\t\t\t\t\t\t\t\t\t\tdrill down deeper into the
\t\t\t\t\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t\t\t\t\tto the PMBOK
\t\t\t\t\t\t\t\t\t\t\t\t\tGuide as, under my auspices,
\t\t\t\t\t\t\t\t\t\t\t\t\tI am thus enabled by you to
\t\t\t\t\t\t\t\t\t\t\t\t\tassist you (via your registered email)
\t\t\t\t\t\t\t\t\t\t\t\t\tas a student seeking PMP,
\t\t\t\t\t\t\t\t\t\t\t\t\tACP or
\t\t\t\t\t\t\t\t\t\t\t\t\tCAPM exam preparation advice.  I can also assist you in a general consultative capacity to achieve project
\t\t\t\t\t\t\t\t\t\t\t\t\tand process management excellence.
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>For the scope of my consulting advice
\t\t\t\t\t\t\t\t\t\t\t\t\t(and assistance with PMWay
\t\t\t\t\t\t\t\t\t\t\t\t\tresources) you are
\t\t\t\t\t\t\t\t\t\t\t\t\tinvited to <a href=\"/home/carousel?slide=1\" target=\"_blank\">\"join the dots\" from the home page</a>.  <br>Click \"<a href=\"/blog/contactpmway.php\" target=\"_blank\">Contact</a>\" on the menu bar at the top of the home page when registered if you feel the need to sign up.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                            </li>

                            <li>
                                <p align=\"left\">Using the functionality of the PMBOK Dashboard in
                                    particular means you can <strong>use</strong>,
                                    <strong>practice</strong> and <strong>improve</strong> your grasp of
                                    the PMBOK version 6 processes (along with the associated ITTO's of
                                    each), as essential knowledge needed to:<br></p>

                                <ol>
                                    <li style=\"text-align:left\">Pass the Project Management Institute
                                        (PMI) Certified Associate in Project Management (CAPM) exam or,<br><br></li>
\t\t\t\t\t\t\t\t\t<li style=\"text-align:left\">Pass the Agile
\t\t\t\t\t\t\t\t\tCertified Practitioner (PMI - ACP) exam or, <br>
                                        <br></li>

                                    <li style=\"text-align:left\">Pass the PMI flagship certification - the
                                        Project Management Professional (PMP) exam.&nbsp;<br>
                                        <br></li>

                                    <li style=\"text-align:left\">Gain a solid knowledge of project
                                        management processes, their ITTOS, their implantation order so, with
                                        common rules of the game mutually agreed and understood, you (and
                                        team) can run projects better.&nbsp; You can also use the Process
                                        Selector Wheel to check if you know what Process Number applies to
                                        what Process.&nbsp; This is a fun way to get to know and learn the
                                        Processes.<br>
                                        <br></li>

                                    <li style=\"text-align:left\">
\t\t\t\t\t\t\t\t\tSigned up
\t\t\t\t\t\t\t\t\tmembers can use the Notes Section provided below each
                                        process in PMWay to log all your ideas to <strong>tailor</strong>
                                        these processes. <br>The art of effective tailoring within the PMBOK is
                                        found within the processes and knowing what and why ITTO's should be
                                        included in your project (to what detail) or why not. The ability to
                                        log these decisions (from an audit perspective) is a key and crucial
                                        requirement of a project management professional which is facilitated
                                        by these notes!<br>
                                        To this end we must always ensure that projects are kept sweet and
                                        simple, lean and agile, and that an achievable set of goals for the
                                        team is rapidly created for them to rally behind and deliver
                                        against.<br>
                                        <strong>I.e. While (when) BEST PRACTICE is understood, BEST PRACTICAL (from
                                            an agile and lean perspective) can be better!</strong><br>
                                        <br></li>
                                         <li style=\"text-align:left\">As PMWay is
\t\t\t\t\t\t\t\t\t\t all about process improvement be aware
\t\t\t\t\t\t\t\t\t\t that the above may need processes from
\t\t\t\t\t\t\t\t\t\t other areas in order to be effective.
\t\t\t\t\t\t\t\t\t\t An example is ITIL and COBIT.&nbsp;
\t\t\t\t\t\t\t\t\t\t <a href=\"/homeviewpdf/resources/itilagiledevops.pdf\" target=\"_blank\">Click here</a> for some input regarding the importance of ITIL to ensure Agile delivers.  PMWay gives process improvement advice for ITIL, COBIT and a number of other process improvement areas as is shown in the Standards Frameworks Methodologies Landscape found if you <a href=\"/pmway/?slide=2\" target=\"_blank\">click here</a>.<br><br> </li>

                                </ol>
                            </li>

                            <li>
                                <p align=\"left\">And, if you plan to use agile, you can now run these
                                    projects underpinned by the logic of the 'fully agile compliant' PMBOK
\t\t\t\t\t\t\t\t6 Dashboard
                                    above.&nbsp;
                                    <br><br>It is a fact, in the sixth edition of the PMBOK&#174; Guide, each knowledge
                                    area contains a new section entitled <strong>Approaches for Agile,
                                        Iterative and Adaptive Environments</strong>.&nbsp;
\t\t\t\t\t\t\t\tFor a specialized qualification in agile
\t\t\t\t\t\t\t\tconsider the <strong>PMI Agile Certified Practitioner
\t\t\t\t\t\t\t\t(PMI-ACP)</strong>.&nbsp; This formally recognizes
\t\t\t\t\t\t\t\tyour knowledge of agile principles and your
\t\t\t\t\t\t\t\tskill with agile techniques (including XP,
\t\t\t\t\t\t\t\tScrum, Lean and KanBan etc.).<br>If you think that the PMBOK is
\t\t\t\t\t\t\t\toutdated because it is &quot;waterfall,&quot; I challenge
\t\t\t\t\t\t\t\tyou to work through the PMBOK
\t\t\t\t\t\t\t\t&quot;How To&quot; (from the main menu).  If you do this then I believe you will
\t\t\t\t\t\t\t\tcome to understand that your assumptions are incorrect and do not fully grasp all the
\t\t\t\t\t\t\t\tpertinent issues.  To illustrate why I say this
\t\t\t\t\t\t\t\ttake the pin test now and ask yourself
\t\t\t\t\t\t\t\thonestly:<br>
\t\t\t\t\t\t\t\t<a href=\"/cmmi\" title=\"Use your mouse to drag me around for fun.  Then click me if you want to get serious and Pin down your Capability Maturity level now!\" target=\"_blank\"><u><i>
\t\t\t\t\t\t\t\twhere is your game really at</i></u>?<img alt=\"pin\" id=\"pin\" class=\"img-fluid\" src=\"/images/pin40small.png\" ></a>
\t\t\t\t\t\t\t\t<br><br>


                              </li>

                              </ul>


                             <p align=\"left\"><a href=\"/home/pmbokversix\" target=\"_blank\">
\t\t\t\t\t\t\t\tClick here</a> for the changes in PMBOK version 6 when compared to PMBOK version 5.</p>
\t\t\t\t\t\t\t\t<br>


            </div>
            <div class=\"card-footer\">

            </div>
        </div>
    </div>
</div>

<br>
<br>
<!------------------------------------------------
<h5 align=\"center\">Bottom Line...</h5>
<p align=\"center\"> <img class=\"img-fluid\" src=\"/images/wall and resources.jpg\"></p>
-------------------------------------------------------------------->



\t\t\t\t\t\t\t    <br>
\t\t\t\t\t\t\t    <br>

            </div>


<script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>

<script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">

<script>
  \$(document).ready(function () {
    \$(\"#pin, #heart, #game\").draggable({revert:\"invalid\"});
    \$(\"#target\").droppable({
      greddy: true,
      tolerance: 'touch',
      drop: function (event, ui) {
        ui.draggable.draggable('option', 'revert', 'true');
        alert(\"OK Knowing where you are is the first step to improvement!\");

      }
    });




  });




</script>


";
        }
        // line 440
        yield "

";
        // line 442
        if ((($tmp =  !($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 443
            yield "
<div class=\"container\" align=\"center\">
\t<h3>PMWay web is an ideas sandbox</h3>
\t<p align=\"center\"><font size=\"-1\"><a href=\"/register\" target=\"_blank\"><u>Register</u></a>, <a href=\"/login\" target=\"_blank\"><u>Log in</u></a> and then click the sandbox below for more information on why PMWay</font></p>





<button class=\"btn align-center clearfix\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsewhypmway\" aria-expanded=\"false\" aria-controls=\"collapseperformancestats\"><img class=\"img-fluid\" src=\"/images/sandpitwithoutshadow.png\" onmouseover=\"this.src='/images/sandpit1.png'\" onmouseout=\"this.src='/images/sandpitwithoutshadow.png'\" title=\"Click here if you want to know Why PMWay?\"><br><br>

<!--Click the sandbox for ways to up Project and Process skills and <a href=\"/gamestats\" target=\"_blank\">game stats</a>.<!-----------------------------------------------------------------
<br>PMWay also suggests a \"mind set change\" that is urgently required,<br>if the goal for South Africa is a prosperous future for our Rainbow Nation.</button>
<br>----->



</button>
<br>

<div class=\"collapse\" id=\"collapsewhypmway\">
    <div class=\"container\">
        <div class=\"card text-center\">
<h5 class=\"card-header\" align=\"center\">PMWay:  The Way to Project and Process Management
    Excellence</h5>

            <div class=\"card-body text-center\">
<h5 align=\"left\">Please <a href=\"/register\" target=\"_blank\"><u>Register</u></a>, <a href=\"/login\" target=\"_blank\"><u>Log in</u></a> for more detailed information about why PMWay</h5><hr> <p align=\"left\">In essence know that PMWay is an ideas web site I started in 2009.  <br><br>Recently I expanded it to support my Master's of Science research.  <br>Research focus included software engineering, the prople-process-technology triad and ways (project and other methodologies) to improve governance and execution while implementing capability maturity levels.<br>
<a href=\"/homeviewpdf/resources/itilfouroverview.pdf\" target=\"_blank\">This presentation</a> gives an overview of some of the ideas I have been playing with.  These are expanded <a href=\"/pmway/?slide=1\" target=\"_blank\">here if you connect the dots.</a>
<br>
<br>Be aware that in a short time this web site has grown rapidly.  <br>It is now over 800 gigabytes in size, filled with thousands of pages and resources as I proceeded with my investigation.
<br><br>It is worth knowing that <b><a href=\"/home/nottwentyfourseven\"><u>PMWay is not available 24/7</u></a></b>.  <br>
Due to high cost involved in hosting a large web site I decided to host PMWay myself.
<br>As such, if I have my server up and running the site will be visible to you.<br>
This mode of operation is by design and is suitable for my needs as I will ensure PMWay is up when needed.<br>If you need me to bring it up for you please contact me.</p>

<h5 align=\"left\">Ways you can connect with me:</h5>
<ul>
<li align=\"left\"><a href=\"https://pmway.hopto.org\">Click on the envelope on the menu at the top of my home page and fire off a message in the form</a>.</li>
<li align=\"left\"><a href=\"https://pmway.hopto.org/cv/index.html\">Click \"Contact\" on the menu at the top of my portfolio page</a>.</li>
<li align=\"left\">You are welcome to email me direct <a href=\"mailto:markjc@mweb.co.za\">markjc@mweb.co.za</a>.</li>
</ul>
<h5 align=\"left\">Keep well.</h5>





            </div>
            <div class=\"card-footer\">

            </div>
        </div>
    </div>
</div>

<br>
<br>
<!------------------------------------------------
<h5 align=\"center\">Bottom Line...</h5>
<p align=\"center\"> <img class=\"img-fluid\" src=\"/images/wall and resources.jpg\"></p>
-------------------------------------------------------------------->



\t\t\t\t\t\t\t    <br>
\t\t\t\t\t\t\t    <br>

            </div>


<script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>

<script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">

<script>
  \$(document).ready(function () {
    \$(\"#pin, #heart, #game\").draggable({revert:\"invalid\"});
    \$(\"#target\").droppable({
      greddy: true,
      tolerance: 'touch',
      drop: function (event, ui) {
        ui.draggable.draggable('option', 'revert', 'true');
        alert(\"OK Knowing where you are is the first step to improvement!\");

      }
    });




  });




</script>

         ";
        }
        // line 543
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/about.twig";
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
        return array (  626 => 543,  524 => 443,  522 => 442,  518 => 440,  81 => 5,  79 => 4,  72 => 3,  53 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.twig' %}
{% block title %} {% if not user %}PMWay{% endif %} {% if user %}Why PMWay{% endif %}  {% endblock %}
{% block body %}
{% if user %}

<div class=\"container\" align=\"center\">
<h3>PMWay web is an ideas sandbox</h3>

<p align=\"center\"><font size=\"-1\">Click the sandbox below for more information about this web site</font></p>



<button class=\"btn align-center clearfix\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsewhypmway\" aria-expanded=\"false\" aria-controls=\"collapseperformancestats\"><img class=\"img-fluid\" src=\"/images/sandpitwithoutshadow.png\" onmouseover=\"this.src='/images/sandpit1.png'\" onmouseout=\"this.src='/images/sandpitwithoutshadow.png'\" title=\"Click here if you want to know Why PMWay?\"><br><br>

<!--Click the sandbox for ways to up Project and Process skills and <a href=\"/gamestats\" target=\"_blank\">game stats</a>.<!-----------------------------------------------------------------
<br>PMWay also suggests a \"mind set change\" that is urgently required,<br>if the goal for South Africa is a prosperous future for our Rainbow Nation.</button>
<br>----->



</button>
<br>

<div class=\"collapse\" id=\"collapsewhypmway\">
    <div class=\"container\">
        <div class=\"card text-center\">
<h5 class=\"card-header\" align=\"center\">More Information About PMWay?</h5>
            <div class=\"card-body text-center\">
<h3 align=\"left\">PMWay:  The Way to Project and Process Management
Excellence</h3> <br>

                       <ul>
                            <li>
                                <p align=\"left\">I built PMWay to facilitate the pinning down of knowledge (a store of assets) pertaining to Project and Process Management.  The <a href=\"/pmway/?slide=2\" target=_blank\">link here about the Frameworks landscape</a> gives a quick overview of PMWay's scope.  Over time the web site has been converted to underpin an ICT
\t\t\t\t\t\t\t\tMSc. Dissertation.&nbsp; <br>The use of the
\t\t\t\t\t\t\t\tPMBOK as a foundation in PMWay is based on&nbsp;my
\t\t\t\t\t\t\t\tappreciation of the fact that the PMBOK has
\t\t\t\t\t\t\t\tstatus as a Standard&nbsp;<a href=\"/pmway/?slide=2\" title=\"The Standards / Frameworks Landscape slide #2\" target=\"_blank\">grouped along with the ANSI, ISO and BS
\t\t\t\t\t\t\t\tStandards</a>.
<br>




<div align=\"center\">

<br><button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapseopinion\" aria-expanded=\"false\" aria-controls=
        \"collapseopinion\">PMWay Opinion:<br>
About Agile @ CM L1
</button>

<div class=\"collapse\" id=\"collapseopinion\">
    <div class=\"container\">
        <div class=\"card text-center\">
<h5 class=\"card-header\" align=\"center\">If you have a different (better) understanding <a href=\"/contacts/new\" target=\"_blank\">please send it to PMWay</a></h5>
            <div class=\"card-body text-center\">
            <p align=\"left\">The above said, I am
\t\t\t\t\t\t\t\tconstantly amazed by many I speak to who totally
\t\t\t\t\t\t\t\tdisregard the above &quot;state of affairs,&quot;
\t\t\t\t\t\t\t\twhile
\t\t\t\t\t\t\t\tfanatically insisting on hyping on and on about agile!&nbsp;
\t\t\t\t\t\t\t\tOne person said to me, when I explained that
\t\t\t\t\t\t\t\tagile was not on the above <a href=\"/pmway/?slide=2\" title=\"The Standards / Frameworks Landscape slide #2\" target=\"_blank\">Standards, Frameworks
\t\t\t\t\t\t\t\tmatrix</a>: &quot;Yes but how old is your diagram?&quot;&nbsp;
\t\t\t\t\t\t\t\tI thought to myself, &quot;<a href=\"/images/birdbrain.jpg\" target=\"_blank\">Your point taken and rejected</a>, my point (<a href=\"/pmway/?slide=2\" title=\"The Standards / Frameworks Landscape slide #2\" target=\"_blank\">if you look carefully at the Standards Frameworks Landscape</a>) totally
\t\t\t\t\t\t\t\tmisunderstood by you!\"<br><br>Don't get me
\t\t\t\t\t\t\t\twrong. I love agile and especially Scrum:&nbsp;
\t\t\t\t\t\t\t\tBut only If well run using the Scrum processes that are defined and operate at CM Level 2+!<br>(<a href=\"/\" target=\"_blank\" title=\"The PMBOK Dashboard clearly shows the Knowledge Areas that need monitoring and control for project success\">With
\t\t\t\t\t\t\t\tlapsed traditional project management controls</a>
\t\t\t\t\t\t\t\tthat very often occur with agile,
\t\t\t\t\t\t\t\tit will have to be
\t\t\t<a href=\"/scrumrca#indexc\" target=\"_blank\"><u><b>run very well</b></u></a>
\t\t\t(regularly <a href=\"/workingsoftware\" target=\"_blank\">demonstrating and releasing working software</a>) to mitigate serious risks
\t\t\t\t\t\t\t\tassociated with agile's loose approach!) ELSE AGILE IS NO BETTER THAN BADLY (CM L1) RUN TRADITIONAL PROJECT MANAGEMENT!
\t\t\t\t\t\t\t\t<a href=\"/pmway/?slide=12\" target=\"_blank\"> <br>
\t\t\t\t\t\t\t\t<br>A deeper look at the section
\t\t\t\t\t\t\t\tin PMWay on Scrum here
\t\t\t\t\t\t\t</a> will
\t\t\t\t\t\t\t\tclearly explain why processes should be
\t\t\t\t\t\t\t\tcorrectly used at Capability
\t\t\t\t\t\t\t\tMaturity Level 2+ for success; which (if you
\t\t\t\t\t\t\t\tjoint the dots at the bottom of the home page)
\t\t\t\t\t\t\t\twill also explain what
\t\t\t\t\t\t\t\tthis web site is all about.&nbsp; <br>Operating at
\t\t\t\t\t\t\t\tCapability Maturity Level 1, especially with
\t\t\t\t\t\t\t\tagile, must surely be, as I often see, from a
\t\t\t\t\t\t\t\tproject management perspective, a recipe for
\t\t\t\t\t\t\t\tdisaster!<br>Following the SBOK (Scrum Body
\t\t\t\t\t\t\t\tof Knowledge) processes more closely on the
\t\t\t\t\t\t\t\tother hand will greatly assist in improving the
\t\t\t\t\t\t\t\tagile (Scrum) project's success rate!&nbsp;
\t\t\t\t\t\t\t\tAppreciating the PMBOK processes (mindful also
\t\t\t\t\t\t\t\tof joining all the dots found on the home page)
\t\t\t\t\t\t\t\tas a \"best way to run projects,\" when using
\t\t\t\t\t\t\t\tagile must further reduce risk and waste while
\t\t\t\t\t\t\t\timproving productivity and quality.<br>Take
\t\t\t\t\t\t\t\tthe PMWay&nbsp;<a href=\"/pin\" target=\"_blank\" >pin test</a>
\t\t\t\t\t\t\t\tnow if you want to ascertain your application of project method and associated risk exposure.<br>
\t\t\t\t\t\t\t\t<br>This image
\t\t\t\t\t\t\t\tbelow, from the PRINCE2 agile manual, in my mind
\t\t\t\t\t\t\t\tsuccinctly illustrates that while agility
\t\t\t\t\t\t\t\tis awesome, it must not come about at the expense of well engineered
\t\t\t\t\t\t\t\tsoftware solutions.<br>
\t\t\t\t\t\t\t\t<a href=\"/agileisdead\" target=\"_blank\" title=\"Death of Agile?\"><img alt=\"PRINCE2 Agile\" class=\"img-fluid\" src=\"/images/p2afighter.png\"></a><br>(If interested click the image
\t\t\t\t\t\t\t\tabove to jump to an
\t\t\t\t\t\t\t\texcellent talk about the death of Agile (with a
\t\t\t\t\t\t\t\tcapital A); from one of the guys who attended
\t\t\t\t\t\t\t\tSnowbird in Utah and gave us <a href=\"/agile?slide=12\" target=\"_blank\" title=\"Click here for the Agile Manifesto\">the
\t\t\t\t\t\t\t\tagile manifesto</a>)<br><br>Therefore, because I appreciate the PMBOK's value to assist me to run my Programs and Projects
                                    better, in
                                    the interest of project management process improvement, you are
                                    welcome to use the assets you find here.<br><br>
\t\t\t\t\t\t\t\t<em><strong>Note:&nbsp; </strong></em>Unlike Business As Usual (BAU) a
\t\t\t\t\t\t\t\tproject is a temporary undertaking!&nbsp; <br>Again I am consistently amazed at companies who bundle what are essentially project management processes into BAU!?<br>
\t\t\t\t\t\t\t\tThey also appear to be bundling
\t\t\t\t\t\t\t\tthe SS, SD and ST ITIL processes into BAU
\t\t\t\t\t\t\t\t(essentially SO) stating that DevOps is a replacement for ITIL best practice!?<br>
\t\t\t\t\t\t\t\tIt is obvious to anyone who understand the ITIL processes that SS, SD and ST processes exist in the project management domain and are intended to assist the organization to \"<a href=\"/pmway/?slide=7\" target=\"_blank\">mind the gap\" / \"avoid getting stuck in the tar pit.\"</a><br>
\t\t\t\t\t\t\t\tIn
\t\t\t\t\t\t\t\tessence (via
\t\t\t\t\t\t\t\tthe project) you are &quot;<a href=\"/vmodel\" target=\"_blank\">jumping a gap</a>&quot; from
\t\t\t\t\t\t\t\tone baseline to a new (improved) baseline which import, if lost, means that the organization essentially will surely get stuck (lost) in the tar pit.<br><br>Also, from a
\t\t\t\t\t\t\t\tP3O perspective the project can be run alone or
\t\t\t\t\t\t\t\tas an essential building block of Portfolio's and
\t\t\t\t\t\t\t\tPrograms.<br><br>And from the perspective of the project
\t\t\t\t\t\t\t\titself, scheduled TAsks (Time Asks) are the essence
\t\t\t\t\t\t\t\tof project management.&nbsp; <br>(This truth is
\t\t\t\t\t\t\t\tfound in <a href=\"/\" target=\"_blank\">processes 4.2, 6.5, 4.3, 4.5
\t\t\t\t\t\t\t\tin the PMBOK 6 Dashboard</a>.&nbsp;
\t\t\t\t\t\t\t\tCan you
\t\t\t\t\t\t\t\tsee it?)</p>            </div>
            <div class=\"card-footer\">

            </div>
        </div>
    </div>
</div>
<br>
<br>

<div align=\"center\">





<button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapsesa\" aria-expanded=\"false\" aria-controls=
        \"collapsesa\">PMWay Opinion:<br>South Africa's
Government<br>without Governance <br>operating @ CM L ZERO
</button>

<div class=\"collapse\" id=\"collapsesa\">
    <div class=\"container\">
        <div class=\"card text-center\">
<h5 class=\"card-header\" align=\"center\">What follows is extremely concerning.<br>
Can you see it?</h5>
            <div class=\"card-body text-center\">

            <p align=\"center\"><img class=\"img-fluid\" src=\"/images/communismnutshell.jpg\"></p>
<p align=\"left\">As part of my MSC Dissertation  I was especially inspired by the idea of the Capability Maturity levels as a way to install governance and professionalism in a New South Africa; clearly headed in the wrong direction.<br>
Click the image below and see if you agree with the opinion and what this means for the
future of the Rainbow Nation envisaged by Nelson Mandela (and the many
liberal supporters; of the vision who love South Africa)
&quot;Captured&quot; and &quot;Junked&quot; by a Communist Government with Absolutely No Clue.&nbsp; <br>
Note:&nbsp; As opinion is played with in the PMWay sandbox, these are rushed
into creation as visual concepts.&nbsp; I.e. a picture often speaks a
thousand words.&nbsp; If you do not appreciate this approach or what is being
said (to get at the truth of the problem and solution) please, rather, do not enter the sandbox.</p>
<p align=\"center\"><a href=\"/home/zaprobsol\" target=\"_blank\" title=\"Unethical Communists with Absolutely No Clue!.\"><img alt=\"\" class=\"img-fluid\" src=\"/images/teardroppigeoncommie.png\" onmouseover=\"this.src='/images/lordhelpussmall.jpg'\" onmouseout=\"this.src='/images/teardroppigeoncommie.png'\"></a></p>
<p>I.e. find <a href=\"/home/carousel?slide=4\" target=\"_blank\">\"Capability Maturity Level ZERO here</a> to place where we would find this type of behaviour as a basis to start repair work.</p>
                                                     <br>





            </div>
            <div class=\"card-footer\">

            </div>
        </div>
    </div>
</div>
<br>

<br>




<li><div align=\"left\"><a name=\"sa\"></a><p align=\"left\">PMWay explains
\t\t\t\t\t\t\t\ta sure way to implement process
\t\t\t\t\t\t\t\timprovements for higher Capability Maturity levels
\t\t\t\t\t\t\t\tto increase Productivity
\t\t\t\t\t\t\t\tand Quality.<br>At the same time focus on process improvements will reduce Risk, Rework and Waste!<br><a href=\"/pmway/?slide=4\" target=\"_blank\">Capability Maturity Level 2 (CM
\t\t\t\t\t\t\t\tL2) is all about Project Management processes</a>.&nbsp;
\t\t\t\t\t\t\t\tCM L2 automatically installs &quot;<a href=\"/pmway/?slide=2\" target=\"_blank\">Good
\t\t\t\t\t\t\t\tGovernance</a>.<br>The ideas of how to operate at CM L2+ investigated here (<a href=\"/images/mastersdissertationmodel20200201.png\" target=\"_blank\">summarized in this model)</a> are applicable wherever Quality and Productivity improvements (and a reduction of \"<a href=\"/homeviewpdf/resources/chaos-report.pdf\" target=\"_blank\">the chaos</a>\") are the goal.</p></div></li>

<!--<br>
\t<a href=\"/home/southafrica\" target=\"_blank\"><img alt=\"failed state\" src=\"/images/safailedstatesmall.png\">Concerned
\tSouth African Citizens click here</a> for some hard hitting analysis (using the knowledge and technology of PMWay) of South Africa under our current government.<br>
\tThe focus is on the urgent need to install Governance in order to avoid a
\tfailed state.<br>Note:  A disclaimer applies.</p>--><li>
                               <div>
                                    <p style=\"text-align:left\">The Project Management Body of Knowledge
                                        version 6 Dashboard (<a href=\"/\" target=\"_blank\">the
\t\t\t\t\t\t\t\t\tmatrix / asset found on the PMWay home page</a>) is:</p>

                                    <p align=\"center\"><span><em>\"the beating
                    heart (as primal source and power center)</em></span><br></p>
                                </div>

                                <div style=\"text-align:center\">
                                    <img class=\"img-fluid\" id=\"heart\" alt=\"\" height=\"82\" src=
                                    \"/images/beatingheart.gif\" width=\"60\" title=\"Use you mouse and drag the heart around.  Notice that when all is said and done, getting to the heart of project management, to do it right you will need to return back to the processes found in the PMBOK Dashboard\" ><br>
                                </div>

                                <div>
                                    <p align=\"center\"><span><i>for the collated
                    knowledge found in the PMBOK&quot;</i></span></p>
\t\t\t\t\t\t\t\t\t</div>

                                <p align=\"left\">Using this Dashboard you can easily access all the
                                    PMBOK Processes, and thereby, each of their <strong>*ITTO's</strong>
                                    found within the Guide.&nbsp;</p>

                                <table border=\"1\" style=\"width: 100%\" cellpadding=\"10\">
                                    <tr>
                                        <td>
                                            <p style=\"text-align: left\"><strong>*ITTO's are:</strong> <em><strong>Process Inputs, Tools
                                                    and Techniques and Outputs</strong></em> - for each of the 49
                                            PMBOK processes on the Dashboard.<br>
                                            Processes (and their ITTO's) are used from the beginning
                                            (INITIATION) to the end (CLOSURE) of a project (cross referenced
                                            by Knowledge Area), at each step of your project management
                                            journey and form a well defined method (you can think recipe with
                                            essential ingredients) for project management success.</p>

                                            <table border=\"1\" style=\"width: 100%\" cellpadding=\"10\" align=\"left\">
                                                <tr>
                                                    <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p align=\"left\"><strong><em>Note:</em><br>When logged in:</strong> All of the 49 processes and their
                                                        ITTO's are accessible via drilldown off the PMBOK
                                                        Dashboard.<br><strong>When logged in:</strong> PMWay has a teaching section
                                                        specifically focused on how to use the
\t\t\t\t\t\t\t\t\t\t\t\t\tDashboard (with visual
                                                        teaching overlay over the
\t\t\t\t\t\t\t\t\t\t\t\t\tDashboard) showing you exactly how
                                                        to use this asset to run projects successfully at Capability
                                                        Maturity level 2.<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>When logged in:
\t\t\t\t\t\t\t\t\t\t\t\t\t</strong>&nbsp;Many web pages
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/cmmi\" target=\"_blank\">consolidate
\t\t\t\t\t\t\t\t\t\t\t\t\tPMWay detail into a possible
\t\t\t\t\t\t\t\t\t\t\t\t\tstrategy / vision to achieve
\t\t\t\t\t\t\t\t\t\t\t\t\tCapability Maturity L2</a> which you are welcome
\t\t\t\t\t\t\t\t\t\t\t\t\tto peruse. I.e. while agile
\t\t\t\t\t\t\t\t\t\t\t\t\tis often touted as the
\t\t\t\t\t\t\t\t\t\t\t\t\tpanacea, PMWay knows that
\t\t\t\t\t\t\t\t\t\t\t\t\tagile (or any project
\t\t\t\t\t\t\t\t\t\t\t\t\tmethodology),
\t\t\t\t\t\t\t\t\t\t\t\t\tbadly run at CM L1, does
\t\t\t\t\t\t\t\t\t\t\t\t\tnot have what it takes to
\t\t\t\t\t\t\t\t\t\t\t\t\teliminate the
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/homeviewpdf/resources/chaosreport.pdf\" target=\"_blank\">chaos</a>.<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>PMWay
\t\t\t\t\t\t\t\t\t\t\t\t\tmembers (which is
                                                            optional):</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\tcan use elevated access and
\t\t\t\t\t\t\t\t\t\t\t\t\tdrill down deeper into the
\t\t\t\t\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t\t\t\t\tto the PMBOK
\t\t\t\t\t\t\t\t\t\t\t\t\tGuide as, under my auspices,
\t\t\t\t\t\t\t\t\t\t\t\t\tI am thus enabled by you to
\t\t\t\t\t\t\t\t\t\t\t\t\tassist you (via your registered email)
\t\t\t\t\t\t\t\t\t\t\t\t\tas a student seeking PMP,
\t\t\t\t\t\t\t\t\t\t\t\t\tACP or
\t\t\t\t\t\t\t\t\t\t\t\t\tCAPM exam preparation advice.  I can also assist you in a general consultative capacity to achieve project
\t\t\t\t\t\t\t\t\t\t\t\t\tand process management excellence.
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>For the scope of my consulting advice
\t\t\t\t\t\t\t\t\t\t\t\t\t(and assistance with PMWay
\t\t\t\t\t\t\t\t\t\t\t\t\tresources) you are
\t\t\t\t\t\t\t\t\t\t\t\t\tinvited to <a href=\"/home/carousel?slide=1\" target=\"_blank\">\"join the dots\" from the home page</a>.  <br>Click \"<a href=\"/blog/contactpmway.php\" target=\"_blank\">Contact</a>\" on the menu bar at the top of the home page when registered if you feel the need to sign up.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                            </li>

                            <li>
                                <p align=\"left\">Using the functionality of the PMBOK Dashboard in
                                    particular means you can <strong>use</strong>,
                                    <strong>practice</strong> and <strong>improve</strong> your grasp of
                                    the PMBOK version 6 processes (along with the associated ITTO's of
                                    each), as essential knowledge needed to:<br></p>

                                <ol>
                                    <li style=\"text-align:left\">Pass the Project Management Institute
                                        (PMI) Certified Associate in Project Management (CAPM) exam or,<br><br></li>
\t\t\t\t\t\t\t\t\t<li style=\"text-align:left\">Pass the Agile
\t\t\t\t\t\t\t\t\tCertified Practitioner (PMI - ACP) exam or, <br>
                                        <br></li>

                                    <li style=\"text-align:left\">Pass the PMI flagship certification - the
                                        Project Management Professional (PMP) exam.&nbsp;<br>
                                        <br></li>

                                    <li style=\"text-align:left\">Gain a solid knowledge of project
                                        management processes, their ITTOS, their implantation order so, with
                                        common rules of the game mutually agreed and understood, you (and
                                        team) can run projects better.&nbsp; You can also use the Process
                                        Selector Wheel to check if you know what Process Number applies to
                                        what Process.&nbsp; This is a fun way to get to know and learn the
                                        Processes.<br>
                                        <br></li>

                                    <li style=\"text-align:left\">
\t\t\t\t\t\t\t\t\tSigned up
\t\t\t\t\t\t\t\t\tmembers can use the Notes Section provided below each
                                        process in PMWay to log all your ideas to <strong>tailor</strong>
                                        these processes. <br>The art of effective tailoring within the PMBOK is
                                        found within the processes and knowing what and why ITTO's should be
                                        included in your project (to what detail) or why not. The ability to
                                        log these decisions (from an audit perspective) is a key and crucial
                                        requirement of a project management professional which is facilitated
                                        by these notes!<br>
                                        To this end we must always ensure that projects are kept sweet and
                                        simple, lean and agile, and that an achievable set of goals for the
                                        team is rapidly created for them to rally behind and deliver
                                        against.<br>
                                        <strong>I.e. While (when) BEST PRACTICE is understood, BEST PRACTICAL (from
                                            an agile and lean perspective) can be better!</strong><br>
                                        <br></li>
                                         <li style=\"text-align:left\">As PMWay is
\t\t\t\t\t\t\t\t\t\t all about process improvement be aware
\t\t\t\t\t\t\t\t\t\t that the above may need processes from
\t\t\t\t\t\t\t\t\t\t other areas in order to be effective.
\t\t\t\t\t\t\t\t\t\t An example is ITIL and COBIT.&nbsp;
\t\t\t\t\t\t\t\t\t\t <a href=\"/homeviewpdf/resources/itilagiledevops.pdf\" target=\"_blank\">Click here</a> for some input regarding the importance of ITIL to ensure Agile delivers.  PMWay gives process improvement advice for ITIL, COBIT and a number of other process improvement areas as is shown in the Standards Frameworks Methodologies Landscape found if you <a href=\"/pmway/?slide=2\" target=\"_blank\">click here</a>.<br><br> </li>

                                </ol>
                            </li>

                            <li>
                                <p align=\"left\">And, if you plan to use agile, you can now run these
                                    projects underpinned by the logic of the 'fully agile compliant' PMBOK
\t\t\t\t\t\t\t\t6 Dashboard
                                    above.&nbsp;
                                    <br><br>It is a fact, in the sixth edition of the PMBOK&#174; Guide, each knowledge
                                    area contains a new section entitled <strong>Approaches for Agile,
                                        Iterative and Adaptive Environments</strong>.&nbsp;
\t\t\t\t\t\t\t\tFor a specialized qualification in agile
\t\t\t\t\t\t\t\tconsider the <strong>PMI Agile Certified Practitioner
\t\t\t\t\t\t\t\t(PMI-ACP)</strong>.&nbsp; This formally recognizes
\t\t\t\t\t\t\t\tyour knowledge of agile principles and your
\t\t\t\t\t\t\t\tskill with agile techniques (including XP,
\t\t\t\t\t\t\t\tScrum, Lean and KanBan etc.).<br>If you think that the PMBOK is
\t\t\t\t\t\t\t\toutdated because it is &quot;waterfall,&quot; I challenge
\t\t\t\t\t\t\t\tyou to work through the PMBOK
\t\t\t\t\t\t\t\t&quot;How To&quot; (from the main menu).  If you do this then I believe you will
\t\t\t\t\t\t\t\tcome to understand that your assumptions are incorrect and do not fully grasp all the
\t\t\t\t\t\t\t\tpertinent issues.  To illustrate why I say this
\t\t\t\t\t\t\t\ttake the pin test now and ask yourself
\t\t\t\t\t\t\t\thonestly:<br>
\t\t\t\t\t\t\t\t<a href=\"/cmmi\" title=\"Use your mouse to drag me around for fun.  Then click me if you want to get serious and Pin down your Capability Maturity level now!\" target=\"_blank\"><u><i>
\t\t\t\t\t\t\t\twhere is your game really at</i></u>?<img alt=\"pin\" id=\"pin\" class=\"img-fluid\" src=\"/images/pin40small.png\" ></a>
\t\t\t\t\t\t\t\t<br><br>


                              </li>

                              </ul>


                             <p align=\"left\"><a href=\"/home/pmbokversix\" target=\"_blank\">
\t\t\t\t\t\t\t\tClick here</a> for the changes in PMBOK version 6 when compared to PMBOK version 5.</p>
\t\t\t\t\t\t\t\t<br>


            </div>
            <div class=\"card-footer\">

            </div>
        </div>
    </div>
</div>

<br>
<br>
<!------------------------------------------------
<h5 align=\"center\">Bottom Line...</h5>
<p align=\"center\"> <img class=\"img-fluid\" src=\"/images/wall and resources.jpg\"></p>
-------------------------------------------------------------------->



\t\t\t\t\t\t\t    <br>
\t\t\t\t\t\t\t    <br>

            </div>


<script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>

<script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">

<script>
  \$(document).ready(function () {
    \$(\"#pin, #heart, #game\").draggable({revert:\"invalid\"});
    \$(\"#target\").droppable({
      greddy: true,
      tolerance: 'touch',
      drop: function (event, ui) {
        ui.draggable.draggable('option', 'revert', 'true');
        alert(\"OK Knowing where you are is the first step to improvement!\");

      }
    });




  });




</script>


{% endif %}


{% if not user %}

<div class=\"container\" align=\"center\">
\t<h3>PMWay web is an ideas sandbox</h3>
\t<p align=\"center\"><font size=\"-1\"><a href=\"/register\" target=\"_blank\"><u>Register</u></a>, <a href=\"/login\" target=\"_blank\"><u>Log in</u></a> and then click the sandbox below for more information on why PMWay</font></p>





<button class=\"btn align-center clearfix\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsewhypmway\" aria-expanded=\"false\" aria-controls=\"collapseperformancestats\"><img class=\"img-fluid\" src=\"/images/sandpitwithoutshadow.png\" onmouseover=\"this.src='/images/sandpit1.png'\" onmouseout=\"this.src='/images/sandpitwithoutshadow.png'\" title=\"Click here if you want to know Why PMWay?\"><br><br>

<!--Click the sandbox for ways to up Project and Process skills and <a href=\"/gamestats\" target=\"_blank\">game stats</a>.<!-----------------------------------------------------------------
<br>PMWay also suggests a \"mind set change\" that is urgently required,<br>if the goal for South Africa is a prosperous future for our Rainbow Nation.</button>
<br>----->



</button>
<br>

<div class=\"collapse\" id=\"collapsewhypmway\">
    <div class=\"container\">
        <div class=\"card text-center\">
<h5 class=\"card-header\" align=\"center\">PMWay:  The Way to Project and Process Management
    Excellence</h5>

            <div class=\"card-body text-center\">
<h5 align=\"left\">Please <a href=\"/register\" target=\"_blank\"><u>Register</u></a>, <a href=\"/login\" target=\"_blank\"><u>Log in</u></a> for more detailed information about why PMWay</h5><hr> <p align=\"left\">In essence know that PMWay is an ideas web site I started in 2009.  <br><br>Recently I expanded it to support my Master's of Science research.  <br>Research focus included software engineering, the prople-process-technology triad and ways (project and other methodologies) to improve governance and execution while implementing capability maturity levels.<br>
<a href=\"/homeviewpdf/resources/itilfouroverview.pdf\" target=\"_blank\">This presentation</a> gives an overview of some of the ideas I have been playing with.  These are expanded <a href=\"/pmway/?slide=1\" target=\"_blank\">here if you connect the dots.</a>
<br>
<br>Be aware that in a short time this web site has grown rapidly.  <br>It is now over 800 gigabytes in size, filled with thousands of pages and resources as I proceeded with my investigation.
<br><br>It is worth knowing that <b><a href=\"/home/nottwentyfourseven\"><u>PMWay is not available 24/7</u></a></b>.  <br>
Due to high cost involved in hosting a large web site I decided to host PMWay myself.
<br>As such, if I have my server up and running the site will be visible to you.<br>
This mode of operation is by design and is suitable for my needs as I will ensure PMWay is up when needed.<br>If you need me to bring it up for you please contact me.</p>

<h5 align=\"left\">Ways you can connect with me:</h5>
<ul>
<li align=\"left\"><a href=\"https://pmway.hopto.org\">Click on the envelope on the menu at the top of my home page and fire off a message in the form</a>.</li>
<li align=\"left\"><a href=\"https://pmway.hopto.org/cv/index.html\">Click \"Contact\" on the menu at the top of my portfolio page</a>.</li>
<li align=\"left\">You are welcome to email me direct <a href=\"mailto:markjc@mweb.co.za\">markjc@mweb.co.za</a>.</li>
</ul>
<h5 align=\"left\">Keep well.</h5>





            </div>
            <div class=\"card-footer\">

            </div>
        </div>
    </div>
</div>

<br>
<br>
<!------------------------------------------------
<h5 align=\"center\">Bottom Line...</h5>
<p align=\"center\"> <img class=\"img-fluid\" src=\"/images/wall and resources.jpg\"></p>
-------------------------------------------------------------------->



\t\t\t\t\t\t\t    <br>
\t\t\t\t\t\t\t    <br>

            </div>


<script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>

<script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">

<script>
  \$(document).ready(function () {
    \$(\"#pin, #heart, #game\").draggable({revert:\"invalid\"});
    \$(\"#target\").droppable({
      greddy: true,
      tolerance: 'touch',
      drop: function (event, ui) {
        ui.draggable.draggable('option', 'revert', 'true');
        alert(\"OK Knowing where you are is the first step to improvement!\");

      }
    });




  });




</script>

         {% endif %}


{% endblock %}
", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/about.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/about.twig");
    }
}
