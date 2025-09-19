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

/* C:\xampp\htdocs\pmway\resources\views/Home/laws.twig */
class __TwigTemplate_628e26ba2d85adfdaeaf9896b617450b extends Template
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
        if ((($tmp =  !($context["current_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "PMWay";
        }
        yield " ";
        if ((($tmp = ($context["current_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "The IT Laws";
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
        if ((($tmp = ($context["current_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "<!--BODY-->
<div class=\"container\" align=\"left\">
  <h3>Some of the core IT Laws</h3>
  <hr>
  <h5>Brook's Law</h5>
  <p>Brooks' law is a claim about software project management according to which \"adding manpower to a late software project makes it later\". <br>
    It was coined by Fred Brooks in his 1975 book The Mythical Man-Month. According to Brooks, there is an incremental person who, when added to a project, makes it take more, not less time. Brooks adds that \"nine women can't make a baby in one month\". <br>
  </p>
  <h5>Parkinson's Law</h5>
  <p>Is the adage that \"work expands so as to fill the time available for its completion\". <br>
    <br>
    It is sometimes applied to the growth of bureaucracy in an organization.  A current form of the law is not the one Parkinson refers to by that name in the article, but a mathematical equation describing the rate at which bureaucracies expand over time. Much of the essay is dedicated to a summary of purportedly scientific observations supporting the law, such as the increase in the number of employees at the Colonial Office while the British Empire declined (he shows that it had its greatest number of staff when it was folded into the Foreign Office because of a lack of colonies to administer). He explains this growth by two forces: (1) \"An official wants to multiply subordinates, not rivals\" and (2) \"Officials make work for each other.\" He notes that the number employed in a bureaucracy rose by 5-7% per year \"irrespective of any variation in the amount of work (if any) to be done\". </p>
  <h5>Millars Law</h5>
  <p>George Miller, a professor of psychology, showed that, at any one
    time, we humans are capable of concentrating on only approximately seven chunks (units
    of information). However, a typical software artifact has far more than seven
    chunks. For example, a code artifact is likely to have considerably more than seven variables,
    and a requirements document is likely to have many more than seven requirements. One way
    we humans handle this restriction on the amount of information we can handle at any one
    time is to use stepwise
    refinement . <br>
    <br>
    That is, we concentrate on those aspects that are currently
    the most important and postpone until later those aspects that are currently less critical.
    In other words, every aspect is eventually handled but in order of current importance. This
    means that we start off by constructing an artifact that solves only a small part of what we
    are trying to achieve. Then, we consider further aspects of the problem and add the resulting
    new pieces to the existing artifact. For example, we might construct a requirements document
    by considering the seven requirements we consider the most important. Then, we would consider
    the seven next most important requirements, and so on. This is an incremental process.
    Incrementation is also an intrinsic aspect of software engineering; incremental software
    development is over 45 years old [Larman and Basili, 2003]. <br><br>
\tNote:  \"The Magical Number Seven, Plus or Minus Two: Some Limits on Our Capacity for Processing Information\" is one of the most highly cited papers in psychology. It was written by the cognitive psychologist George A. Miller of Harvard University's Department of Psychology and published in 1956 in Psychological Review. It is often interpreted to argue that the number of objects an average human can hold in short-term memory is 7 ± 2.
  </p>
  <h5>Linus's Law</h5>
  <p>Linus's Law as described by Raymond is a claim about software development, named in honor of Linus Torvalds and formulated by Raymond in his essay and book 'The Cathedral and the Bazaar (1999)'. <br>
    The law states that \"given enough eyeballs, all bugs are shallow\"; or more formally: \"Given a large enough beta-tester and co-developer base, almost every problem will be characterized quickly and the fix will be obvious to someone.\" Presenting the code to multiple developers with the purpose of reaching consensus about its acceptance is a simple form of software reviewing. <br>
    Researchers and practitioners have repeatedly shown the effectiveness of various types of reviewing process in finding bugs and security issues, and also that reviews may be more efficient than testing.</p>
  <h5>Conway's Law</h5>
  <p>Conway's law is an adage named after computer programmer Melvin Conway, who introduced the idea in 1967. It states that

    \"organizations which design systems ... are constrained to produce designs which are copies of the communication structures of these organizations.\"

    The law is based on the reasoning that in order for a software module to function, multiple authors must communicate frequently with each other. Therefore, the software interface structure of a system will reflect the social boundaries of the organization(s) that produced it, across which communication is more difficult. Conway's law was intended as a valid sociological observation, although sometimes it's used in a humorous context. It was dubbed Conway's law by participants at the 1968 National Symposium on Modular Programming.</p>
  <h5>Goodheart's Law</h5>
  <p>When a measure becomes the target, it ceases to be a good measure.<br>
  I.e. All metrics of scientific evaluation are bound to be abused. Goodhart's law [...] states that when a feature of the area under inspection is picked as an indicator, then it inexorably ceases to function as that indicator because people start to game it.<br><br>
     <h5>Edwards W. Deming's 14 Observations for Management</h5>
   <p>Deming,(with his Red Bead Experiment and 14 Observations for Management) also understood the problem Goodheart identified above in his findings into quality improvement:<br>

  </p>
   <div class=\"rTable\">
<div class=\"rTableBody\">
<div class=\"rTableRow\">
<div class=\"rTableCell\"></div>
<div class=\"rTableCell\" align=\"center\" ><img class=\"img-fluid\" title=\"\" src=\"/images/demingone.jpg\" onmouseover=\"this.src='/images/demingtwo.jpg'\" onmouseout=\"this.src='/images/demingthree.jpg'\" title=\"\">
</div>

\t<div class=\"rTableCell\"><p align=\"center\"><i><b>Hover your mouse over the Deming image above</b>.</i></p><p align=\"left\"><a href=\"/cmmi\" target=\"_blank\">CM Level 2+,</a> differentiated from CM L1 per CMMi, is all about Process Focus for Productivity and Quality improvements; as opposed to \"just do it now\" - heroics.  Deming's philosophy above is the wisdom behind much of the <a href=\"/pmway/?slide=5\">Capability Maturity Model integrated from Carnegie Mellon University</a>.</p>\t<p><a href=\"/redbeads\" target=\"_blank\">Click here for Dr. Deming's Red Bead Experiment</a>.<br>
\t\tThis is an essential concept to learn if you aim for higher levels of <a href=\"/gamestats\" target=\"_blank\">Productivity</a> and Quality and to be agile and lean.<<br>
\t\t<b>Remember (per Deming's Red Bead Experiment) a process can be stable, in control and be producing defective items 100% of the time!</b></p> </div>
</div>
</div>
</div>
  <h5>Little's Law</h5>
  <p align=\"center\"><img class=\"img-fluid\" src=\"/images/littleslaw.jpg\"></p>
  <p><a href=\"/home/littleslaw\" target=\"+blank\">Click here for a video about Little's Law</a></p>
  <br>
  <br>
  <br>
</div>
<!-- Content Container ends here -->

";
        }
        // line 79
        yield "

";
        // line 81
        if ((($tmp =  !($context["current_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "<div class=\"container\" align=\"left\">
  <h3>The IT Laws</h3>
  <hr>
  <h5>Brook's Law</h5>
  <p>Brooks' law is a claim about software project management according to which \"adding manpower to a late software project makes it later\". <br>
    It was coined by Fred Brooks in his 1975 book The Mythical Man-Month. According to Brooks, there is an incremental person who, when added to a project, makes it take more, not less time. Brooks adds that \"nine women can't make a baby in one month\". <br>
  </p>
  <h5>Parkinson's Law</h5>
  <p>Is the adage that \"work expands so as to fill the time available for its completion\". <br>
    <br>
    It is sometimes applied to the growth of bureaucracy in an organization.  A current form of the law is not the one Parkinson refers to by that name in the article, but a mathematical equation describing the rate at which bureaucracies expand over time. Much of the essay is dedicated to a summary of purportedly scientific observations supporting the law, such as the increase in the number of employees at the Colonial Office while the British Empire declined (he shows that it had its greatest number of staff when it was folded into the Foreign Office because of a lack of colonies to administer). He explains this growth by two forces: (1) \"An official wants to multiply subordinates, not rivals\" and (2) \"Officials make work for each other.\" He notes that the number employed in a bureaucracy rose by 5-7% per year \"irrespective of any variation in the amount of work (if any) to be done\". </p>
  <h5>Millars Law</h5>
  <p>George Miller, a professor of psychology, showed that, at any one
    time, we humans are capable of concentrating on only approximately seven chunks (units
    of information). However, a typical software artifact has far more than seven
    chunks. For example, a code artifact is likely to have considerably more than seven variables,
    and a requirements document is likely to have many more than seven requirements. One way
    we humans handle this restriction on the amount of information we can handle at any one
    time is to use stepwise
    refinement . <br>
    <br>
    That is, we concentrate on those aspects that are currently
    the most important and postpone until later those aspects that are currently less critical.
    In other words, every aspect is eventually handled but in order of current importance. This
    means that we start off by constructing an artifact that solves only a small part of what we
    are trying to achieve. Then, we consider further aspects of the problem and add the resulting
    new pieces to the existing artifact. For example, we might construct a requirements document
    by considering the seven requirements we consider the most important. Then, we would consider
    the seven next most important requirements, and so on. This is an incremental process.
    Incrementation is also an intrinsic aspect of software engineering; incremental software
    development is over 45 years old [Larman and Basili, 2003. <br><br>
\tNote:  \"The Magical Number Seven, Plus or Minus Two: Some Limits on Our Capacity for Processing Information\" is one of the most highly cited papers in psychology. It was written by the cognitive psychologist George A. Miller of Harvard University's Department of Psychology and published in 1956 in Psychological Review. It is often interpreted to argue that the number of objects an average human can hold in short-term memory is 7 ± 2.

  </p>
  <h5>Linus's Law</h5>
  <p>Linus's Law as described by Raymond is a claim about software development, named in honor of Linus Torvalds and formulated by Raymond in his essay and book 'The Cathedral and the Bazaar (1999)'. <br>
    The law states that \"given enough eyeballs, all bugs are shallow\"; or more formally: \"Given a large enough beta-tester and co-developer base, almost every problem will be characterized quickly and the fix will be obvious to someone.\" Presenting the code to multiple developers with the purpose of reaching consensus about its acceptance is a simple form of software reviewing. <br>
    Researchers and practitioners have repeatedly shown the effectiveness of various types of reviewing process in finding bugs and security issues, and also that reviews may be more efficient than testing.</p>
  <h5>Conway's Law</h5>
  <p>Conway's law is an adage named after computer programmer Melvin Conway, who introduced the idea in 1967. It states that

    \"organizations which design systems ... are constrained to produce designs which are copies of the communication structures of these organizations.\"

    The law is based on the reasoning that in order for a software module to function, multiple authors must communicate frequently with each other. Therefore, the software interface structure of a system will reflect the social boundaries of the organization(s) that produced it, across which communication is more difficult. Conway's law was intended as a valid sociological observation, although sometimes it's used in a humorous context. It was dubbed Conway's law by participants at the 1968 National Symposium on Modular Programming.</p>
  <h5>Goodheart's Law</h5>
  <p>When a measure becomes the target, it ceases to be a good measure.<br>
  I.e. All metrics of scientific evaluation are bound to be abused. Goodhart's law [...] states that when a feature of the area under inspection is picked as an indicator, then it inexorably ceases to function as that indicator because people start to game it.<br><br>
     <h5>Edwards W. Deming's 14 Observations for Management</h5>
   <p>Deming,(with his Red Bead Experiment and 14 Observations for Management) also understood the problem Goodheart identified above in his findings into quality improvement:<br>

  </p>
   <div class=\"rTable\">
<div class=\"rTableBody\">
<div class=\"rTableRow\">
<div class=\"rTableCell\"></div>
<div class=\"rTableCell\" align=\"center\" ><img class=\"img-fluid\" title=\"\" src=\"/images/demingone.jpg\" onmouseover=\"this.src='/images/demingtwo.jpg'\" onmouseout=\"this.src='/images/demingthree.jpg'\" title=\"\">
</div>

\t<div class=\"rTableCell\"><p align=\"center\"><i><b>Hover your mouse over the Deming image above</b>.</i></p><p align=\"left\"><a href=\"/cmmi\" target=\"_blank\">CM Level 2+,</a> differentiated from CM L1 per CMMi, is all about Process Focus for Productivity and Quality improvements; as opposed to \"just do it now\" - heroics.  Deming's philosophy above is the wisdom behind much of the <a href=\"/pmway/?slide=5\">Capability Maturity Model integrated from Carnegie Mellon University</a>.</p>\t<p><a href=\"/redbeads\" target=\"_blank\">Click here for Dr. Deming's Red Bead Experiment</a>.<br>
\t\tThis is an essential concept to learn if you aim for higher levels of <a href=\"/gamestats\" target=\"_blank\">Productivity</a> and Quality and to be agile and lean.<<br>
\t\t<b>Remember (per Deming's Red Bead Experiment) a process can be stable, in control and be producing defective items 100% of the time!</b></p> </div>
</div>
</div>
</div>
  <h5>Little's Law</h5>
  <p align=\"center\"><img class=\"img-fluid\" src=\"/images/littleslaw.jpg\"></p>
  <p><a href=\"/home/littleslaw\" target=\"+blank\">Click here for a video about Little's Law</a></p>
  <br>
  <br>
  <br>
</div>
";
        }
        // line 154
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/laws.twig";
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
        return array (  237 => 154,  163 => 82,  161 => 81,  157 => 79,  81 => 5,  79 => 4,  72 => 3,  53 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.twig' %}
{% block title %} {% if not user %}PMWay{% endif %} {% if user %}The IT Laws{% endif %}  {% endblock %}
{% block body %}
{% if user %}
<!--BODY-->
<div class=\"container\" align=\"left\">
  <h3>Some of the core IT Laws</h3>
  <hr>
  <h5>Brook's Law</h5>
  <p>Brooks' law is a claim about software project management according to which \"adding manpower to a late software project makes it later\". <br>
    It was coined by Fred Brooks in his 1975 book The Mythical Man-Month. According to Brooks, there is an incremental person who, when added to a project, makes it take more, not less time. Brooks adds that \"nine women can't make a baby in one month\". <br>
  </p>
  <h5>Parkinson's Law</h5>
  <p>Is the adage that \"work expands so as to fill the time available for its completion\". <br>
    <br>
    It is sometimes applied to the growth of bureaucracy in an organization.  A current form of the law is not the one Parkinson refers to by that name in the article, but a mathematical equation describing the rate at which bureaucracies expand over time. Much of the essay is dedicated to a summary of purportedly scientific observations supporting the law, such as the increase in the number of employees at the Colonial Office while the British Empire declined (he shows that it had its greatest number of staff when it was folded into the Foreign Office because of a lack of colonies to administer). He explains this growth by two forces: (1) \"An official wants to multiply subordinates, not rivals\" and (2) \"Officials make work for each other.\" He notes that the number employed in a bureaucracy rose by 5-7% per year \"irrespective of any variation in the amount of work (if any) to be done\". </p>
  <h5>Millars Law</h5>
  <p>George Miller, a professor of psychology, showed that, at any one
    time, we humans are capable of concentrating on only approximately seven chunks (units
    of information). However, a typical software artifact has far more than seven
    chunks. For example, a code artifact is likely to have considerably more than seven variables,
    and a requirements document is likely to have many more than seven requirements. One way
    we humans handle this restriction on the amount of information we can handle at any one
    time is to use stepwise
    refinement . <br>
    <br>
    That is, we concentrate on those aspects that are currently
    the most important and postpone until later those aspects that are currently less critical.
    In other words, every aspect is eventually handled but in order of current importance. This
    means that we start off by constructing an artifact that solves only a small part of what we
    are trying to achieve. Then, we consider further aspects of the problem and add the resulting
    new pieces to the existing artifact. For example, we might construct a requirements document
    by considering the seven requirements we consider the most important. Then, we would consider
    the seven next most important requirements, and so on. This is an incremental process.
    Incrementation is also an intrinsic aspect of software engineering; incremental software
    development is over 45 years old [Larman and Basili, 2003]. <br><br>
\tNote:  \"The Magical Number Seven, Plus or Minus Two: Some Limits on Our Capacity for Processing Information\" is one of the most highly cited papers in psychology. It was written by the cognitive psychologist George A. Miller of Harvard University's Department of Psychology and published in 1956 in Psychological Review. It is often interpreted to argue that the number of objects an average human can hold in short-term memory is 7 ± 2.
  </p>
  <h5>Linus's Law</h5>
  <p>Linus's Law as described by Raymond is a claim about software development, named in honor of Linus Torvalds and formulated by Raymond in his essay and book 'The Cathedral and the Bazaar (1999)'. <br>
    The law states that \"given enough eyeballs, all bugs are shallow\"; or more formally: \"Given a large enough beta-tester and co-developer base, almost every problem will be characterized quickly and the fix will be obvious to someone.\" Presenting the code to multiple developers with the purpose of reaching consensus about its acceptance is a simple form of software reviewing. <br>
    Researchers and practitioners have repeatedly shown the effectiveness of various types of reviewing process in finding bugs and security issues, and also that reviews may be more efficient than testing.</p>
  <h5>Conway's Law</h5>
  <p>Conway's law is an adage named after computer programmer Melvin Conway, who introduced the idea in 1967. It states that

    \"organizations which design systems ... are constrained to produce designs which are copies of the communication structures of these organizations.\"

    The law is based on the reasoning that in order for a software module to function, multiple authors must communicate frequently with each other. Therefore, the software interface structure of a system will reflect the social boundaries of the organization(s) that produced it, across which communication is more difficult. Conway's law was intended as a valid sociological observation, although sometimes it's used in a humorous context. It was dubbed Conway's law by participants at the 1968 National Symposium on Modular Programming.</p>
  <h5>Goodheart's Law</h5>
  <p>When a measure becomes the target, it ceases to be a good measure.<br>
  I.e. All metrics of scientific evaluation are bound to be abused. Goodhart's law [...] states that when a feature of the area under inspection is picked as an indicator, then it inexorably ceases to function as that indicator because people start to game it.<br><br>
     <h5>Edwards W. Deming's 14 Observations for Management</h5>
   <p>Deming,(with his Red Bead Experiment and 14 Observations for Management) also understood the problem Goodheart identified above in his findings into quality improvement:<br>

  </p>
   <div class=\"rTable\">
<div class=\"rTableBody\">
<div class=\"rTableRow\">
<div class=\"rTableCell\"></div>
<div class=\"rTableCell\" align=\"center\" ><img class=\"img-fluid\" title=\"\" src=\"/images/demingone.jpg\" onmouseover=\"this.src='/images/demingtwo.jpg'\" onmouseout=\"this.src='/images/demingthree.jpg'\" title=\"\">
</div>

\t<div class=\"rTableCell\"><p align=\"center\"><i><b>Hover your mouse over the Deming image above</b>.</i></p><p align=\"left\"><a href=\"/cmmi\" target=\"_blank\">CM Level 2+,</a> differentiated from CM L1 per CMMi, is all about Process Focus for Productivity and Quality improvements; as opposed to \"just do it now\" - heroics.  Deming's philosophy above is the wisdom behind much of the <a href=\"/pmway/?slide=5\">Capability Maturity Model integrated from Carnegie Mellon University</a>.</p>\t<p><a href=\"/redbeads\" target=\"_blank\">Click here for Dr. Deming's Red Bead Experiment</a>.<br>
\t\tThis is an essential concept to learn if you aim for higher levels of <a href=\"/gamestats\" target=\"_blank\">Productivity</a> and Quality and to be agile and lean.<<br>
\t\t<b>Remember (per Deming's Red Bead Experiment) a process can be stable, in control and be producing defective items 100% of the time!</b></p> </div>
</div>
</div>
</div>
  <h5>Little's Law</h5>
  <p align=\"center\"><img class=\"img-fluid\" src=\"/images/littleslaw.jpg\"></p>
  <p><a href=\"/home/littleslaw\" target=\"+blank\">Click here for a video about Little's Law</a></p>
  <br>
  <br>
  <br>
</div>
<!-- Content Container ends here -->

{% endif %}


{% if not user %}
<div class=\"container\" align=\"left\">
  <h3>The IT Laws</h3>
  <hr>
  <h5>Brook's Law</h5>
  <p>Brooks' law is a claim about software project management according to which \"adding manpower to a late software project makes it later\". <br>
    It was coined by Fred Brooks in his 1975 book The Mythical Man-Month. According to Brooks, there is an incremental person who, when added to a project, makes it take more, not less time. Brooks adds that \"nine women can't make a baby in one month\". <br>
  </p>
  <h5>Parkinson's Law</h5>
  <p>Is the adage that \"work expands so as to fill the time available for its completion\". <br>
    <br>
    It is sometimes applied to the growth of bureaucracy in an organization.  A current form of the law is not the one Parkinson refers to by that name in the article, but a mathematical equation describing the rate at which bureaucracies expand over time. Much of the essay is dedicated to a summary of purportedly scientific observations supporting the law, such as the increase in the number of employees at the Colonial Office while the British Empire declined (he shows that it had its greatest number of staff when it was folded into the Foreign Office because of a lack of colonies to administer). He explains this growth by two forces: (1) \"An official wants to multiply subordinates, not rivals\" and (2) \"Officials make work for each other.\" He notes that the number employed in a bureaucracy rose by 5-7% per year \"irrespective of any variation in the amount of work (if any) to be done\". </p>
  <h5>Millars Law</h5>
  <p>George Miller, a professor of psychology, showed that, at any one
    time, we humans are capable of concentrating on only approximately seven chunks (units
    of information). However, a typical software artifact has far more than seven
    chunks. For example, a code artifact is likely to have considerably more than seven variables,
    and a requirements document is likely to have many more than seven requirements. One way
    we humans handle this restriction on the amount of information we can handle at any one
    time is to use stepwise
    refinement . <br>
    <br>
    That is, we concentrate on those aspects that are currently
    the most important and postpone until later those aspects that are currently less critical.
    In other words, every aspect is eventually handled but in order of current importance. This
    means that we start off by constructing an artifact that solves only a small part of what we
    are trying to achieve. Then, we consider further aspects of the problem and add the resulting
    new pieces to the existing artifact. For example, we might construct a requirements document
    by considering the seven requirements we consider the most important. Then, we would consider
    the seven next most important requirements, and so on. This is an incremental process.
    Incrementation is also an intrinsic aspect of software engineering; incremental software
    development is over 45 years old [Larman and Basili, 2003. <br><br>
\tNote:  \"The Magical Number Seven, Plus or Minus Two: Some Limits on Our Capacity for Processing Information\" is one of the most highly cited papers in psychology. It was written by the cognitive psychologist George A. Miller of Harvard University's Department of Psychology and published in 1956 in Psychological Review. It is often interpreted to argue that the number of objects an average human can hold in short-term memory is 7 ± 2.

  </p>
  <h5>Linus's Law</h5>
  <p>Linus's Law as described by Raymond is a claim about software development, named in honor of Linus Torvalds and formulated by Raymond in his essay and book 'The Cathedral and the Bazaar (1999)'. <br>
    The law states that \"given enough eyeballs, all bugs are shallow\"; or more formally: \"Given a large enough beta-tester and co-developer base, almost every problem will be characterized quickly and the fix will be obvious to someone.\" Presenting the code to multiple developers with the purpose of reaching consensus about its acceptance is a simple form of software reviewing. <br>
    Researchers and practitioners have repeatedly shown the effectiveness of various types of reviewing process in finding bugs and security issues, and also that reviews may be more efficient than testing.</p>
  <h5>Conway's Law</h5>
  <p>Conway's law is an adage named after computer programmer Melvin Conway, who introduced the idea in 1967. It states that

    \"organizations which design systems ... are constrained to produce designs which are copies of the communication structures of these organizations.\"

    The law is based on the reasoning that in order for a software module to function, multiple authors must communicate frequently with each other. Therefore, the software interface structure of a system will reflect the social boundaries of the organization(s) that produced it, across which communication is more difficult. Conway's law was intended as a valid sociological observation, although sometimes it's used in a humorous context. It was dubbed Conway's law by participants at the 1968 National Symposium on Modular Programming.</p>
  <h5>Goodheart's Law</h5>
  <p>When a measure becomes the target, it ceases to be a good measure.<br>
  I.e. All metrics of scientific evaluation are bound to be abused. Goodhart's law [...] states that when a feature of the area under inspection is picked as an indicator, then it inexorably ceases to function as that indicator because people start to game it.<br><br>
     <h5>Edwards W. Deming's 14 Observations for Management</h5>
   <p>Deming,(with his Red Bead Experiment and 14 Observations for Management) also understood the problem Goodheart identified above in his findings into quality improvement:<br>

  </p>
   <div class=\"rTable\">
<div class=\"rTableBody\">
<div class=\"rTableRow\">
<div class=\"rTableCell\"></div>
<div class=\"rTableCell\" align=\"center\" ><img class=\"img-fluid\" title=\"\" src=\"/images/demingone.jpg\" onmouseover=\"this.src='/images/demingtwo.jpg'\" onmouseout=\"this.src='/images/demingthree.jpg'\" title=\"\">
</div>

\t<div class=\"rTableCell\"><p align=\"center\"><i><b>Hover your mouse over the Deming image above</b>.</i></p><p align=\"left\"><a href=\"/cmmi\" target=\"_blank\">CM Level 2+,</a> differentiated from CM L1 per CMMi, is all about Process Focus for Productivity and Quality improvements; as opposed to \"just do it now\" - heroics.  Deming's philosophy above is the wisdom behind much of the <a href=\"/pmway/?slide=5\">Capability Maturity Model integrated from Carnegie Mellon University</a>.</p>\t<p><a href=\"/redbeads\" target=\"_blank\">Click here for Dr. Deming's Red Bead Experiment</a>.<br>
\t\tThis is an essential concept to learn if you aim for higher levels of <a href=\"/gamestats\" target=\"_blank\">Productivity</a> and Quality and to be agile and lean.<<br>
\t\t<b>Remember (per Deming's Red Bead Experiment) a process can be stable, in control and be producing defective items 100% of the time!</b></p> </div>
</div>
</div>
</div>
  <h5>Little's Law</h5>
  <p align=\"center\"><img class=\"img-fluid\" src=\"/images/littleslaw.jpg\"></p>
  <p><a href=\"/home/littleslaw\" target=\"+blank\">Click here for a video about Little's Law</a></p>
  <br>
  <br>
  <br>
</div>
{% endif %}


{% endblock %}
", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/laws.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/laws.twig");
    }
}
