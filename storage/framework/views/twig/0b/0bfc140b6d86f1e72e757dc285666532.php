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

/* C:\xampp\htdocs\pmway\resources\views/Home/pin.twig */
class __TwigTemplate_1a1bf652d0f47d537a70e5d1ff23f596 extends Template
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
            yield "Pin where you are at";
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
<!--BODY-->
<div class=\"container\">
  <h5>Based on recent project performance, where would you pin down your Capability Maturity level?</h5>
  <br>
  <div align=\"center\"><img class=\"img-fluid\" src=\"/images/dunningkrugereffectonprojectprocesseswithnopin200.png\"> </div>
  <br>
  <img alt=\"\" id=\"pin\"height=\"144\" src=\"/images/pinlarge.png\" width=\"152\">&nbsp;&nbsp;
  <h6> Using your mouse \"drag\" the pin to the image above and move it along the red line<br>
    leaving it pinned in the position you believe you are operating at currently.</h6>
  <br>
  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapsepin\" aria-expanded=\"false\" aria-controls=
        \"collapsepin\">Click here for an explanation</button>
  <div class=\"collapse\" id=\"collapsepin\">
    <div class=\"container\">
      <div class=\"card text-center\">
        <h5 class=\"card-header\" align=\"center\"></h5>
        <div class=\"card-body text-left\">
          <p><b>Take a look at the bottom of the ladder on the image above!</b><br>
            Can you see that following process is how you climb up the Capability Maturity ladder?<br>
            If you think that Agile does not follow process (a typical Capability Maturity Level 1 perception) you are seriously uninformed. <a href=\"/scrum\" target=\"_blank\"><br>
            Open Scrum here</a> to see this
            agile method's processes.  Did you see that Scrum has the core processes PP and PMC?&nbsp;&nbsp;Now see if you can tie PP and PMC in Scrum back to the <a href=\"/\">PMBOK dashboard</a>. <br>
            <em>Note: Each link above opens in a new tab so you can \"cross compare\" results</em>.</p>
          <p><b>Now take a good look at the Program Termination Zone on the image above on this page.</b><em>&nbsp;&nbsp;<br>
            Remember that a Program is simply a bunch of strategically aligned projects.</em></p>
          <p>For Systems Engineering the CMMi Dashboard for
            Development <b><a href=\"/cmmidevdash\" target=\"_blank\">is your playbook!</a></b> <br>
            This is one of 4 process improvement dashboards used by the Carnegie Mellon University in
            their Capability Maturity Model integrated body of knowledge.<br>
            See if you can find the Capability Maturity Level 2 project management processes (especially PP and PMC) on the CMMi Dev Dashboard. <br>
            They are found under (<em><a href=\"/cmmidevdash\" target=\"_blank\">'PA'
            (Process Area) which is right next to 'ML' (Maturity Level) on the CMMi Dev Dashboard</a></em>).<br>
            The 4 CMMi dashboards
            [<a href=\"/pmway/?slide=14\" target=\"_blank\">CMM People</a>, <a href=\"/cmmidevdash\" target=\"_blank\">CMMi for Development</a>, CMMi for Services &amp; CMMi for
            Acquisition] combine and use most of these processes, while some have specialist processes dedicated only to
            specific dashboards.<br>
            <br>
            <b>The above information, in a 'nutshell' is the absolute essence of being able to operate at Capability Maturity Level 2!</b></p>
        </div>
        <div class=\"card-footer\"> </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>
  <script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
  <link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">
  <script>
  \$(document).ready(function () {
    \$(\"#pin\").draggable();
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
  <br>
  <br>
  <br>
</div>
";
        }
        // line 80
        yield "

";
        // line 82
        if ((($tmp =  !($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "







<!--BODY-->
<div class=\"container\">
  <h5>Based on recent project performance, where would you pin down your Capability Maturity level?</h5>
  <br>
  <div align=\"center\"><img class=\"img-fluid\" src=\"/images/dunningkrugereffectonprojectprocesseswithnopin200.png\"> </div>
  <br>
  <img alt=\"\" id=\"pin\" height=\"144\" src=\"/images/pinlarge.png\" width=\"152\">&nbsp;&nbsp;
  <h6> Using your mouse \"drag\" the pin to the image above and move it along the red line<br>
    leaving it pinned in the position you believe you are operating at currently.</h6>


  <br>
 <!-- <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapsepin\" aria-expanded=\"false\" aria-controls=
        \"collapsepin\">Click here for feedback?</button>
  <div class=\"collapse\" id=\"collapsepin\">
    <div class=\"container\">
      <div class=\"card text-center\">
        <h5 class=\"card-header\" align=\"center\"></h5>
        <div class=\"card-body text-left\">
          <p><b>Take a look at the bottom of the ladder on the image above!</b><br>
            Can you see that following process is how you climb up the Capability Maturity ladder?<br>
            If you think that Agile does not follow process (a typical Capability Maturity Level 1 perception) you are seriously uninformed. <a href=\"/scrum\" target=\"_blank\"><br>
            Open Scrum here</a> to see this
            agile method's processes.  Did you see that Scrum has the core processes PP and PMC?&nbsp;&nbsp;Now see if you can tie PP and PMC in Scrum back to the <a href=\"/\">PMBOK dashboard</a>. <br>
            <em>Note: Each link above opens in a new tab so you can \"cross compare\" results</em>.</p>
          <p><b>Now take a good look at the Program Termination Zone on the image above on this page.</b><em>&nbsp;&nbsp;<br>
            Remember that a Program is simply a bunch of strategically aligned projects.</em></p>
          <p>For Systems Engineering the CMMi Dashboard for
            Development <b><a href=\"/cmmidevdash\" target=\"_blank\">is your playbook!</a></b> <br>
            This is one of 4 process improvement dashboards used by the Carnegie Mellon University in
            their Capability Maturity Model integrated body of knowledge.<br>
            See if you can find the Capability Maturity Level 2 project management processes (especially PP and PMC) on the CMMi Dev Dashboard. <br>
            They are found under (<em><a href=\"/cmmidevdash\" target=\"_blank\">'PA'
            (Process Area) which is right next to 'ML' (Maturity Level) on the CMMi Dev Dashboard</a></em>).<br>
            The 4 CMMi dashboards
            [<a href=\"/pmway/?slide=14\" target=\"_blank\">CMM People</a>, <a href=\"/cmmidevdash\" target=\"_blank\">CMMi for Development</a>, CMMi for Services &amp; CMMi for
            Acquisition] combine and use most of these processes, while some have specialist processes dedicated only to
            specific dashboards.<br>
            <br>
            <b>The above information, in a 'nutshell' is the absolute essence of being able to operate at Capability Maturity Level 2!</b></p>
        </div>
        <div class=\"card-footer\"> </div>
      </div>
    </div>
  </div>-->
  <br>
  <br>
  <br>
  <script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>
  <script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
  <link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">
  <script>
  \$(document).ready(function () {
    \$(\"#pin\").draggable();
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
  <br>
  <br>
  <br>
</div>
";
        }
        // line 167
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/pin.twig";
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
        return array (  250 => 167,  164 => 83,  162 => 82,  158 => 80,  81 => 5,  79 => 4,  72 => 3,  53 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.twig' %}
{% block title %} {% if not user %}PMWay{% endif %} {% if user %}Pin where you are at{% endif %}  {% endblock %}
{% block body %}
{% if user %}

<!--BODY-->
<div class=\"container\">
  <h5>Based on recent project performance, where would you pin down your Capability Maturity level?</h5>
  <br>
  <div align=\"center\"><img class=\"img-fluid\" src=\"/images/dunningkrugereffectonprojectprocesseswithnopin200.png\"> </div>
  <br>
  <img alt=\"\" id=\"pin\"height=\"144\" src=\"/images/pinlarge.png\" width=\"152\">&nbsp;&nbsp;
  <h6> Using your mouse \"drag\" the pin to the image above and move it along the red line<br>
    leaving it pinned in the position you believe you are operating at currently.</h6>
  <br>
  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapsepin\" aria-expanded=\"false\" aria-controls=
        \"collapsepin\">Click here for an explanation</button>
  <div class=\"collapse\" id=\"collapsepin\">
    <div class=\"container\">
      <div class=\"card text-center\">
        <h5 class=\"card-header\" align=\"center\"></h5>
        <div class=\"card-body text-left\">
          <p><b>Take a look at the bottom of the ladder on the image above!</b><br>
            Can you see that following process is how you climb up the Capability Maturity ladder?<br>
            If you think that Agile does not follow process (a typical Capability Maturity Level 1 perception) you are seriously uninformed. <a href=\"/scrum\" target=\"_blank\"><br>
            Open Scrum here</a> to see this
            agile method's processes.  Did you see that Scrum has the core processes PP and PMC?&nbsp;&nbsp;Now see if you can tie PP and PMC in Scrum back to the <a href=\"/\">PMBOK dashboard</a>. <br>
            <em>Note: Each link above opens in a new tab so you can \"cross compare\" results</em>.</p>
          <p><b>Now take a good look at the Program Termination Zone on the image above on this page.</b><em>&nbsp;&nbsp;<br>
            Remember that a Program is simply a bunch of strategically aligned projects.</em></p>
          <p>For Systems Engineering the CMMi Dashboard for
            Development <b><a href=\"/cmmidevdash\" target=\"_blank\">is your playbook!</a></b> <br>
            This is one of 4 process improvement dashboards used by the Carnegie Mellon University in
            their Capability Maturity Model integrated body of knowledge.<br>
            See if you can find the Capability Maturity Level 2 project management processes (especially PP and PMC) on the CMMi Dev Dashboard. <br>
            They are found under (<em><a href=\"/cmmidevdash\" target=\"_blank\">'PA'
            (Process Area) which is right next to 'ML' (Maturity Level) on the CMMi Dev Dashboard</a></em>).<br>
            The 4 CMMi dashboards
            [<a href=\"/pmway/?slide=14\" target=\"_blank\">CMM People</a>, <a href=\"/cmmidevdash\" target=\"_blank\">CMMi for Development</a>, CMMi for Services &amp; CMMi for
            Acquisition] combine and use most of these processes, while some have specialist processes dedicated only to
            specific dashboards.<br>
            <br>
            <b>The above information, in a 'nutshell' is the absolute essence of being able to operate at Capability Maturity Level 2!</b></p>
        </div>
        <div class=\"card-footer\"> </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>
  <script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
  <link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">
  <script>
  \$(document).ready(function () {
    \$(\"#pin\").draggable();
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
  <br>
  <br>
  <br>
</div>
{% endif %}


{% if not user  %}








<!--BODY-->
<div class=\"container\">
  <h5>Based on recent project performance, where would you pin down your Capability Maturity level?</h5>
  <br>
  <div align=\"center\"><img class=\"img-fluid\" src=\"/images/dunningkrugereffectonprojectprocesseswithnopin200.png\"> </div>
  <br>
  <img alt=\"\" id=\"pin\" height=\"144\" src=\"/images/pinlarge.png\" width=\"152\">&nbsp;&nbsp;
  <h6> Using your mouse \"drag\" the pin to the image above and move it along the red line<br>
    leaving it pinned in the position you believe you are operating at currently.</h6>


  <br>
 <!-- <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapsepin\" aria-expanded=\"false\" aria-controls=
        \"collapsepin\">Click here for feedback?</button>
  <div class=\"collapse\" id=\"collapsepin\">
    <div class=\"container\">
      <div class=\"card text-center\">
        <h5 class=\"card-header\" align=\"center\"></h5>
        <div class=\"card-body text-left\">
          <p><b>Take a look at the bottom of the ladder on the image above!</b><br>
            Can you see that following process is how you climb up the Capability Maturity ladder?<br>
            If you think that Agile does not follow process (a typical Capability Maturity Level 1 perception) you are seriously uninformed. <a href=\"/scrum\" target=\"_blank\"><br>
            Open Scrum here</a> to see this
            agile method's processes.  Did you see that Scrum has the core processes PP and PMC?&nbsp;&nbsp;Now see if you can tie PP and PMC in Scrum back to the <a href=\"/\">PMBOK dashboard</a>. <br>
            <em>Note: Each link above opens in a new tab so you can \"cross compare\" results</em>.</p>
          <p><b>Now take a good look at the Program Termination Zone on the image above on this page.</b><em>&nbsp;&nbsp;<br>
            Remember that a Program is simply a bunch of strategically aligned projects.</em></p>
          <p>For Systems Engineering the CMMi Dashboard for
            Development <b><a href=\"/cmmidevdash\" target=\"_blank\">is your playbook!</a></b> <br>
            This is one of 4 process improvement dashboards used by the Carnegie Mellon University in
            their Capability Maturity Model integrated body of knowledge.<br>
            See if you can find the Capability Maturity Level 2 project management processes (especially PP and PMC) on the CMMi Dev Dashboard. <br>
            They are found under (<em><a href=\"/cmmidevdash\" target=\"_blank\">'PA'
            (Process Area) which is right next to 'ML' (Maturity Level) on the CMMi Dev Dashboard</a></em>).<br>
            The 4 CMMi dashboards
            [<a href=\"/pmway/?slide=14\" target=\"_blank\">CMM People</a>, <a href=\"/cmmidevdash\" target=\"_blank\">CMMi for Development</a>, CMMi for Services &amp; CMMi for
            Acquisition] combine and use most of these processes, while some have specialist processes dedicated only to
            specific dashboards.<br>
            <br>
            <b>The above information, in a 'nutshell' is the absolute essence of being able to operate at Capability Maturity Level 2!</b></p>
        </div>
        <div class=\"card-footer\"> </div>
      </div>
    </div>
  </div>-->
  <br>
  <br>
  <br>
  <script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>
  <script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
  <link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">
  <script>
  \$(document).ready(function () {
    \$(\"#pin\").draggable();
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
  <br>
  <br>
  <br>
</div>
{% endif %}


{% endblock %}
", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/pin.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/pin.twig");
    }
}
