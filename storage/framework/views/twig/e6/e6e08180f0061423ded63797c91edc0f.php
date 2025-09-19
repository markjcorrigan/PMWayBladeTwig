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

/* C:\xampp\htdocs\pmway\resources\views/Home/agile.twig */
class __TwigTemplate_395874b703ba9dbb7396b9baa72377be extends Template
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
            yield "Agile Methods";
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
<style>
  /* Make the image fully responsive */


  .carousel-indicators {
    position: absolute;
    bottom: -35px;
  }

  .carousel-indicators li {
    width: 10px;
    height: 10px;
    border-radius: 100%;
    background-color: #040404;
  }

  .navbar {
    position: relative;
    width: 100%;
    z-index: 10;
    max-width: 100%;
  }

  /*carousel indicators */
  .carousel-indicators li,
    {
    background: #f00 none repeat scroll 0 0;
    border: 0 none;
    border-radius: 50%;
    height: 30px;
    margin: 3px;
    opacity: 0.5;
    width: 30px;
  }

  /*active slide indicator */
  .carousel-indicators .active {
    background: #fff none repeat scroll 0 0;
    border: 4px solid #040404;
  }


</style>


<div class=\"container-fluid\" align=\"center\" >
  <h5>Agile Methods - High Level Overview</h5>
  <p><a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"0\"
      title=\"Slide 1: Lean and Kanban\">Lean and Kanban</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"1\"
      title=\"Slide 2: XP\">
      XP</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"2\"
      title=\"Slide 3: Crystal\">
      Crystal</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"3\"
      title=\"Slide 4: DSDM\">
      DSDM</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"4\"
      title=\"Slide 5: FDD\">
      FDD</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"5\"
      title=\"Slide 6: TDD\">
      TDD |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"6\" title=\"Slide 7: ASD\">
        ASD</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"7\" title=\"Slide 8: AUP\">
        AUP</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"8\" title=\"Slide 9: DDD\">
        DDD</a> <br>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"9\" title=\"Slide 10: SCRUM\">
        SCRUM</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"10\" title=\"Slide 11: PRINCE2Agile\">
        PRINCE2Agile</a>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"11\" title=\"Slide 12: The Agile Manifesto\">
        <br>Agile Manifesto</a>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"12\" title=\"Slide 13: The Project Method Selection Matrix\">
        <br>Project Methodology Selection Matrix</a>
  </p>
</div>

<div id=\"i\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#i\" data-slide-to=\"0\" title=\"Slide 1: Lean and Kanban\" class=\"active\"></li>
    <li data-target=\"#i\" data-slide-to=\"1\" title=\"Slide 2: XP\"></li>
    <li data-target=\"#i\" data-slide-to=\"2\" title=\"Slide 3: Crystal\"></li>
    <li data-target=\"#i\" data-slide-to=\"3\" title=\"Slide 4: DSDM\"></li>
    <li data-target=\"#i\" data-slide-to=\"4\" title=\"Slide 5: FDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"5\" title=\"Slide 6: TDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"6\" title=\"Slide 7: ASD\"></li>
    <li data-target=\"#i\" data-slide-to=\"7\" title=\"Slide 8: AUP\"></li>
    <li data-target=\"#i\" data-slide-to=\"8\" title=\"Slide 9 DDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"9\" title=\"Slide 10: SCRUM\"></li>
    <li data-target=\"#i\" data-slide-to=\"10\" title=\"Slide 11: Prince2Agile\"></li>
    <li data-target=\"#i\" data-slide-to=\"11\" title=\"Slide 12: The Agile Manifesto\"></li>
    <li data-target=\"#i\" data-slide-to=\"12\" title=\"Slide 13: The Project Method Selection Matrix\"></li>





  </ol>

  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\" align=\"center\">

      <div class=\"container\" style=\"max-width:70%\">
      <h5>Lean and Kanban</h5>

        <p style=\"text-align:justify\">The Lean concept optimizes an organization's system to produce valuable results
          based on its resources,
          needs, and alternatives while reducing waste.</p>
        <p style=\"text-align: left\">Waste could be from building the wrong thing, failure to learn,
          or practices that impede the process. Because these factors are dynamic in nature, a lean organization
          evaluates its entire system and continuously fine tunes its processes.</p>
        <p style=\"text-align: left\">The foundation of Lean is that the
          reduction of the length of each cycle (i.e., an iteration) leads to an increase in productivity by reducing
          delays, aids in error detection at an early stage, and consequently reduces the total amount of effort
          required
          to finish a task. Lean software principles have been successfully applied to software development.</p>
        <p style=\"text-align: left\">Kanban literally means a 'signboard' or 'billboard' and it espouses the use of
          visual aids to assist and track
          production.</p>
        <p style=\"text-align: left\">The concept was introduced by Taiichi Ohno considered to be the father of the Toyota
          Production Systems (TPS). The use of visual aids is effective and has become a common practice.</p>
         <p style=\"text-align: left\">A Kanban board (a pull system) looks a lot like a task board, but they’re not the same thing. You’ve seen task boards in discussions of Scrum and XP, so it’s easy to look at a
Kanban board and assume it’s basically the same thing.
<br><b><large>It’s not!</large></b><br> The purpose of a task board is to make the state of current tasks clear to everybody on a team. Task boards help a team
stay on top of the current status of their project. Kanban
boards are a little different. They are created to help a team
understand how work flows through their process. Because
work items are kept at a feature level on a Kanban board,
they aren’t the best way to know exactly which task each
team member is working on—but they’re great for helping
you see how much work is in progress in each state of your
process.</p>  <p style=\"text-align: left\">These methods gained
          attention due to
          their practice at Toyota, a leader in process management. Lean Kanban integrates the use of the
          visualization methods as prescribed by Kanban along with the principles of Lean creating a visual
          incremental evolutionary process management system.</p>


<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean2.png\"><br><br>

\t\t    <p align=\"centere\">   <img alt=\"Image of Agile\" class=\"img-fluid\" src=\"/images/lean1.png\"><br><br>


<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean4.png\"><br><br>

\t\t\t\t<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean5.png\"></p>






      </div>


    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>
          Extreme Programming</h5>

        <p style=\"text-align:justify\">Extreme Programming (XP), which originated in Chrysler Corporation, gained
          traction in the 1990's.</p>
        <p style=\"text-align: left\">XP makes it possible to keep the cost of changing software from rising radically
          with time. The key attributes of
          XP include incremental development, flexible scheduling, automated test codes, verbal communication,
          ever-evolving design, close collaboration, and tying in the long- and short-term drives of all those involved.
        </p>
        <p style=\"text-align: left\">XP values communication, feedback, simplicity, and courage. The different roles in
          the XP approach include
          customer, developer, tracker, and coach. It prescribes various coding, developer, and business practices as
          well as events and artifacts to achieve effective and efficient development. XP has been extensively adopted
          due to its well defined engineering practices.</p>
<p align=\"left\">While somewhat dated <a href=\"http://www.extremeprogramming.org\" target=\"_blank\">extremeprogramming.org</a> is still an excellent resource on this method.  NB:  Look at bottom right of each page for the XP [Next Page] Buttons.</p>

      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Crystal Methods</h5>



        <p style=\"text-align:justify\">Crystal methodologies of software development were introduced by Alistair Cockburn
          in the early 1990s.</p>
        <p style=\"text-align:justify\">Crystal methods are intended to be people-centric, lightweight, and easy to adapt.
          Because people are
          primary, the developmental processes and tools are not fixed but are rather adjusted to the specific
          requirements and characteristics of the project. </p>
        <p style=\"text-align:justify\">The color spectrum is used to decide on the variant for a
          project. Factors such as comfort, discretionary money, essential money, and life play a vital role in
          determining the 'weight' of the methodology, which is represented in various colors of the spectrum. The
          Crystal family is divided into Crystal Clear, Crystal Yellow, Crystal Orange, Crystal Orange Web, Crystal
          Red, Crystal Maroon, Crystal Diamond, and Crystal Sapphire.</p>
        <p style=\"text-align:justify\">
          All Crystal methods have four roles: executive sponsor, lead designer, developers, and experienced users.
          Crystal Methods recommend various strategies and techniques to achieve agility. A Crystal project cycle
          consists of chartering, delivery cycle, and wrap-up.</p>


      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>
          <a name=\"dsdm\"></a>DSDM(AgilePM)</h5>

        <p style=\"text-align:justify\">The Dynamic Systems Development Methods (DSDM) framework was initially published
          in 1995 and is
          administered by the DSDM Consortium.</p>
        <p style=\"text-align:justify\">DSDM sets quality and effort in terms of cost and time at the outset
          and adjusts the project deliverables to meet set criteria by prioritizing the deliverables into \"Must have\",
          \"Should have\", \"Could have\", and \"Won't have\" categories (using the MoSCoW prioritization technique).</p>
        <p style=\"text-align:justify\">DSDM is a system-oriented method with six distinct phases: Pre-project;
          Feasibility; Foundations;
          Exploration and Engineering; Deployment; and Benefit Assessment.</p>
        <p style=\"text-align:justify\">
          A later version of DSDM known as DSDM Atern, was introduced in 2007, focuses on both prioritization of
          deliverables and consistent user or customer collaboration. The newest version is inspired by an Arctic Tern,
          making it a developer-centric software development framework for on-time and in-budget delivery of
          user valued
          and quality-controlled project features.</p>


      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Feature Driven Development</h5>


        <p style=\"text-align:justify\">Feature Driven Development (FDD) was introduced by Jeff De Luca in 1997 and
          operates on the principle of
          completing a project by breaking it down into small, client-valued functions that can be delivered in less
          than
          two weeks time. FDD has two core principles: software development is a human activity and software
          development is a client-valued functionality.</p>
        <p style=\"text-align:justify\">FDD defines six major roles: Project Manager, Chief Architect, Development
          Manager, Chief Programmers,
          Class Owners, and Domain Experts with a number of supporting roles.</p>
        <p style=\"text-align:justify\">The FDD process is iterative and
          consists of developing an overall model, building a feature list, and then planning, designing, and building
          by
          feature.</p>



      </div>


    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Test Driven Development</h5>


        <p style=\"text-align:justify\">Sometimes known as Test-First Development, Test Driven Development was introduced
          by Kent Beck, one
          of the creators of Extreme Programming (XP).</p>
        <p style=\"text-align:justify\">Test Driven Development is a software development method
          that involves writing automated test code first and developing the least amount of code necessary to pass
          that test later.</p>
        <p style=\"text-align:justify\">The entire project is broken down into small, client-valued features that need to
          be developed
          in the shortest possible development cycle. Based on clients' requirements and specifications, tests are
          written. The tests designed in the above stage are used to design and write the production code.</p>
        <p style=\"text-align:justify\">TDD can be categorized into two levels: Acceptance TDD (ATDD) requiring a distinct
          acceptance test and
          Developer TDD (DTDD) involving writing a single developer test. TDD has become popular because of the
          numerous advantages it offers like rapid and reliable results, constant feedback, and reduced debugging
          time.</p>



      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Adaptive Software Development</h5>

        <p style=\"text-align:justify\">Adaptive Software Development (ASD) grew out of the rapid application development
          work by Jim Highsmith
          and Sam Bayer.</p>
        <p style=\"text-align:justify\">The highlights of ASD are constant adaptation of processes to the work at hand,
          provision
          of solutions to problems surfacing in large projects, and iterative, incremental development with continuous
          prototyping.</p>
        <p style=\"text-align:justify\">Being a risk-driven and a change-tolerant development approach, ASD believes a
          plan cannot admit
          uncertainties and risks as this indicates a flawed and failed plan. ASD is feature-based and target-driven.
        </p>
        <p style=\"text-align:justify\">
          The first phase of development in ASD is Speculate (as opposed to Planning) followed by the Collaborate
          and Learn phases.</p>



      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Agile Unified
          Process</h5>


        <p style=\"text-align:justify\">Agile Unified Process (AUP) evolved from IBM's Rational Unified Process.</p>
        <p style=\"text-align:justify\">Developed by Scott Ambler, AUP
          combines industry-tried-and-tested Agile techniques such as Test Driven Development (TDD), Agile
          Modeling, agile change management, and database refactoring, to deliver a working product of the best
          quality.
        </p>
        <p style=\"text-align:justify\">
          AUP models its processes and techniques on the values of Simplicity, Agility, Customizability,
          Self organization,
          Independence of tools, and focus on high-value activities. The AUP principles and values are
          put into action in the phases of Inception, Elaboration, Construction, and Transition.</p>




      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Domain Driven Development</h5>


        <p style=\"text-align:justify\">Domain-driven design is an Agile development approach meant for handling complex
          designs with
          implementation linked to an evolving model.</p>
        <p style=\"text-align:justify\">It was conceptualized by Eric Evans in 2004 and revolves
          around the design of a core domain. \"Domain\" is defined as an area of activity to which the user applies a
          program or functionality. Many such areas are batched and a model is designed.</p>
        <p style=\"text-align:justify\">The model consists of a
          system of abstractions that can be used to design the overall project and solve the problems related to the
          batched domains. </p>
        <p style=\"text-align:justify\">The core values of DDD include domain-oriented, model-driven design, ubiquitous
          language, and a bounded context.</p>
        <p style=\"text-align:justify\">
          In DDD, ubiquitous language is established and the domain is modeled. Then design, development, and
          testing follow. Refining and refactoring of the domain model is done until it is satisfactory.</p>

      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5><a name=\"scrum\"></a>SCRUM</h5>
              <a href=\"/home/scrumsixmins\" target=\"_blank\"> <img class=\"img-fluid\" src=\"/images/scruminsixmins.png\" title=\"Scrum in Just Six Minutes\"></a><br>


        <p style=\"text-align:justify\">Scrum is an agile process most commonly used for product development, especially
          software development.</p>
        <p style=\"text-align:justify\">Scrum is a project management framework that is applicable to any project with
          aggressive deadlines, complex requirements and a degree of uniqueness.</p>
        <p style=\"text-align:justify\"> In Scrum, projects move forward via a series of iterations called sprints. Each
          sprint is typically two to four weeks long. <br>
          The idea behind \"Agile\" and Scrum in particular is that each sprint must produce value, typically in the form
          of working software.<br>I.e. as it is typically difficult to do long range planning
          as is envisaged in Traditional Project Management, Scrum's goal is to produce valuable products
          incrementally (<a href=\"/productincrement\" target=\"_blank\">in slices</a>); sprint by sprint which pass muster in the \"<a href=\"/images/pppmcperscrumedited.png\" target=\"_blank\">Sprint Review (Demonstrate and Validate process #16)</a>.\" </p>


        <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
          data-target=\"#collapsedepth\" aria-expanded=\"false\" aria-controls=\"collapsedepth\">More depth on Scrum<br>via
          the dashboards<br>
        </button>

        <div class=\"collapse\" id=\"collapsedepth\">
          <div class=\"container\">
            <div class=\"card text-center\">
              <h5 class=\"card-header\" align=\"center\">&nbsp;</h5>
              <div class=\"card-body text-center\">
                <h5>The Scrum Values</h5>

                <br> <br><a href=\"/homeviewvideo/resources/scrumvalues.mp4\" target=\"_blank\"><img alt=\"Scrum Values\"
                    class=\"img-fluid\" src=\"/images/scrumvalues.jpg\"></a>

                <p>
                  <i>Click the image above for more information</i></p>
                <hr>
                <br>

                <h5>The Scrum Process Flow</h5>
                <br>






                <p>

                  <img alt=\"sprint with PP and PMC\" class=\"img-fluid\" src=\"/images/Scrumprocessswirl.jpg\"></p>
                  <h5>Scrum's Goal:
                    <br>Are you producing and able to <a href=\"/release\" target=\"_blank\"
                      title=\"release\"><u>release</u></a>
                    <a href=\"/workingsoftware\" target=\"_blank\" title=\"working software\"><u>working software</u></a>
                    <br>as a <a href=\"/productincrement\" target=\"_blank\" title=\"product increment\"><u>next product
                        increment</u></a><br>that is also &quot;potentially
                    shippable code?&quot;</h5><img alt=\"sprint bottom line\" class=\"img-fluid\"
                    src=\"/images/scrumbacklogs.png\"><br>
                  <hr>
                  <p style=\"font-size:small\"><a href=\"/cmmidevdash\" target=\"_blank\">Click here</a> to see PP (Project
                    Planning) &amp; PMC (Project Monitoring &amp; Control) at Capability Maturity Level 2.<br>Find also
                    the CM L2 REQM and CM processes?<br>
                    <a href=\"/\" target=\"_blank\">Click here</a> to see where PP and PMC are on the PMBOK 6 Dashboard?<br>
                    <a href=\"/pmway/?slide=7\" target=\"_blank\">What about the CM L3
                      processes Verification and Validation</a>?</p>
                  <br><img alt=\"sprint with PP and PMC\" class=\"img-fluid\"
                    src=\"/images/sprintmethodwithpppmc.jpg\"><br><br>

                  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#collapsebigdog\" aria-expanded=\"false\" aria-controls=\"collapsebigdog\">The PO (Big Dog)
                    Role
                  </button>

                  <div class=\"collapse\" id=\"collapsebigdog\">
                    <div class=\"container\">
                      <div class=\"card text-center\">
                        <h5 class=\"card-header\" align=\"center\">While all roles in Scrum are at the same
                          level<br>It begins and ends with the Big Dog</h5>
                        <div class=\"card-body text-center\">


                          <table align=\"center\" style=\"width: 70%\" border=\"1\">
                            <tr>
                              <td>
                                <p align=\"center\">The image above explains the crucial role of
                                  <br>the Product Owner <br>(the team's \"Big Dog\")<br>
                                  to define clear User Stories before sprint starts,<br>and to then ratify team
                                  performance via approval of the &quot;Demo Deck&quot;<br>(after Demonstrate and
                                  Validate Sprint process
                                  #16).<br>This facilitates PP and PMC and allows the team to
                                  look and move foreword, <br>(not looking over their shoulders) <br>focusing sustained
                                  effort (and if necessary improvements)
                                  on the teams <a href=\"/gamestats\" target=\"_blank\"
                                    title=\"Can the team up their game stats?  CM L2+ is all about improving quality and productivity\">production
                                    stats</a><br>for next sprint.<br>
                                  &quot;PMWay loves American Football
                                  because the
                                  game is played on a field that looks like a ruler!&quot;<br><a href=\"/home/af\"
                                    target=\"_blank\"><img alt=\"Lord Kelvin\" class=\"img-fluid\"
                                      src=\"/images/gg_measure1.png\"><br>Click here to see why</a><br> Based
                                  on this analogy the Product Owner is the team's
                                  Quarterback&quot;</p>
                              </td>
                            </tr>
                          </table>

                          <br>



                        </div>
                        <div class=\"card-footer\">

                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>




                  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#collapsescrumgovernance\" aria-expanded=\"false\"
                    aria-controls=\"collapsescrumgovernance\">Governance in Scrum</button>

                  <div class=\"collapse\" id=\"collapsescrumgovernance\">
                    <div class=\"container\">
                      <div class=\"card text-center\">
                        <h5 class=\"card-header\" align=\"center\"></h5>
                        <div class=\"card-body text-center\">






                          <img alt=\"\" title=\"scrum governance\" class=\"img-fluid\" src=\"/images/scrumgovernance.png\">



                        </div>
                        <div class=\"card-footer\">
                          Page above from Scrum for Dummies 2018
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#collapsevaluemodel\" aria-expanded=\"false\" aria-controls=\"collapsevaluemodel\">The Scrum
                    Value Model
                  </button>

                  <div class=\"collapse\" id=\"collapsevaluemodel\">
                    <div class=\"container\">
                      <div class=\"card text-center\">
                        <p class=\"card-header\" align=\"center\">Note below how value is produced in agile's Scrum method
                        </p>
                        <div class=\"card-body text-center\">


                          </a>


                          <a href=\"/scrum\" target=\"_blank\"
                            title=\"Click the image to go to a summary of all the scrum processes\"><img
                              alt=\"Scrum Value Model\" class=\"img-fluid\" src=\"/images/scrumvaluemodelroles.png\"></a><br>




                        </div>
                        <div class=\"card-footer\">
                          <p align=\"center\">Note above that the first 3 stages occur before sprints start</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <img alt=\"sprint with PP and PMC\" class=\"img-fluid\" src=\"/images/pppmcperscrumedited.png\"><br>
                  <hr>

                  <br>
                  <h5>The Scrum Processes</h5>

                  <br>
                  <img class=\"img-fluid\" src=\"/images/scrumdashnochapters.png\"
                    title=\"From the Scrum Body of Knowledge 3rd edition\">
                  <br>
                  <br>
                  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#collapseprocdetail\" aria-expanded=\"false\" aria-controls=\"collapseprocdetail\">Click
                    here for more detail <br>on the Scrum processes
                  </button>

                  <div class=\"collapse\" id=\"collapseprocdetail\">
                    <div class=\"container\">
                      <div class=\"card text-center\">
                        <h5 class=\"card-header\" align=\"center\"></h5>
                        <div class=\"card-body text-center\">



                          <a href=\"/pmway/?slide=16\" title=\"\" target=\"_blank\">
                            <img alt=\"\" class=\"img-fluid\" src=\"/images/scrumprocessespppmcadjusted.png\"></a>
                          <br>
                          <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#collapsescrumnotes\" aria-expanded=\"false\"
                            aria-controls=\"collapsescrumnotes\">Scrum Processes<br>Their importance for CM L2+!
                          </button>

                          <div class=\"collapse\" id=\"collapsescrumnotes\">
                            <div class=\"container\">
                              <div class=\"card text-center\">
                                <h5 class=\"card-header\" align=\"center\">This is how to operate at CM L2+ with Agile's
                                  Scrum Methodology</h5>
                                <div class=\"card-body text-center\">

                                  <p>The image above explains the PLAN AND ESTIMATE processes in more
                                    detail.<br>These PLAN AND ESTIMATE steps / processes (often glossed over by
                                    scrum teams), if correctly done, sets up the ability to complete
                                    the Demonstrate and Validate Sprint process (#16).<br>This
                                    &quot;correct way to Mind the Gap&quot; is how the Product Owner can agree that
                                    the sprint was a success and produced / <a href=\"/release\"
                                      target=\"_blank\">released</a> <a href=\"/workingsoftware\" target=\"_blank\">working
                                      software</a>. <a href=\"/homesave/resources/tarpitchapter.pdf\" target=\"_blank\"
                                      title=\"Avoid the dangers of the tarpit.  Mind the Gap!\">Remember the \"tar pit\"
                                      analogy</a>. I.e. the tar pit (La Brea tar pits in the USA is a good example) was
                                    used by \"Frederick Brooks as the analogy to where software projects can, if not
                                    carefully managed, get stuck in and die! To proceed carefully across the tar pit and
                                    not get lost or stuck we must \"<a href=\"/pmway/?slide=7\" target=\"_blank\">Mind the Gap</a>\"
                                    sprint by sprint. <br>
                                    <a href=\"/pmway/?slide=16\" title=\"\" target=\"_blank\"><img alt=\"tar pit\" class=\"img-fluid\"
                                        src=\"/images/tarpitstwo.jpg\"></a><br> <b><i>Minding the Gap thus protects the
                                        scrum team</i></b>!<br>Remember that Scrum (Agile Project Management), unlike
                                    Traditional Project Management has made the many planning steps
                                    (in the <a href=\"/\" target=\"_blank\">Planning Process Group of the PMBOK</a>)
                                    unnecessary.
                                    However, if the
                                    <span lang=\"en-za\"></span>process to \"Mind the Gap\" (Project Planning PP and Project
                                    Monitoring and Control PMC)
                                    for Scrum presented here is not followed (and working software is not produced),
                                    this can be a serious risk to project success! <br>To ensure more accuracy a \"demo
                                    deck\" should be signed off by the Product Owner after demonstration to signal
                                    that the sprint has completed successfully and the GAP minded.<br>If this (CM L2
                                    PP and PMC processes checkpoint
                                    signoff) <a href=\"/pin\">is not possible</a> then this is a risk.&nbsp;
                                    I.e. a note should be made by the Scrum Master in the Sprint Retrospective minutes /
                                    or a project log should be produced
                                    for audit purposes.<br>Click the image above to understand why Planning and
                                    Estimating is so
                                    important and how it fits into the PDCA cycle <br>in order to
                                    achieve stability at Capability Maturity Level 2+.</p>
                                </div>
                                <div class=\"card-footer\">

                                </div>
                              </div>
                            </div>
                          </div>



                        </div>
                        <div class=\"card-footer\">

                        </div>
                      </div>
                    </div>
                  </div>

                  <br>
                  <br>
                  <hr>

                  <br><a href=\"/home/hamandeggs\" target=\"_blank \"> Click here for &quot;Scrum in 2 pages.&quot;&nbsp;
                    <br><i>Can you spot who are the Pigs and who are the Chickens and why?</i></a>
                  <br>
                  <br><a href=\"/scrum\" target=\"_blank\">Click here for an overview of the essence of
                    the &quot;Scrum
                    Dimensions,<br>from the Scrum Body of Knowledge. <br><i>These dimensions
                      (the Values, Principles, Processes and Aspects) comprise what is needed
                      from the SBOK in order to pass the Foundation, Scrum Master and Scrum
                      Product Owners exams</i></a>.<br><br>
                      <a href=\"/scrumrca\" target=\"_blank\">Click here if you want to Improve your Scrum Game Stats?</a>

              </div>
              <div class=\"card-footer\">

              </div>
            </div>
          </div>
        </div>



        <br>
        <br>



      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>PRINCE2 Agile</h5>
        <p style=\"text-align:center\">PMWay is of the opinion that PRINCE2 Agile is a \"best and safest way\" to run
          agile.<br><a href=\"\\?slide=5\" target=\"_blank\">Capability Maturity Level 3</a> and above is required to run
          this well!<br>
          The image below, PMWay believes, says what needs to be said about the use of PRINCE2 Agile.</p>
        <img alt=\"PRINCE2 Agile\" class=\"img-fluid\" src=\"/images/p2afighter.png\">
        <div style=\"text-align:center\">


          <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
            data-target=\"#collapseagilehappens\" aria-expanded=\"false\" aria-controls=\"collapseagilehappens\">Where Agile
            happens<br> in PRINCE2 Agile
          </button>

          <div class=\"collapse\" id=\"collapseagilehappens\">
            <div class=\"container\">
              <div class=\"card text-center\">
                <h5 class=\"card-header\" align=\"center\">Under BOARD control (with Sponsor accountable): now agile away...
                </h5>
                <div class=\"card-body text-center\">









                  <img alt=\"Where agile happens\" class=\"img-fluid\" src=\"/images/prince2modelprocwhereagilehappens.png\">
                </div>
                <div class=\"card-footer\">

                </div>
              </div>
            </div>
          </div>



        </div>



        <br>





      </div>
    </div>


    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <p class=\"small text-center\"><em>Hover your mouse over the image below.</em></p>


        <img alt=\"\" class=\"img-fluid\" src=\"/images/agile-manifesto.jpg\"
           onmouseover=\"this.src='/images/agilemanifestoadded.jpg'\" onmouseout=\"this.src='/images/agile-manifesto.jpg'\">
        <br>
        <br>
\t\t  <p align=\"center\"><a href=\"/home/snowbird\" target=\"_blank\"><u>Snowbird</u></a></p>
\t\t  <br>
\t\t    <p align=\"center\"><a href=\"/home/snowbird#heart\" target=\"_blank\" ><u>Heart of Agile</u></a></p>
\t\t  <br>
\t\t   <p align=\"center\"><img alt=\"heart of agile\" class=\"img-fluid\" src=\"/images/heartofagile.png\" onmouseover=\"this.src='/images/heartofagileexpanded.jpg'\" onmouseout=\"this.src='/images/heartofagile.png'\"></p>
\t\t  <br>
\t\t  <br>

      </div>
    </div>


    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">



        <h5>One Project Methodology does not fit all Project Types.</h5>



        <p style=\"text-align:justify\">The project selection matrix from Dr. Robert. K. Wysocki (below) shows one how to
          quickly decide
          what project method best suites the type of project based on the criteria of clarity or lack of clarity of the
          project goal or solution being considered.&nbsp;
          <br>Note: While all projects are risky business, agile projects are very risky business!<br>This 'type of
          project methodology' decision can also
          be based on how risk-averse is your organization.&nbsp;
          <br><br>PMWay's recommended approach is using PRINCE2 Agile
          as the recipe you follow; and
          PMBOK version 6 for the ingredients. The mandatory use of the PRINCE2 Agile Board (who have the relevant
          training, experience, ability, agility and power
          within the organization - to (&quot;<a href=\"/home/removetheredbeads\" target=\"_blank\">remove the red
            beads</a>&quot;) is the strategic driver for success for the PRINCE2 Agile method, PMWay (from considerable
          experience of the method's use in the Public and Private Sector) understands.&nbsp;
          Success in this regards is the dynamic
          &quot;tension to produce results&quot; from the empowered board who in
          turn remove the red beads and empower the project manager
          and team.<br><br>While PRINCE2 Agile is not shown in the diagram below, being a blend of the two,
          it would straddle
          across TPM and APM. <br></p>
        <img alt=\"project selection matrix\" class=\"img-fluid\" src=\"/images/projselectmatrix.png\">


        <br>
        <br>


    </div>
 </div>
\t</div>
</div>






<a class=\"carousel-control-prev\" href=\"#i\" role=\"button\" data-slide=\"prev\">
  <i class=\"fas fa-lg fa-chevron-left\" style=\"color:black\"></i>
  <span class=\"sr-only\">Previous</span>
</a>
<a class=\"carousel-control-next\" href=\"#i\" role=\"button\" data-slide=\"next\">
  <i class=\"fas fa-lg fa-chevron-right\" style=\"color:black\"></i>

  <span class=\"sr-only\">Next</span>
</a>

</div>


    <script src=\"/bootstrapfourfivetwo/js/jquery.js\"></script>
    <script src=\"/bootstrapfourfivetwo/js/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"/bootstrapfourfivetwo/css/jquery-ui.css\"></link>
<script>
  \$(document).ready(function () {
    function qs(key) {
      key = key.replace(/[*+?^\$.\\[\\]{}()|\\\\\\/]/g, \"\\\\\$&\"); // escape RegEx meta chars
      var match = location.search.match(new RegExp(\"[?&]\" + key + \"=([^&]+)(&|\$)\"));
      var slide = match && decodeURIComponent(match[1].replace(/\\+/g, \" \"));
      if (Math.floor(slide) == slide && \$.isNumeric(slide))
        return parseInt(slide);
      else
        return 0;
    }
    \$('#i').carousel((qs('slide')) - 1);
  });
</script>
<br>
<br>
<br>
<br>

";
        }
        // line 831
        yield "

";
        // line 833
        if ((($tmp =  !($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 834
            yield "

<style>
  /* Make the image fully responsive */



  .carousel-indicators {
    position: absolute;
    bottom: -35px;
  }

  .carousel-indicators li {
    width: 10px;
    height: 10px;
    border-radius: 100%;
    background-color: #040404;
  }

  .navbar {
    position: relative;
    width: 100%;
    z-index: 10;
    max-width: 100%;
  }

  /*carousel indicators */
  .carousel-indicators li,
    {
    background: #f00 none repeat scroll 0 0;
    border: 0 none;
    border-radius: 50%;
    height: 30px;
    margin: 3px;
    opacity: 0.5;
    width: 30px;
  }

  /*active slide indicator */
  .carousel-indicators .active {
    background: #fff none repeat scroll 0 0;
    border: 4px solid #040404;
  }


</style>


<div class=\"container-fluid\" align=\"center\" >
  <h5>Agile Methods - High Level Overview</h5>
  <p><a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"0\"
      title=\"Slide 1: Lean and Kanban\">Lean and Kanban</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"1\"
      title=\"Slide 2: XP\">
      XP</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"2\"
      title=\"Slide 3: Crystal\">
      Crystal</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"3\"
      title=\"Slide 4: DSDM\">
      DSDM</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"4\"
      title=\"Slide 5: FDD\">
      FDD</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"5\"
      title=\"Slide 6: TDD\">
      TDD |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"6\" title=\"Slide 7: ASD\">
        ASD</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"7\" title=\"Slide 8: AUP\">
        AUP</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"8\" title=\"Slide 9: DDD\">
        DDD</a> <br>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"9\" title=\"Slide 10: SCRUM\">
        SCRUM</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"10\" title=\"Slide 11: PRINCE2Agile\">
        PRINCE2Agile</a>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"11\" title=\"Slide 12: The Agile Manifesto\">
        <br>Agile Manifesto</a>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"12\" title=\"Slide 13: The Project Method Selection Matrix\">
        <br>Project Methodology Selection Matrix</a>
  </p>
</div>

<div id=\"i\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#i\" data-slide-to=\"0\" title=\"Slide 1: Lean and Kanban\" class=\"active\"></li>
    <li data-target=\"#i\" data-slide-to=\"1\" title=\"Slide 2: XP\"></li>
    <li data-target=\"#i\" data-slide-to=\"2\" title=\"Slide 3: Crystal\"></li>
    <li data-target=\"#i\" data-slide-to=\"3\" title=\"Slide 4: DSDM\"></li>
    <li data-target=\"#i\" data-slide-to=\"4\" title=\"Slide 5: FDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"5\" title=\"Slide 6: TDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"6\" title=\"Slide 7: ASD\"></li>
    <li data-target=\"#i\" data-slide-to=\"7\" title=\"Slide 8: AUP\"></li>
    <li data-target=\"#i\" data-slide-to=\"8\" title=\"Slide 9 DDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"9\" title=\"Slide 10: SCRUM\"></li>
    <li data-target=\"#i\" data-slide-to=\"10\" title=\"Slide 11: Prince2Agile\"></li>
    <li data-target=\"#i\" data-slide-to=\"11\" title=\"Slide 12: The Agile Manifesto\"></li>
    <li data-target=\"#i\" data-slide-to=\"12\" title=\"Slide 13: The Project Method Selection Matrix\"></li>





  </ol>

  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\" align=\"center\">

      <div class=\"container\" style=\"max-width:70%\">
     <h5>Lean and Kanban</h5>

        <p style=\"text-align:justify\">The Lean concept optimizes an organization's system to produce valuable results
          based on its resources,
          needs, and alternatives while reducing waste.</p>
        <p style=\"text-align: left\">Waste could be from building the wrong thing, failure to learn,
          or practices that impede the process. Because these factors are dynamic in nature, a lean organization
          evaluates its entire system and continuously fine tunes its processes.</p>
        <p style=\"text-align: left\">The foundation of Lean is that the
          reduction of the length of each cycle (i.e., an iteration) leads to an increase in productivity by reducing
          delays, aids in error detection at an early stage, and consequently reduces the total amount of effort
          required
          to finish a task. Lean software principles have been successfully applied to software development.</p>
        <p style=\"text-align: left\">Kanban literally means a 'signboard' or 'billboard' and it espouses the use of
          visual aids to assist and track
          production.</p>
        <p style=\"text-align: left\">The concept was introduced by Taiichi Ohno considered to be the father of the Toyota
          Production Systems (TPS). The use of visual aids is effective and has become a common practice.</p>
         <p style=\"text-align: left\">A Kanban board (a pull system) looks a lot like a task board, but they’re not the same thing. You’ve seen task boards in discussions of Scrum and XP, so it’s easy to look at a
Kanban board and assume it’s basically the same thing.
<br><b><large>It’s not!</large></b><br> The purpose of a task board is to make the state of current tasks clear to everybody on a team. Task boards help a team
stay on top of the current status of their project. Kanban
boards are a little different. They are created to help a team
understand how work flows through their process. Because
work items are kept at a feature level on a Kanban board,
they aren’t the best way to know exactly which task each
team member is working on—but they’re great for helping
you see how much work is in progress in each state of your
process.</p>  <p style=\"text-align: left\">These methods gained
          attention due to
          their practice at Toyota, a leader in process management. Lean Kanban integrates the use of the
          visualization methods as prescribed by Kanban along with the principles of Lean creating a visual
          incremental evolutionary process management system.</p>

\t\t  <img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean2.png\"><br><br>

\t<p align=\"centere\">   <img alt=\"Image of Agile\" class=\"img-fluid\" src=\"/images/lean1.png\"><br><br>



<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean4.png\"><br><br>

\t\t\t\t<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean5.png\"></p>







      </div>


    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>
          Extreme Programming</h5>

        <p style=\"text-align:justify\">Extreme Programming (XP), which originated in Chrysler Corporation, gained
          traction in the 1990's.</p>
        <p style=\"text-align: left\">XP makes it possible to keep the cost of changing software from rising radically
          with time. The key attributes of
          XP include incremental development, flexible scheduling, automated test codes, verbal communication,
          ever-evolving design, close collaboration, and tying in the long- and short-term drives of all those involved.
        </p>
        <p style=\"text-align: left\">XP values communication, feedback, simplicity, and courage. The different roles in
          the XP approach include
          customer, developer, tracker, and coach. It prescribes various coding, developer, and business practices as
          well as events and artifacts to achieve effective and efficient development. XP has been extensively adopted
          due to its well defined engineering practices.</p>
<p align=\"left\">While somewhat dated <a href=\"http://www.extremeprogramming.org\" target=\"_blank\">extremeprogramming.org</a> is still an excellent resource on this method.  NB:  Look at bottom right of each page for the XP [Next Page] Buttons.</p>
      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Crystal Methods</h5>



        <p style=\"text-align:justify\">Crystal methodologies of software development were introduced by Alistair Cockburn
          in the early 1990s.</p>
        <p style=\"text-align:justify\">Crystal methods are intended to be people-centric, lightweight, and easy to adapt.
          Because people are
          primary, the developmental processes and tools are not fixed but are rather adjusted to the specific
          requirements and characteristics of the project. </p>
        <p style=\"text-align:justify\">The color spectrum is used to decide on the variant for a
          project. Factors such as comfort, discretionary money, essential money, and life play a vital role in
          determining the 'weight' of the methodology, which is represented in various colors of the spectrum. The
          Crystal family is divided into Crystal Clear, Crystal Yellow, Crystal Orange, Crystal Orange Web, Crystal
          Red, Crystal Maroon, Crystal Diamond, and Crystal Sapphire.</p>
        <p style=\"text-align:justify\">
          All Crystal methods have four roles: executive sponsor, lead designer, developers, and experienced users.
          Crystal Methods recommend various strategies and techniques to achieve agility. A Crystal project cycle
          consists of chartering, delivery cycle, and wrap-up.</p>


      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>
          <a name=\"dsdm\"></a>DSDM(AgilePM)</h5>

        <p style=\"text-align:justify\">The Dynamic Systems Development Methods (DSDM) framework was initially published
          in 1995 and is
          administered by the DSDM Consortium.</p>
        <p style=\"text-align:justify\">DSDM sets quality and effort in terms of cost and time at the outset
          and adjusts the project deliverables to meet set criteria by prioritizing the deliverables into \"Must have\",
          \"Should have\", \"Could have\", and \"Won't have\" categories (using the MoSCoW prioritization technique).</p>
        <p style=\"text-align:justify\">DSDM is a system-oriented method with six distinct phases: Pre-project;
          Feasibility; Foundations;
          Exploration and Engineering; Deployment; and Benefit Assessment.</p>
        <p style=\"text-align:justify\">
          A later version of DSDM known as DSDM Atern, was introduced in 2007, focuses on both prioritization of
          deliverables and consistent user or customer collaboration. The newest version is inspired by an Arctic Tern,
          making it a developer-centric software development framework for on-time and in-budget delivery of
          user valued
          and quality-controlled project features.</p>


      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Feature Driven Development</h5>


        <p style=\"text-align:justify\">Feature Driven Development (FDD) was introduced by Jeff De Luca in 1997 and
          operates on the principle of
          completing a project by breaking it down into small, client-valued functions that can be delivered in less
          than
          two weeks time. FDD has two core principles: software development is a human activity and software
          development is a client-valued functionality.</p>
        <p style=\"text-align:justify\">FDD defines six major roles: Project Manager, Chief Architect, Development
          Manager, Chief Programmers,
          Class Owners, and Domain Experts with a number of supporting roles.</p>
        <p style=\"text-align:justify\">The FDD process is iterative and
          consists of developing an overall model, building a feature list, and then planning, designing, and building
          by
          feature.</p>



      </div>


    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Test Driven Development</h5>


        <p style=\"text-align:justify\">Sometimes known as Test-First Development, Test Driven Development was introduced
          by Kent Beck, one
          of the creators of Extreme Programming (XP).</p>
        <p style=\"text-align:justify\">Test Driven Development is a software development method
          that involves writing automated test code first and developing the least amount of code necessary to pass
          that test later.</p>
        <p style=\"text-align:justify\">The entire project is broken down into small, client-valued features that need to
          be developed
          in the shortest possible development cycle. Based on clients' requirements and specifications, tests are
          written. The tests designed in the above stage are used to design and write the production code.</p>
        <p style=\"text-align:justify\">TDD can be categorized into two levels: Acceptance TDD (ATDD) requiring a distinct
          acceptance test and
          Developer TDD (DTDD) involving writing a single developer test. TDD has become popular because of the
          numerous advantages it offers like rapid and reliable results, constant feedback, and reduced debugging
          time.</p>



      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Adaptive Software Development</h5>

        <p style=\"text-align:justify\">Adaptive Software Development (ASD) grew out of the rapid application development
          work by Jim Highsmith
          and Sam Bayer.</p>
        <p style=\"text-align:justify\">The highlights of ASD are constant adaptation of processes to the work at hand,
          provision
          of solutions to problems surfacing in large projects, and iterative, incremental development with continuous
          prototyping.</p>
        <p style=\"text-align:justify\">Being a risk-driven and a change-tolerant development approach, ASD believes a
          plan cannot admit
          uncertainties and risks as this indicates a flawed and failed plan. ASD is feature-based and target-driven.
        </p>
        <p style=\"text-align:justify\">
          The first phase of development in ASD is Speculate (as opposed to Planning) followed by the Collaborate
          and Learn phases.</p>



      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Agile Unified
          Process</h5>


        <p style=\"text-align:justify\">Agile Unified Process (AUP) evolved from IBM's Rational Unified Process.</p>
        <p style=\"text-align:justify\">Developed by Scott Ambler, AUP
          combines industry-tried-and-tested Agile techniques such as Test Driven Development (TDD), Agile
          Modeling, agile change management, and database refactoring, to deliver a working product of the best
          quality.
        </p>
        <p style=\"text-align:justify\">
          AUP models its processes and techniques on the values of Simplicity, Agility, Customizability,
          Self organization,
          Independence of tools, and focus on high-value activities. The AUP principles and values are
          put into action in the phases of Inception, Elaboration, Construction, and Transition.</p>




      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Domain Driven Development</h5>


        <p style=\"text-align:justify\">Domain-driven design is an Agile development approach meant for handling complex
          designs with
          implementation linked to an evolving model.</p>
        <p style=\"text-align:justify\">It was conceptualized by Eric Evans in 2004 and revolves
          around the design of a core domain. \"Domain\" is defined as an area of activity to which the user applies a
          program or functionality. Many such areas are batched and a model is designed.</p>
        <p style=\"text-align:justify\">The model consists of a
          system of abstractions that can be used to design the overall project and solve the problems related to the
          batched domains. </p>
        <p style=\"text-align:justify\">The core values of DDD include domain-oriented, model-driven design, ubiquitous
          language, and a bounded context.</p>
        <p style=\"text-align:justify\">
          In DDD, ubiquitous language is established and the domain is modeled. Then design, development, and
          testing follow. Refining and refactoring of the domain model is done until it is satisfactory.</p>

      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5><a name=\"scrum\"></a>SCRUM</h5>
               <a href=\"/home/scrumsixmins\" target=\"_blank\"> <img class=\"img-fluid\" src=\"/images/scruminsixmins.png\" title=\"Scrum in Just Six Minutes\"></a><br>
  <p style=\"text-align:justify\">Scrum is an agile process most commonly used for product development, especially
          software development.</p>
        <p style=\"text-align:justify\">Scrum is a project management framework that is applicable to any project with
          aggressive deadlines, complex requirements and a degree of uniqueness.</p>
        <p style=\"text-align:justify\"> In Scrum, projects move forward via a series of iterations called sprints. Each
          sprint is typically two to four weeks long. <br>
          The idea behind \"Agile\" and Scrum in particular is that each sprint must produce value, typically in the form
          of working software.<br>I.e. as it is typically difficult to do long range planning
          as is envisaged in Traditional Project Management, Scrum's goal is to produce valuable products
          incrementally (<a href=\"/productincrement\" target=\"_blank\">in slices</a>); sprint by sprint which pass muster in the \"<a href=\"/images/pppmcperscrumedited.png\" target=\"_blank\">Sprint Review (Demonstrate and Validate process #16)</a>.\"</p>


        <br>
        <br>



      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>PRINCE2 Agile</h5>
        <p style=\"text-align:center\">PMWay is of the opinion that PRINCE2 Agile is a \"best and safest way\" to run
          agile.<br><a href=\"/login\" target=\"_blank\">Capability Maturity Level 3</a> and above is required to run
          this well!<br>
          The image below, PMWay believes, says what needs to be said about the use of PRINCE2 Agile.</p>
        <img alt=\"PRINCE2 Agile\" class=\"img-fluid\" src=\"/images/p2afighter.png\">
        <div style=\"text-align:center\">


          <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
            data-target=\"#collapseagilehappens\" aria-expanded=\"false\" aria-controls=\"collapseagilehappens\">Where Agile
            happens<br> in PRINCE2 Agile
          </button>

          <div class=\"collapse\" id=\"collapseagilehappens\">
            <div class=\"container\">
              <div class=\"card text-center\">
                <h5 class=\"card-header\" align=\"center\">Under BOARD control (with Sponsor accountable): now agile away...
                </h5>
                <div class=\"card-body text-center\">









                  <img alt=\"Where agile happens\" class=\"img-fluid\" src=\"/images/prince2modelprocwhereagilehappens.png\">
                </div>
                <div class=\"card-footer\">

                </div>
              </div>
            </div>
          </div>



        </div>



        <br>





      </div>
    </div>


    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <p class=\"small text-center\"><em>Hover your mouse over the image below.</em></p>


        <img alt=\"\" class=\"img-fluid\" src=\"/images/agile-manifesto.jpg\"
           onmouseover=\"this.src='/images/agilemanifestoadded.jpg'\" onmouseout=\"this.src='/images/agile-manifesto.jpg'\">
        <br>
        <br>
 <p align=\"center\"><a href=\"/home/snowbird\" target=\"_blank\"><u>Snowbird</u></a></p>
   <br>
\t\t   <p align=\"center\"><a href=\"/home/snowbird#heart\" target=\"_blank\" ><u>Heart of Agile</u></a></p>
\t\t  <br>
\t\t   <p align=\"center\"><img alt=\"heart of agile\" class=\"img-fluid\" src=\"/images/heartofagile.png\" onmouseover=\"this.src='/images/heartofagileexpanded.jpg'\" onmouseout=\"this.src='/images/heartofagile.png'\"></p>
\t\t  <br><br>
      </div>
    </div>


    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">



        <h5>One Project Methodology does not fit all Project Types.</h5>



        <p style=\"text-align:justify\">The project selection matrix from Dr. Robert. K. Wysocki (below) shows one how to
          quickly decide
          what project method best suites the type of project based on the criteria of clarity or lack of clarity of the
          project goal or solution being considered.&nbsp;
          <br>Note: While all projects are risky business, agile projects are very risky business!<br>This 'type of
          project methodology' decision can also
          be based on how risk-averse is your organization.&nbsp;
          <br><br>PMWay's recommended approach is using PRINCE2 Agile
          as the recipe you follow; and
          PMBOK version 6 for the ingredients. The mandatory use of the PRINCE2 Agile Board (who have the relevant
          training, experience, ability, agility and power
          within the organization - to (&quot;<a href=\"/home/removetheredbeads\" target=\"_blank\">remove the red
            beads</a>&quot;) is the strategic driver for success for the PRINCE2 Agile method, PMWay (from considerable
          experience of the method's use in the Public and Private Sector) understands.&nbsp;
          Success in this regards is the dynamic
          &quot;tension to produce results&quot; from the empowered board who in
          turn remove the red beads and empower the project manager
          and team.<br><br>While PRINCE2 Agile is not shown in the diagram below, being a blend of the two,
          it would straddle
          across TPM and APM. <br></p>
        <img alt=\"project selection matrix\" class=\"img-fluid\" src=\"/images/projselectmatrix.png\">


        <br>
        <br>


    </div>
 </div>
\t</div>
</div>






<a class=\"carousel-control-prev\" href=\"#i\" role=\"button\" data-slide=\"prev\">
  <i class=\"fas fa-lg fa-chevron-left\" style=\"color:black\"></i>
  <span class=\"sr-only\">Previous</span>
</a>
<a class=\"carousel-control-next\" href=\"#i\" role=\"button\" data-slide=\"next\">
  <i class=\"fas fa-lg fa-chevron-right\" style=\"color:black\"></i>

  <span class=\"sr-only\">Next</span>
</a>

</div>
    <script src=\"/bootstrapfourfivetwo/js/jquery.js\"></script>
    <script src=\"/bootstrapfourfivetwo/js/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"/bootstrapfourfivetwo/css/jquery-ui.css\"></link>
<script>
  \$(document).ready(function () {
    function qs(key) {
      key = key.replace(/[*+?^\$.\\[\\]{}()|\\\\\\/]/g, \"\\\\\$&\"); // escape RegEx meta chars
      var match = location.search.match(new RegExp(\"[?&]\" + key + \"=([^&]+)(&|\$)\"));
      var slide = match && decodeURIComponent(match[1].replace(/\\+/g, \" \"));
      if (Math.floor(slide) == slide && \$.isNumeric(slide))
        return parseInt(slide);
      else
        return 0;
    }
    \$('#i').carousel((qs('slide')) - 1);
  });
</script>
<br>
<br>
<br>
<br>

";
        }
        // line 1375
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/agile.twig";
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
        return array (  1458 => 1375,  915 => 834,  913 => 833,  909 => 831,  81 => 5,  79 => 4,  72 => 3,  53 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.twig' %}
{% block title %} {% if not user %}PMWay{% endif %} {% if user %}Agile Methods{% endif %}  {% endblock %}
{% block body %}
{% if user %}

<style>
  /* Make the image fully responsive */


  .carousel-indicators {
    position: absolute;
    bottom: -35px;
  }

  .carousel-indicators li {
    width: 10px;
    height: 10px;
    border-radius: 100%;
    background-color: #040404;
  }

  .navbar {
    position: relative;
    width: 100%;
    z-index: 10;
    max-width: 100%;
  }

  /*carousel indicators */
  .carousel-indicators li,
    {
    background: #f00 none repeat scroll 0 0;
    border: 0 none;
    border-radius: 50%;
    height: 30px;
    margin: 3px;
    opacity: 0.5;
    width: 30px;
  }

  /*active slide indicator */
  .carousel-indicators .active {
    background: #fff none repeat scroll 0 0;
    border: 4px solid #040404;
  }


</style>


<div class=\"container-fluid\" align=\"center\" >
  <h5>Agile Methods - High Level Overview</h5>
  <p><a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"0\"
      title=\"Slide 1: Lean and Kanban\">Lean and Kanban</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"1\"
      title=\"Slide 2: XP\">
      XP</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"2\"
      title=\"Slide 3: Crystal\">
      Crystal</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"3\"
      title=\"Slide 4: DSDM\">
      DSDM</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"4\"
      title=\"Slide 5: FDD\">
      FDD</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"5\"
      title=\"Slide 6: TDD\">
      TDD |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"6\" title=\"Slide 7: ASD\">
        ASD</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"7\" title=\"Slide 8: AUP\">
        AUP</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"8\" title=\"Slide 9: DDD\">
        DDD</a> <br>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"9\" title=\"Slide 10: SCRUM\">
        SCRUM</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"10\" title=\"Slide 11: PRINCE2Agile\">
        PRINCE2Agile</a>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"11\" title=\"Slide 12: The Agile Manifesto\">
        <br>Agile Manifesto</a>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"12\" title=\"Slide 13: The Project Method Selection Matrix\">
        <br>Project Methodology Selection Matrix</a>
  </p>
</div>

<div id=\"i\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#i\" data-slide-to=\"0\" title=\"Slide 1: Lean and Kanban\" class=\"active\"></li>
    <li data-target=\"#i\" data-slide-to=\"1\" title=\"Slide 2: XP\"></li>
    <li data-target=\"#i\" data-slide-to=\"2\" title=\"Slide 3: Crystal\"></li>
    <li data-target=\"#i\" data-slide-to=\"3\" title=\"Slide 4: DSDM\"></li>
    <li data-target=\"#i\" data-slide-to=\"4\" title=\"Slide 5: FDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"5\" title=\"Slide 6: TDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"6\" title=\"Slide 7: ASD\"></li>
    <li data-target=\"#i\" data-slide-to=\"7\" title=\"Slide 8: AUP\"></li>
    <li data-target=\"#i\" data-slide-to=\"8\" title=\"Slide 9 DDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"9\" title=\"Slide 10: SCRUM\"></li>
    <li data-target=\"#i\" data-slide-to=\"10\" title=\"Slide 11: Prince2Agile\"></li>
    <li data-target=\"#i\" data-slide-to=\"11\" title=\"Slide 12: The Agile Manifesto\"></li>
    <li data-target=\"#i\" data-slide-to=\"12\" title=\"Slide 13: The Project Method Selection Matrix\"></li>





  </ol>

  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\" align=\"center\">

      <div class=\"container\" style=\"max-width:70%\">
      <h5>Lean and Kanban</h5>

        <p style=\"text-align:justify\">The Lean concept optimizes an organization's system to produce valuable results
          based on its resources,
          needs, and alternatives while reducing waste.</p>
        <p style=\"text-align: left\">Waste could be from building the wrong thing, failure to learn,
          or practices that impede the process. Because these factors are dynamic in nature, a lean organization
          evaluates its entire system and continuously fine tunes its processes.</p>
        <p style=\"text-align: left\">The foundation of Lean is that the
          reduction of the length of each cycle (i.e., an iteration) leads to an increase in productivity by reducing
          delays, aids in error detection at an early stage, and consequently reduces the total amount of effort
          required
          to finish a task. Lean software principles have been successfully applied to software development.</p>
        <p style=\"text-align: left\">Kanban literally means a 'signboard' or 'billboard' and it espouses the use of
          visual aids to assist and track
          production.</p>
        <p style=\"text-align: left\">The concept was introduced by Taiichi Ohno considered to be the father of the Toyota
          Production Systems (TPS). The use of visual aids is effective and has become a common practice.</p>
         <p style=\"text-align: left\">A Kanban board (a pull system) looks a lot like a task board, but they’re not the same thing. You’ve seen task boards in discussions of Scrum and XP, so it’s easy to look at a
Kanban board and assume it’s basically the same thing.
<br><b><large>It’s not!</large></b><br> The purpose of a task board is to make the state of current tasks clear to everybody on a team. Task boards help a team
stay on top of the current status of their project. Kanban
boards are a little different. They are created to help a team
understand how work flows through their process. Because
work items are kept at a feature level on a Kanban board,
they aren’t the best way to know exactly which task each
team member is working on—but they’re great for helping
you see how much work is in progress in each state of your
process.</p>  <p style=\"text-align: left\">These methods gained
          attention due to
          their practice at Toyota, a leader in process management. Lean Kanban integrates the use of the
          visualization methods as prescribed by Kanban along with the principles of Lean creating a visual
          incremental evolutionary process management system.</p>


<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean2.png\"><br><br>

\t\t    <p align=\"centere\">   <img alt=\"Image of Agile\" class=\"img-fluid\" src=\"/images/lean1.png\"><br><br>


<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean4.png\"><br><br>

\t\t\t\t<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean5.png\"></p>






      </div>


    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>
          Extreme Programming</h5>

        <p style=\"text-align:justify\">Extreme Programming (XP), which originated in Chrysler Corporation, gained
          traction in the 1990's.</p>
        <p style=\"text-align: left\">XP makes it possible to keep the cost of changing software from rising radically
          with time. The key attributes of
          XP include incremental development, flexible scheduling, automated test codes, verbal communication,
          ever-evolving design, close collaboration, and tying in the long- and short-term drives of all those involved.
        </p>
        <p style=\"text-align: left\">XP values communication, feedback, simplicity, and courage. The different roles in
          the XP approach include
          customer, developer, tracker, and coach. It prescribes various coding, developer, and business practices as
          well as events and artifacts to achieve effective and efficient development. XP has been extensively adopted
          due to its well defined engineering practices.</p>
<p align=\"left\">While somewhat dated <a href=\"http://www.extremeprogramming.org\" target=\"_blank\">extremeprogramming.org</a> is still an excellent resource on this method.  NB:  Look at bottom right of each page for the XP [Next Page] Buttons.</p>

      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Crystal Methods</h5>



        <p style=\"text-align:justify\">Crystal methodologies of software development were introduced by Alistair Cockburn
          in the early 1990s.</p>
        <p style=\"text-align:justify\">Crystal methods are intended to be people-centric, lightweight, and easy to adapt.
          Because people are
          primary, the developmental processes and tools are not fixed but are rather adjusted to the specific
          requirements and characteristics of the project. </p>
        <p style=\"text-align:justify\">The color spectrum is used to decide on the variant for a
          project. Factors such as comfort, discretionary money, essential money, and life play a vital role in
          determining the 'weight' of the methodology, which is represented in various colors of the spectrum. The
          Crystal family is divided into Crystal Clear, Crystal Yellow, Crystal Orange, Crystal Orange Web, Crystal
          Red, Crystal Maroon, Crystal Diamond, and Crystal Sapphire.</p>
        <p style=\"text-align:justify\">
          All Crystal methods have four roles: executive sponsor, lead designer, developers, and experienced users.
          Crystal Methods recommend various strategies and techniques to achieve agility. A Crystal project cycle
          consists of chartering, delivery cycle, and wrap-up.</p>


      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>
          <a name=\"dsdm\"></a>DSDM(AgilePM)</h5>

        <p style=\"text-align:justify\">The Dynamic Systems Development Methods (DSDM) framework was initially published
          in 1995 and is
          administered by the DSDM Consortium.</p>
        <p style=\"text-align:justify\">DSDM sets quality and effort in terms of cost and time at the outset
          and adjusts the project deliverables to meet set criteria by prioritizing the deliverables into \"Must have\",
          \"Should have\", \"Could have\", and \"Won't have\" categories (using the MoSCoW prioritization technique).</p>
        <p style=\"text-align:justify\">DSDM is a system-oriented method with six distinct phases: Pre-project;
          Feasibility; Foundations;
          Exploration and Engineering; Deployment; and Benefit Assessment.</p>
        <p style=\"text-align:justify\">
          A later version of DSDM known as DSDM Atern, was introduced in 2007, focuses on both prioritization of
          deliverables and consistent user or customer collaboration. The newest version is inspired by an Arctic Tern,
          making it a developer-centric software development framework for on-time and in-budget delivery of
          user valued
          and quality-controlled project features.</p>


      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Feature Driven Development</h5>


        <p style=\"text-align:justify\">Feature Driven Development (FDD) was introduced by Jeff De Luca in 1997 and
          operates on the principle of
          completing a project by breaking it down into small, client-valued functions that can be delivered in less
          than
          two weeks time. FDD has two core principles: software development is a human activity and software
          development is a client-valued functionality.</p>
        <p style=\"text-align:justify\">FDD defines six major roles: Project Manager, Chief Architect, Development
          Manager, Chief Programmers,
          Class Owners, and Domain Experts with a number of supporting roles.</p>
        <p style=\"text-align:justify\">The FDD process is iterative and
          consists of developing an overall model, building a feature list, and then planning, designing, and building
          by
          feature.</p>



      </div>


    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Test Driven Development</h5>


        <p style=\"text-align:justify\">Sometimes known as Test-First Development, Test Driven Development was introduced
          by Kent Beck, one
          of the creators of Extreme Programming (XP).</p>
        <p style=\"text-align:justify\">Test Driven Development is a software development method
          that involves writing automated test code first and developing the least amount of code necessary to pass
          that test later.</p>
        <p style=\"text-align:justify\">The entire project is broken down into small, client-valued features that need to
          be developed
          in the shortest possible development cycle. Based on clients' requirements and specifications, tests are
          written. The tests designed in the above stage are used to design and write the production code.</p>
        <p style=\"text-align:justify\">TDD can be categorized into two levels: Acceptance TDD (ATDD) requiring a distinct
          acceptance test and
          Developer TDD (DTDD) involving writing a single developer test. TDD has become popular because of the
          numerous advantages it offers like rapid and reliable results, constant feedback, and reduced debugging
          time.</p>



      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Adaptive Software Development</h5>

        <p style=\"text-align:justify\">Adaptive Software Development (ASD) grew out of the rapid application development
          work by Jim Highsmith
          and Sam Bayer.</p>
        <p style=\"text-align:justify\">The highlights of ASD are constant adaptation of processes to the work at hand,
          provision
          of solutions to problems surfacing in large projects, and iterative, incremental development with continuous
          prototyping.</p>
        <p style=\"text-align:justify\">Being a risk-driven and a change-tolerant development approach, ASD believes a
          plan cannot admit
          uncertainties and risks as this indicates a flawed and failed plan. ASD is feature-based and target-driven.
        </p>
        <p style=\"text-align:justify\">
          The first phase of development in ASD is Speculate (as opposed to Planning) followed by the Collaborate
          and Learn phases.</p>



      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Agile Unified
          Process</h5>


        <p style=\"text-align:justify\">Agile Unified Process (AUP) evolved from IBM's Rational Unified Process.</p>
        <p style=\"text-align:justify\">Developed by Scott Ambler, AUP
          combines industry-tried-and-tested Agile techniques such as Test Driven Development (TDD), Agile
          Modeling, agile change management, and database refactoring, to deliver a working product of the best
          quality.
        </p>
        <p style=\"text-align:justify\">
          AUP models its processes and techniques on the values of Simplicity, Agility, Customizability,
          Self organization,
          Independence of tools, and focus on high-value activities. The AUP principles and values are
          put into action in the phases of Inception, Elaboration, Construction, and Transition.</p>




      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Domain Driven Development</h5>


        <p style=\"text-align:justify\">Domain-driven design is an Agile development approach meant for handling complex
          designs with
          implementation linked to an evolving model.</p>
        <p style=\"text-align:justify\">It was conceptualized by Eric Evans in 2004 and revolves
          around the design of a core domain. \"Domain\" is defined as an area of activity to which the user applies a
          program or functionality. Many such areas are batched and a model is designed.</p>
        <p style=\"text-align:justify\">The model consists of a
          system of abstractions that can be used to design the overall project and solve the problems related to the
          batched domains. </p>
        <p style=\"text-align:justify\">The core values of DDD include domain-oriented, model-driven design, ubiquitous
          language, and a bounded context.</p>
        <p style=\"text-align:justify\">
          In DDD, ubiquitous language is established and the domain is modeled. Then design, development, and
          testing follow. Refining and refactoring of the domain model is done until it is satisfactory.</p>

      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5><a name=\"scrum\"></a>SCRUM</h5>
              <a href=\"/home/scrumsixmins\" target=\"_blank\"> <img class=\"img-fluid\" src=\"/images/scruminsixmins.png\" title=\"Scrum in Just Six Minutes\"></a><br>


        <p style=\"text-align:justify\">Scrum is an agile process most commonly used for product development, especially
          software development.</p>
        <p style=\"text-align:justify\">Scrum is a project management framework that is applicable to any project with
          aggressive deadlines, complex requirements and a degree of uniqueness.</p>
        <p style=\"text-align:justify\"> In Scrum, projects move forward via a series of iterations called sprints. Each
          sprint is typically two to four weeks long. <br>
          The idea behind \"Agile\" and Scrum in particular is that each sprint must produce value, typically in the form
          of working software.<br>I.e. as it is typically difficult to do long range planning
          as is envisaged in Traditional Project Management, Scrum's goal is to produce valuable products
          incrementally (<a href=\"/productincrement\" target=\"_blank\">in slices</a>); sprint by sprint which pass muster in the \"<a href=\"/images/pppmcperscrumedited.png\" target=\"_blank\">Sprint Review (Demonstrate and Validate process #16)</a>.\" </p>


        <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
          data-target=\"#collapsedepth\" aria-expanded=\"false\" aria-controls=\"collapsedepth\">More depth on Scrum<br>via
          the dashboards<br>
        </button>

        <div class=\"collapse\" id=\"collapsedepth\">
          <div class=\"container\">
            <div class=\"card text-center\">
              <h5 class=\"card-header\" align=\"center\">&nbsp;</h5>
              <div class=\"card-body text-center\">
                <h5>The Scrum Values</h5>

                <br> <br><a href=\"/homeviewvideo/resources/scrumvalues.mp4\" target=\"_blank\"><img alt=\"Scrum Values\"
                    class=\"img-fluid\" src=\"/images/scrumvalues.jpg\"></a>

                <p>
                  <i>Click the image above for more information</i></p>
                <hr>
                <br>

                <h5>The Scrum Process Flow</h5>
                <br>






                <p>

                  <img alt=\"sprint with PP and PMC\" class=\"img-fluid\" src=\"/images/Scrumprocessswirl.jpg\"></p>
                  <h5>Scrum's Goal:
                    <br>Are you producing and able to <a href=\"/release\" target=\"_blank\"
                      title=\"release\"><u>release</u></a>
                    <a href=\"/workingsoftware\" target=\"_blank\" title=\"working software\"><u>working software</u></a>
                    <br>as a <a href=\"/productincrement\" target=\"_blank\" title=\"product increment\"><u>next product
                        increment</u></a><br>that is also &quot;potentially
                    shippable code?&quot;</h5><img alt=\"sprint bottom line\" class=\"img-fluid\"
                    src=\"/images/scrumbacklogs.png\"><br>
                  <hr>
                  <p style=\"font-size:small\"><a href=\"/cmmidevdash\" target=\"_blank\">Click here</a> to see PP (Project
                    Planning) &amp; PMC (Project Monitoring &amp; Control) at Capability Maturity Level 2.<br>Find also
                    the CM L2 REQM and CM processes?<br>
                    <a href=\"/\" target=\"_blank\">Click here</a> to see where PP and PMC are on the PMBOK 6 Dashboard?<br>
                    <a href=\"/pmway/?slide=7\" target=\"_blank\">What about the CM L3
                      processes Verification and Validation</a>?</p>
                  <br><img alt=\"sprint with PP and PMC\" class=\"img-fluid\"
                    src=\"/images/sprintmethodwithpppmc.jpg\"><br><br>

                  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#collapsebigdog\" aria-expanded=\"false\" aria-controls=\"collapsebigdog\">The PO (Big Dog)
                    Role
                  </button>

                  <div class=\"collapse\" id=\"collapsebigdog\">
                    <div class=\"container\">
                      <div class=\"card text-center\">
                        <h5 class=\"card-header\" align=\"center\">While all roles in Scrum are at the same
                          level<br>It begins and ends with the Big Dog</h5>
                        <div class=\"card-body text-center\">


                          <table align=\"center\" style=\"width: 70%\" border=\"1\">
                            <tr>
                              <td>
                                <p align=\"center\">The image above explains the crucial role of
                                  <br>the Product Owner <br>(the team's \"Big Dog\")<br>
                                  to define clear User Stories before sprint starts,<br>and to then ratify team
                                  performance via approval of the &quot;Demo Deck&quot;<br>(after Demonstrate and
                                  Validate Sprint process
                                  #16).<br>This facilitates PP and PMC and allows the team to
                                  look and move foreword, <br>(not looking over their shoulders) <br>focusing sustained
                                  effort (and if necessary improvements)
                                  on the teams <a href=\"/gamestats\" target=\"_blank\"
                                    title=\"Can the team up their game stats?  CM L2+ is all about improving quality and productivity\">production
                                    stats</a><br>for next sprint.<br>
                                  &quot;PMWay loves American Football
                                  because the
                                  game is played on a field that looks like a ruler!&quot;<br><a href=\"/home/af\"
                                    target=\"_blank\"><img alt=\"Lord Kelvin\" class=\"img-fluid\"
                                      src=\"/images/gg_measure1.png\"><br>Click here to see why</a><br> Based
                                  on this analogy the Product Owner is the team's
                                  Quarterback&quot;</p>
                              </td>
                            </tr>
                          </table>

                          <br>



                        </div>
                        <div class=\"card-footer\">

                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>




                  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#collapsescrumgovernance\" aria-expanded=\"false\"
                    aria-controls=\"collapsescrumgovernance\">Governance in Scrum</button>

                  <div class=\"collapse\" id=\"collapsescrumgovernance\">
                    <div class=\"container\">
                      <div class=\"card text-center\">
                        <h5 class=\"card-header\" align=\"center\"></h5>
                        <div class=\"card-body text-center\">






                          <img alt=\"\" title=\"scrum governance\" class=\"img-fluid\" src=\"/images/scrumgovernance.png\">



                        </div>
                        <div class=\"card-footer\">
                          Page above from Scrum for Dummies 2018
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#collapsevaluemodel\" aria-expanded=\"false\" aria-controls=\"collapsevaluemodel\">The Scrum
                    Value Model
                  </button>

                  <div class=\"collapse\" id=\"collapsevaluemodel\">
                    <div class=\"container\">
                      <div class=\"card text-center\">
                        <p class=\"card-header\" align=\"center\">Note below how value is produced in agile's Scrum method
                        </p>
                        <div class=\"card-body text-center\">


                          </a>


                          <a href=\"/scrum\" target=\"_blank\"
                            title=\"Click the image to go to a summary of all the scrum processes\"><img
                              alt=\"Scrum Value Model\" class=\"img-fluid\" src=\"/images/scrumvaluemodelroles.png\"></a><br>




                        </div>
                        <div class=\"card-footer\">
                          <p align=\"center\">Note above that the first 3 stages occur before sprints start</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <img alt=\"sprint with PP and PMC\" class=\"img-fluid\" src=\"/images/pppmcperscrumedited.png\"><br>
                  <hr>

                  <br>
                  <h5>The Scrum Processes</h5>

                  <br>
                  <img class=\"img-fluid\" src=\"/images/scrumdashnochapters.png\"
                    title=\"From the Scrum Body of Knowledge 3rd edition\">
                  <br>
                  <br>
                  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#collapseprocdetail\" aria-expanded=\"false\" aria-controls=\"collapseprocdetail\">Click
                    here for more detail <br>on the Scrum processes
                  </button>

                  <div class=\"collapse\" id=\"collapseprocdetail\">
                    <div class=\"container\">
                      <div class=\"card text-center\">
                        <h5 class=\"card-header\" align=\"center\"></h5>
                        <div class=\"card-body text-center\">



                          <a href=\"/pmway/?slide=16\" title=\"\" target=\"_blank\">
                            <img alt=\"\" class=\"img-fluid\" src=\"/images/scrumprocessespppmcadjusted.png\"></a>
                          <br>
                          <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#collapsescrumnotes\" aria-expanded=\"false\"
                            aria-controls=\"collapsescrumnotes\">Scrum Processes<br>Their importance for CM L2+!
                          </button>

                          <div class=\"collapse\" id=\"collapsescrumnotes\">
                            <div class=\"container\">
                              <div class=\"card text-center\">
                                <h5 class=\"card-header\" align=\"center\">This is how to operate at CM L2+ with Agile's
                                  Scrum Methodology</h5>
                                <div class=\"card-body text-center\">

                                  <p>The image above explains the PLAN AND ESTIMATE processes in more
                                    detail.<br>These PLAN AND ESTIMATE steps / processes (often glossed over by
                                    scrum teams), if correctly done, sets up the ability to complete
                                    the Demonstrate and Validate Sprint process (#16).<br>This
                                    &quot;correct way to Mind the Gap&quot; is how the Product Owner can agree that
                                    the sprint was a success and produced / <a href=\"/release\"
                                      target=\"_blank\">released</a> <a href=\"/workingsoftware\" target=\"_blank\">working
                                      software</a>. <a href=\"/homesave/resources/tarpitchapter.pdf\" target=\"_blank\"
                                      title=\"Avoid the dangers of the tarpit.  Mind the Gap!\">Remember the \"tar pit\"
                                      analogy</a>. I.e. the tar pit (La Brea tar pits in the USA is a good example) was
                                    used by \"Frederick Brooks as the analogy to where software projects can, if not
                                    carefully managed, get stuck in and die! To proceed carefully across the tar pit and
                                    not get lost or stuck we must \"<a href=\"/pmway/?slide=7\" target=\"_blank\">Mind the Gap</a>\"
                                    sprint by sprint. <br>
                                    <a href=\"/pmway/?slide=16\" title=\"\" target=\"_blank\"><img alt=\"tar pit\" class=\"img-fluid\"
                                        src=\"/images/tarpitstwo.jpg\"></a><br> <b><i>Minding the Gap thus protects the
                                        scrum team</i></b>!<br>Remember that Scrum (Agile Project Management), unlike
                                    Traditional Project Management has made the many planning steps
                                    (in the <a href=\"/\" target=\"_blank\">Planning Process Group of the PMBOK</a>)
                                    unnecessary.
                                    However, if the
                                    <span lang=\"en-za\"></span>process to \"Mind the Gap\" (Project Planning PP and Project
                                    Monitoring and Control PMC)
                                    for Scrum presented here is not followed (and working software is not produced),
                                    this can be a serious risk to project success! <br>To ensure more accuracy a \"demo
                                    deck\" should be signed off by the Product Owner after demonstration to signal
                                    that the sprint has completed successfully and the GAP minded.<br>If this (CM L2
                                    PP and PMC processes checkpoint
                                    signoff) <a href=\"/pin\">is not possible</a> then this is a risk.&nbsp;
                                    I.e. a note should be made by the Scrum Master in the Sprint Retrospective minutes /
                                    or a project log should be produced
                                    for audit purposes.<br>Click the image above to understand why Planning and
                                    Estimating is so
                                    important and how it fits into the PDCA cycle <br>in order to
                                    achieve stability at Capability Maturity Level 2+.</p>
                                </div>
                                <div class=\"card-footer\">

                                </div>
                              </div>
                            </div>
                          </div>



                        </div>
                        <div class=\"card-footer\">

                        </div>
                      </div>
                    </div>
                  </div>

                  <br>
                  <br>
                  <hr>

                  <br><a href=\"/home/hamandeggs\" target=\"_blank \"> Click here for &quot;Scrum in 2 pages.&quot;&nbsp;
                    <br><i>Can you spot who are the Pigs and who are the Chickens and why?</i></a>
                  <br>
                  <br><a href=\"/scrum\" target=\"_blank\">Click here for an overview of the essence of
                    the &quot;Scrum
                    Dimensions,<br>from the Scrum Body of Knowledge. <br><i>These dimensions
                      (the Values, Principles, Processes and Aspects) comprise what is needed
                      from the SBOK in order to pass the Foundation, Scrum Master and Scrum
                      Product Owners exams</i></a>.<br><br>
                      <a href=\"/scrumrca\" target=\"_blank\">Click here if you want to Improve your Scrum Game Stats?</a>

              </div>
              <div class=\"card-footer\">

              </div>
            </div>
          </div>
        </div>



        <br>
        <br>



      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>PRINCE2 Agile</h5>
        <p style=\"text-align:center\">PMWay is of the opinion that PRINCE2 Agile is a \"best and safest way\" to run
          agile.<br><a href=\"\\?slide=5\" target=\"_blank\">Capability Maturity Level 3</a> and above is required to run
          this well!<br>
          The image below, PMWay believes, says what needs to be said about the use of PRINCE2 Agile.</p>
        <img alt=\"PRINCE2 Agile\" class=\"img-fluid\" src=\"/images/p2afighter.png\">
        <div style=\"text-align:center\">


          <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
            data-target=\"#collapseagilehappens\" aria-expanded=\"false\" aria-controls=\"collapseagilehappens\">Where Agile
            happens<br> in PRINCE2 Agile
          </button>

          <div class=\"collapse\" id=\"collapseagilehappens\">
            <div class=\"container\">
              <div class=\"card text-center\">
                <h5 class=\"card-header\" align=\"center\">Under BOARD control (with Sponsor accountable): now agile away...
                </h5>
                <div class=\"card-body text-center\">









                  <img alt=\"Where agile happens\" class=\"img-fluid\" src=\"/images/prince2modelprocwhereagilehappens.png\">
                </div>
                <div class=\"card-footer\">

                </div>
              </div>
            </div>
          </div>



        </div>



        <br>





      </div>
    </div>


    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <p class=\"small text-center\"><em>Hover your mouse over the image below.</em></p>


        <img alt=\"\" class=\"img-fluid\" src=\"/images/agile-manifesto.jpg\"
           onmouseover=\"this.src='/images/agilemanifestoadded.jpg'\" onmouseout=\"this.src='/images/agile-manifesto.jpg'\">
        <br>
        <br>
\t\t  <p align=\"center\"><a href=\"/home/snowbird\" target=\"_blank\"><u>Snowbird</u></a></p>
\t\t  <br>
\t\t    <p align=\"center\"><a href=\"/home/snowbird#heart\" target=\"_blank\" ><u>Heart of Agile</u></a></p>
\t\t  <br>
\t\t   <p align=\"center\"><img alt=\"heart of agile\" class=\"img-fluid\" src=\"/images/heartofagile.png\" onmouseover=\"this.src='/images/heartofagileexpanded.jpg'\" onmouseout=\"this.src='/images/heartofagile.png'\"></p>
\t\t  <br>
\t\t  <br>

      </div>
    </div>


    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">



        <h5>One Project Methodology does not fit all Project Types.</h5>



        <p style=\"text-align:justify\">The project selection matrix from Dr. Robert. K. Wysocki (below) shows one how to
          quickly decide
          what project method best suites the type of project based on the criteria of clarity or lack of clarity of the
          project goal or solution being considered.&nbsp;
          <br>Note: While all projects are risky business, agile projects are very risky business!<br>This 'type of
          project methodology' decision can also
          be based on how risk-averse is your organization.&nbsp;
          <br><br>PMWay's recommended approach is using PRINCE2 Agile
          as the recipe you follow; and
          PMBOK version 6 for the ingredients. The mandatory use of the PRINCE2 Agile Board (who have the relevant
          training, experience, ability, agility and power
          within the organization - to (&quot;<a href=\"/home/removetheredbeads\" target=\"_blank\">remove the red
            beads</a>&quot;) is the strategic driver for success for the PRINCE2 Agile method, PMWay (from considerable
          experience of the method's use in the Public and Private Sector) understands.&nbsp;
          Success in this regards is the dynamic
          &quot;tension to produce results&quot; from the empowered board who in
          turn remove the red beads and empower the project manager
          and team.<br><br>While PRINCE2 Agile is not shown in the diagram below, being a blend of the two,
          it would straddle
          across TPM and APM. <br></p>
        <img alt=\"project selection matrix\" class=\"img-fluid\" src=\"/images/projselectmatrix.png\">


        <br>
        <br>


    </div>
 </div>
\t</div>
</div>






<a class=\"carousel-control-prev\" href=\"#i\" role=\"button\" data-slide=\"prev\">
  <i class=\"fas fa-lg fa-chevron-left\" style=\"color:black\"></i>
  <span class=\"sr-only\">Previous</span>
</a>
<a class=\"carousel-control-next\" href=\"#i\" role=\"button\" data-slide=\"next\">
  <i class=\"fas fa-lg fa-chevron-right\" style=\"color:black\"></i>

  <span class=\"sr-only\">Next</span>
</a>

</div>


    <script src=\"/bootstrapfourfivetwo/js/jquery.js\"></script>
    <script src=\"/bootstrapfourfivetwo/js/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"/bootstrapfourfivetwo/css/jquery-ui.css\"></link>
<script>
  \$(document).ready(function () {
    function qs(key) {
      key = key.replace(/[*+?^\$.\\[\\]{}()|\\\\\\/]/g, \"\\\\\$&\"); // escape RegEx meta chars
      var match = location.search.match(new RegExp(\"[?&]\" + key + \"=([^&]+)(&|\$)\"));
      var slide = match && decodeURIComponent(match[1].replace(/\\+/g, \" \"));
      if (Math.floor(slide) == slide && \$.isNumeric(slide))
        return parseInt(slide);
      else
        return 0;
    }
    \$('#i').carousel((qs('slide')) - 1);
  });
</script>
<br>
<br>
<br>
<br>

{% endif %}


{% if not user %}


<style>
  /* Make the image fully responsive */



  .carousel-indicators {
    position: absolute;
    bottom: -35px;
  }

  .carousel-indicators li {
    width: 10px;
    height: 10px;
    border-radius: 100%;
    background-color: #040404;
  }

  .navbar {
    position: relative;
    width: 100%;
    z-index: 10;
    max-width: 100%;
  }

  /*carousel indicators */
  .carousel-indicators li,
    {
    background: #f00 none repeat scroll 0 0;
    border: 0 none;
    border-radius: 50%;
    height: 30px;
    margin: 3px;
    opacity: 0.5;
    width: 30px;
  }

  /*active slide indicator */
  .carousel-indicators .active {
    background: #fff none repeat scroll 0 0;
    border: 4px solid #040404;
  }


</style>


<div class=\"container-fluid\" align=\"center\" >
  <h5>Agile Methods - High Level Overview</h5>
  <p><a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"0\"
      title=\"Slide 1: Lean and Kanban\">Lean and Kanban</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"1\"
      title=\"Slide 2: XP\">
      XP</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"2\"
      title=\"Slide 3: Crystal\">
      Crystal</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"3\"
      title=\"Slide 4: DSDM\">
      DSDM</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"4\"
      title=\"Slide 5: FDD\">
      FDD</a> |
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\" data-slide-to=\"5\"
      title=\"Slide 6: TDD\">
      TDD |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"6\" title=\"Slide 7: ASD\">
        ASD</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"7\" title=\"Slide 8: AUP\">
        AUP</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"8\" title=\"Slide 9: DDD\">
        DDD</a> <br>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"9\" title=\"Slide 10: SCRUM\">
        SCRUM</a> |
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"10\" title=\"Slide 11: PRINCE2Agile\">
        PRINCE2Agile</a>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"11\" title=\"Slide 12: The Agile Manifesto\">
        <br>Agile Manifesto</a>
      <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-target=\"#i\"
        data-slide-to=\"12\" title=\"Slide 13: The Project Method Selection Matrix\">
        <br>Project Methodology Selection Matrix</a>
  </p>
</div>

<div id=\"i\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#i\" data-slide-to=\"0\" title=\"Slide 1: Lean and Kanban\" class=\"active\"></li>
    <li data-target=\"#i\" data-slide-to=\"1\" title=\"Slide 2: XP\"></li>
    <li data-target=\"#i\" data-slide-to=\"2\" title=\"Slide 3: Crystal\"></li>
    <li data-target=\"#i\" data-slide-to=\"3\" title=\"Slide 4: DSDM\"></li>
    <li data-target=\"#i\" data-slide-to=\"4\" title=\"Slide 5: FDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"5\" title=\"Slide 6: TDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"6\" title=\"Slide 7: ASD\"></li>
    <li data-target=\"#i\" data-slide-to=\"7\" title=\"Slide 8: AUP\"></li>
    <li data-target=\"#i\" data-slide-to=\"8\" title=\"Slide 9 DDD\"></li>
    <li data-target=\"#i\" data-slide-to=\"9\" title=\"Slide 10: SCRUM\"></li>
    <li data-target=\"#i\" data-slide-to=\"10\" title=\"Slide 11: Prince2Agile\"></li>
    <li data-target=\"#i\" data-slide-to=\"11\" title=\"Slide 12: The Agile Manifesto\"></li>
    <li data-target=\"#i\" data-slide-to=\"12\" title=\"Slide 13: The Project Method Selection Matrix\"></li>





  </ol>

  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\" align=\"center\">

      <div class=\"container\" style=\"max-width:70%\">
     <h5>Lean and Kanban</h5>

        <p style=\"text-align:justify\">The Lean concept optimizes an organization's system to produce valuable results
          based on its resources,
          needs, and alternatives while reducing waste.</p>
        <p style=\"text-align: left\">Waste could be from building the wrong thing, failure to learn,
          or practices that impede the process. Because these factors are dynamic in nature, a lean organization
          evaluates its entire system and continuously fine tunes its processes.</p>
        <p style=\"text-align: left\">The foundation of Lean is that the
          reduction of the length of each cycle (i.e., an iteration) leads to an increase in productivity by reducing
          delays, aids in error detection at an early stage, and consequently reduces the total amount of effort
          required
          to finish a task. Lean software principles have been successfully applied to software development.</p>
        <p style=\"text-align: left\">Kanban literally means a 'signboard' or 'billboard' and it espouses the use of
          visual aids to assist and track
          production.</p>
        <p style=\"text-align: left\">The concept was introduced by Taiichi Ohno considered to be the father of the Toyota
          Production Systems (TPS). The use of visual aids is effective and has become a common practice.</p>
         <p style=\"text-align: left\">A Kanban board (a pull system) looks a lot like a task board, but they’re not the same thing. You’ve seen task boards in discussions of Scrum and XP, so it’s easy to look at a
Kanban board and assume it’s basically the same thing.
<br><b><large>It’s not!</large></b><br> The purpose of a task board is to make the state of current tasks clear to everybody on a team. Task boards help a team
stay on top of the current status of their project. Kanban
boards are a little different. They are created to help a team
understand how work flows through their process. Because
work items are kept at a feature level on a Kanban board,
they aren’t the best way to know exactly which task each
team member is working on—but they’re great for helping
you see how much work is in progress in each state of your
process.</p>  <p style=\"text-align: left\">These methods gained
          attention due to
          their practice at Toyota, a leader in process management. Lean Kanban integrates the use of the
          visualization methods as prescribed by Kanban along with the principles of Lean creating a visual
          incremental evolutionary process management system.</p>

\t\t  <img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean2.png\"><br><br>

\t<p align=\"centere\">   <img alt=\"Image of Agile\" class=\"img-fluid\" src=\"/images/lean1.png\"><br><br>



<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean4.png\"><br><br>

\t\t\t\t<img alt=\"Image of Lean down to to XP\" class=\"img-fluid\" src=\"/images/lean5.png\"></p>







      </div>


    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>
          Extreme Programming</h5>

        <p style=\"text-align:justify\">Extreme Programming (XP), which originated in Chrysler Corporation, gained
          traction in the 1990's.</p>
        <p style=\"text-align: left\">XP makes it possible to keep the cost of changing software from rising radically
          with time. The key attributes of
          XP include incremental development, flexible scheduling, automated test codes, verbal communication,
          ever-evolving design, close collaboration, and tying in the long- and short-term drives of all those involved.
        </p>
        <p style=\"text-align: left\">XP values communication, feedback, simplicity, and courage. The different roles in
          the XP approach include
          customer, developer, tracker, and coach. It prescribes various coding, developer, and business practices as
          well as events and artifacts to achieve effective and efficient development. XP has been extensively adopted
          due to its well defined engineering practices.</p>
<p align=\"left\">While somewhat dated <a href=\"http://www.extremeprogramming.org\" target=\"_blank\">extremeprogramming.org</a> is still an excellent resource on this method.  NB:  Look at bottom right of each page for the XP [Next Page] Buttons.</p>
      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Crystal Methods</h5>



        <p style=\"text-align:justify\">Crystal methodologies of software development were introduced by Alistair Cockburn
          in the early 1990s.</p>
        <p style=\"text-align:justify\">Crystal methods are intended to be people-centric, lightweight, and easy to adapt.
          Because people are
          primary, the developmental processes and tools are not fixed but are rather adjusted to the specific
          requirements and characteristics of the project. </p>
        <p style=\"text-align:justify\">The color spectrum is used to decide on the variant for a
          project. Factors such as comfort, discretionary money, essential money, and life play a vital role in
          determining the 'weight' of the methodology, which is represented in various colors of the spectrum. The
          Crystal family is divided into Crystal Clear, Crystal Yellow, Crystal Orange, Crystal Orange Web, Crystal
          Red, Crystal Maroon, Crystal Diamond, and Crystal Sapphire.</p>
        <p style=\"text-align:justify\">
          All Crystal methods have four roles: executive sponsor, lead designer, developers, and experienced users.
          Crystal Methods recommend various strategies and techniques to achieve agility. A Crystal project cycle
          consists of chartering, delivery cycle, and wrap-up.</p>


      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>
          <a name=\"dsdm\"></a>DSDM(AgilePM)</h5>

        <p style=\"text-align:justify\">The Dynamic Systems Development Methods (DSDM) framework was initially published
          in 1995 and is
          administered by the DSDM Consortium.</p>
        <p style=\"text-align:justify\">DSDM sets quality and effort in terms of cost and time at the outset
          and adjusts the project deliverables to meet set criteria by prioritizing the deliverables into \"Must have\",
          \"Should have\", \"Could have\", and \"Won't have\" categories (using the MoSCoW prioritization technique).</p>
        <p style=\"text-align:justify\">DSDM is a system-oriented method with six distinct phases: Pre-project;
          Feasibility; Foundations;
          Exploration and Engineering; Deployment; and Benefit Assessment.</p>
        <p style=\"text-align:justify\">
          A later version of DSDM known as DSDM Atern, was introduced in 2007, focuses on both prioritization of
          deliverables and consistent user or customer collaboration. The newest version is inspired by an Arctic Tern,
          making it a developer-centric software development framework for on-time and in-budget delivery of
          user valued
          and quality-controlled project features.</p>


      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Feature Driven Development</h5>


        <p style=\"text-align:justify\">Feature Driven Development (FDD) was introduced by Jeff De Luca in 1997 and
          operates on the principle of
          completing a project by breaking it down into small, client-valued functions that can be delivered in less
          than
          two weeks time. FDD has two core principles: software development is a human activity and software
          development is a client-valued functionality.</p>
        <p style=\"text-align:justify\">FDD defines six major roles: Project Manager, Chief Architect, Development
          Manager, Chief Programmers,
          Class Owners, and Domain Experts with a number of supporting roles.</p>
        <p style=\"text-align:justify\">The FDD process is iterative and
          consists of developing an overall model, building a feature list, and then planning, designing, and building
          by
          feature.</p>



      </div>


    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Test Driven Development</h5>


        <p style=\"text-align:justify\">Sometimes known as Test-First Development, Test Driven Development was introduced
          by Kent Beck, one
          of the creators of Extreme Programming (XP).</p>
        <p style=\"text-align:justify\">Test Driven Development is a software development method
          that involves writing automated test code first and developing the least amount of code necessary to pass
          that test later.</p>
        <p style=\"text-align:justify\">The entire project is broken down into small, client-valued features that need to
          be developed
          in the shortest possible development cycle. Based on clients' requirements and specifications, tests are
          written. The tests designed in the above stage are used to design and write the production code.</p>
        <p style=\"text-align:justify\">TDD can be categorized into two levels: Acceptance TDD (ATDD) requiring a distinct
          acceptance test and
          Developer TDD (DTDD) involving writing a single developer test. TDD has become popular because of the
          numerous advantages it offers like rapid and reliable results, constant feedback, and reduced debugging
          time.</p>



      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Adaptive Software Development</h5>

        <p style=\"text-align:justify\">Adaptive Software Development (ASD) grew out of the rapid application development
          work by Jim Highsmith
          and Sam Bayer.</p>
        <p style=\"text-align:justify\">The highlights of ASD are constant adaptation of processes to the work at hand,
          provision
          of solutions to problems surfacing in large projects, and iterative, incremental development with continuous
          prototyping.</p>
        <p style=\"text-align:justify\">Being a risk-driven and a change-tolerant development approach, ASD believes a
          plan cannot admit
          uncertainties and risks as this indicates a flawed and failed plan. ASD is feature-based and target-driven.
        </p>
        <p style=\"text-align:justify\">
          The first phase of development in ASD is Speculate (as opposed to Planning) followed by the Collaborate
          and Learn phases.</p>



      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Agile Unified
          Process</h5>


        <p style=\"text-align:justify\">Agile Unified Process (AUP) evolved from IBM's Rational Unified Process.</p>
        <p style=\"text-align:justify\">Developed by Scott Ambler, AUP
          combines industry-tried-and-tested Agile techniques such as Test Driven Development (TDD), Agile
          Modeling, agile change management, and database refactoring, to deliver a working product of the best
          quality.
        </p>
        <p style=\"text-align:justify\">
          AUP models its processes and techniques on the values of Simplicity, Agility, Customizability,
          Self organization,
          Independence of tools, and focus on high-value activities. The AUP principles and values are
          put into action in the phases of Inception, Elaboration, Construction, and Transition.</p>




      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>Domain Driven Development</h5>


        <p style=\"text-align:justify\">Domain-driven design is an Agile development approach meant for handling complex
          designs with
          implementation linked to an evolving model.</p>
        <p style=\"text-align:justify\">It was conceptualized by Eric Evans in 2004 and revolves
          around the design of a core domain. \"Domain\" is defined as an area of activity to which the user applies a
          program or functionality. Many such areas are batched and a model is designed.</p>
        <p style=\"text-align:justify\">The model consists of a
          system of abstractions that can be used to design the overall project and solve the problems related to the
          batched domains. </p>
        <p style=\"text-align:justify\">The core values of DDD include domain-oriented, model-driven design, ubiquitous
          language, and a bounded context.</p>
        <p style=\"text-align:justify\">
          In DDD, ubiquitous language is established and the domain is modeled. Then design, development, and
          testing follow. Refining and refactoring of the domain model is done until it is satisfactory.</p>

      </div>
    </div>

    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5><a name=\"scrum\"></a>SCRUM</h5>
               <a href=\"/home/scrumsixmins\" target=\"_blank\"> <img class=\"img-fluid\" src=\"/images/scruminsixmins.png\" title=\"Scrum in Just Six Minutes\"></a><br>
  <p style=\"text-align:justify\">Scrum is an agile process most commonly used for product development, especially
          software development.</p>
        <p style=\"text-align:justify\">Scrum is a project management framework that is applicable to any project with
          aggressive deadlines, complex requirements and a degree of uniqueness.</p>
        <p style=\"text-align:justify\"> In Scrum, projects move forward via a series of iterations called sprints. Each
          sprint is typically two to four weeks long. <br>
          The idea behind \"Agile\" and Scrum in particular is that each sprint must produce value, typically in the form
          of working software.<br>I.e. as it is typically difficult to do long range planning
          as is envisaged in Traditional Project Management, Scrum's goal is to produce valuable products
          incrementally (<a href=\"/productincrement\" target=\"_blank\">in slices</a>); sprint by sprint which pass muster in the \"<a href=\"/images/pppmcperscrumedited.png\" target=\"_blank\">Sprint Review (Demonstrate and Validate process #16)</a>.\"</p>


        <br>
        <br>



      </div>
    </div>
    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <h5>PRINCE2 Agile</h5>
        <p style=\"text-align:center\">PMWay is of the opinion that PRINCE2 Agile is a \"best and safest way\" to run
          agile.<br><a href=\"/login\" target=\"_blank\">Capability Maturity Level 3</a> and above is required to run
          this well!<br>
          The image below, PMWay believes, says what needs to be said about the use of PRINCE2 Agile.</p>
        <img alt=\"PRINCE2 Agile\" class=\"img-fluid\" src=\"/images/p2afighter.png\">
        <div style=\"text-align:center\">


          <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=\"collapse\"
            data-target=\"#collapseagilehappens\" aria-expanded=\"false\" aria-controls=\"collapseagilehappens\">Where Agile
            happens<br> in PRINCE2 Agile
          </button>

          <div class=\"collapse\" id=\"collapseagilehappens\">
            <div class=\"container\">
              <div class=\"card text-center\">
                <h5 class=\"card-header\" align=\"center\">Under BOARD control (with Sponsor accountable): now agile away...
                </h5>
                <div class=\"card-body text-center\">









                  <img alt=\"Where agile happens\" class=\"img-fluid\" src=\"/images/prince2modelprocwhereagilehappens.png\">
                </div>
                <div class=\"card-footer\">

                </div>
              </div>
            </div>
          </div>



        </div>



        <br>





      </div>
    </div>


    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">
        <p class=\"small text-center\"><em>Hover your mouse over the image below.</em></p>


        <img alt=\"\" class=\"img-fluid\" src=\"/images/agile-manifesto.jpg\"
           onmouseover=\"this.src='/images/agilemanifestoadded.jpg'\" onmouseout=\"this.src='/images/agile-manifesto.jpg'\">
        <br>
        <br>
 <p align=\"center\"><a href=\"/home/snowbird\" target=\"_blank\"><u>Snowbird</u></a></p>
   <br>
\t\t   <p align=\"center\"><a href=\"/home/snowbird#heart\" target=\"_blank\" ><u>Heart of Agile</u></a></p>
\t\t  <br>
\t\t   <p align=\"center\"><img alt=\"heart of agile\" class=\"img-fluid\" src=\"/images/heartofagile.png\" onmouseover=\"this.src='/images/heartofagileexpanded.jpg'\" onmouseout=\"this.src='/images/heartofagile.png'\"></p>
\t\t  <br><br>
      </div>
    </div>


    <div class=\"carousel-item\" align=\"center\">
      <div class=\"container\" style=\"max-width:70%\">



        <h5>One Project Methodology does not fit all Project Types.</h5>



        <p style=\"text-align:justify\">The project selection matrix from Dr. Robert. K. Wysocki (below) shows one how to
          quickly decide
          what project method best suites the type of project based on the criteria of clarity or lack of clarity of the
          project goal or solution being considered.&nbsp;
          <br>Note: While all projects are risky business, agile projects are very risky business!<br>This 'type of
          project methodology' decision can also
          be based on how risk-averse is your organization.&nbsp;
          <br><br>PMWay's recommended approach is using PRINCE2 Agile
          as the recipe you follow; and
          PMBOK version 6 for the ingredients. The mandatory use of the PRINCE2 Agile Board (who have the relevant
          training, experience, ability, agility and power
          within the organization - to (&quot;<a href=\"/home/removetheredbeads\" target=\"_blank\">remove the red
            beads</a>&quot;) is the strategic driver for success for the PRINCE2 Agile method, PMWay (from considerable
          experience of the method's use in the Public and Private Sector) understands.&nbsp;
          Success in this regards is the dynamic
          &quot;tension to produce results&quot; from the empowered board who in
          turn remove the red beads and empower the project manager
          and team.<br><br>While PRINCE2 Agile is not shown in the diagram below, being a blend of the two,
          it would straddle
          across TPM and APM. <br></p>
        <img alt=\"project selection matrix\" class=\"img-fluid\" src=\"/images/projselectmatrix.png\">


        <br>
        <br>


    </div>
 </div>
\t</div>
</div>






<a class=\"carousel-control-prev\" href=\"#i\" role=\"button\" data-slide=\"prev\">
  <i class=\"fas fa-lg fa-chevron-left\" style=\"color:black\"></i>
  <span class=\"sr-only\">Previous</span>
</a>
<a class=\"carousel-control-next\" href=\"#i\" role=\"button\" data-slide=\"next\">
  <i class=\"fas fa-lg fa-chevron-right\" style=\"color:black\"></i>

  <span class=\"sr-only\">Next</span>
</a>

</div>
    <script src=\"/bootstrapfourfivetwo/js/jquery.js\"></script>
    <script src=\"/bootstrapfourfivetwo/js/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"/bootstrapfourfivetwo/css/jquery-ui.css\"></link>
<script>
  \$(document).ready(function () {
    function qs(key) {
      key = key.replace(/[*+?^\$.\\[\\]{}()|\\\\\\/]/g, \"\\\\\$&\"); // escape RegEx meta chars
      var match = location.search.match(new RegExp(\"[?&]\" + key + \"=([^&]+)(&|\$)\"));
      var slide = match && decodeURIComponent(match[1].replace(/\\+/g, \" \"));
      if (Math.floor(slide) == slide && \$.isNumeric(slide))
        return parseInt(slide);
      else
        return 0;
    }
    \$('#i').carousel((qs('slide')) - 1);
  });
</script>
<br>
<br>
<br>
<br>

{% endif %}


{% endblock %}



", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/agile.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/agile.twig");
    }
}
