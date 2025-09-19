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

/* C:\xampp\htdocs\pmway\resources\views/Home/cmmi.twig */
class __TwigTemplate_aaf700e31d2578c692a16e42020841fa extends Template
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
            yield "Capability Maturity Model";
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
            yield "<div class=\"container\" align=\"center\">
  <h5 align=\"center\">Achieve Business Value through Productivity and Quality
    Improvements<br>
    off the stable base of Project Process Management <br>
    (<a href=\"/home/carousel?slide=1\">Traditional</a> or <a href=\"/home/agile\"> Agile</a>) <br>
    at Capability Maturity Model Level 2 (and above)</h5>
  <img class=\"img-fluid\" src=\"/images/cmmproject2plus.png\" onmouseover=\"this.src='/images/cmmproject2plusshadedbezelled.png'\" onmouseout=\"this.src='/images/cmmproject2plus.png'\" title=\"Register with PMWay and let me help you find your way\">
  <h5>PMWay is all about ideas to improve your
    game</h5>
  <p>Figure out the idea below and your Productivity and Quality will
    improve!</p>
  <img alt=\"blue arrow down\" class=\"img-fluid\" src=\"/images/bluearrowdown.png\" >
  <p align=\"left\"><img alt=\"problem\" class=\"img-fluid\" src=\"/images/problem.png\" ><br>
    <i>As with the 12 steps of AA and the recognition that a problem exists being the first step to recovery: </i></p>
  <h3 style=\"color:blue\" align=\"center\"> The first step in moving your \"game stats&quot;</h3>
  <h5 style=\"color:blue\" align=\"center\"> from &quot;Hero&quot; to &quot;Managed Processes Pro&quot;
    is to&nbsp;take the \"pin test&quot; </h5>
  <p> <a href=\"/pin\" title=\"Use your mouse to drag me around for fun.  Then click me if you want to get serious and Pin down your Capability Maturity level now!\"> <img alt=\"\" id=\"pin\"height=\"144\" src=\"/images/pinlarge.png\" width=\"152\"></a><img alt=\"\" class=\"img-fluid\" src=\"/images/gatewayflat.png\" onmouseover=\"this.src='/images/gateway.png'\" onmouseout=\"this.src='/images/gatewayflat.png'\" >
  <p align=\"center\"><i> For fun use your mouse and drag the pin around!&nbsp; <br>
    Ready to take the test! <br>
    Click the pin image above now!</i></p>
  <br>
  <br>
  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapseemperor\" aria-expanded=\"false\" aria-controls=
        \"collapseemperor\">CM Level 1?<br>
  What's it look like? </button>
  <div class=\"collapse\" id=\"collapseemperor\">
    <div class=\"container\">
      <div class=\"card text-center\">
        <h5 class=\"card-header\" align=\"center\"></h5>
        <div class=\"card-body text-center\"> <img alt=\"\" class=\"img-fluid\" src=\"/images/noito.png\" ><br>
          <img alt=\"\" class=\"img-fluid\" src=\"/images/emperorbare.png\" ><br>
          <br>
          <br>
        </div>
        <div class=\"card-footer\"> Anything less (Capability Maturity Level 1 or below) is the Emperor, proud
          of his
          new clothes! </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>
  <script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
  <link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">
  <script>
  \$(document).ready(function () {
    \$(\"#pin\").draggable({revert:\"invalid\"});
    \$(\"#target\").droppable({
      greedy: true,
      tolerance: 'pointer',
      drop: function (event, ui) {
        ui.draggable.draggable('option', 'revert', 'true');
        \$(this).css('background-color','lightyellow')
        alert(\"Awesome! Click the target to see the processes your team have mastered!\");

      }
    });




  });

</script>
</div>
";
        }
        // line 74
        yield "



";
        // line 78
        if ((($tmp =  !($context["current_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "
<div class=\"container\" align=\"center\">
  <h5 align=\"center\">Achieve Business Value through Productivity and Quality
    Improvements<br>
    off the stable base of Project Process Management <br>
    (<a href=\"/?slide=1\">Traditional</a> or <a href=\"/home/agile\"> Agile</a>) <br>
    at Capability Maturity Model Level 2 (and above)</h5>
  <img class=\"img-fluid\" src=\"/images/cmmproject2plus.png\" onmouseover=\"this.src='/images/cmmproject2plusshadedbezelled.png'\" onmouseout=\"this.src='/images/cmmproject2plus.png'\" title=\"Register with PMWay and let me help you find your way\">
  <h6>PMWay is all about ideas to improve your <a href=\"/home/gamestats\">game stats</a>.<br>
  If you are using a mouse then click on and drag the big red pin onto the model above.  <br>Where would you say you are operating at?<br>
  Or, if interested, you can take the <a href=\"/pin\" target=\"_blank\">pin test</a> by clicking the pin now?</h6>
    <a href=\"/pin\" target=\"_blank\" title=\"Where is your game at. Click the pin to take the test\"><img alt=\"\" id=\"pin\" height=\"144\" src=\"/images/pinlarge.png\" width=\"152\"></a>&nbsp;&nbsp;
 <br><br>
  <!--<button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapseemperor\" aria-expanded=\"false\" aria-controls=
        \"collapseemperor\">CM Level 1?<br>
  What's it look like? </button>
  <div class=\"collapse\" id=\"collapseemperor\">
    <div class=\"container\">
      <div class=\"card text-center\">
        <h5 class=\"card-header\" align=\"center\"></h5>
        <div class=\"card-body text-center\"> <img alt=\"\" class=\"img-fluid\" src=\"/images/noito.png\" ><br>
          <img alt=\"\" class=\"img-fluid\" src=\"/images/emperorbare.png\" ><br>
          <br>
          <br>
        </div>
        <div class=\"card-footer\"> Anything less (Capability Maturity Level 1 or below) is the Emperor, proud
          of his
          new clothes! </div>
      </div>
    </div>
  </div>-->
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
</div>
";
        }
        // line 137
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/cmmi.twig";
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
        return array (  220 => 137,  160 => 79,  158 => 78,  152 => 74,  81 => 5,  79 => 4,  72 => 3,  53 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.twig' %}
{% block title %} {% if not user %}PMWay{% endif %} {% if user %}Capability Maturity Model{% endif %}  {% endblock %}
{% block body %}
{% if user %}
<div class=\"container\" align=\"center\">
  <h5 align=\"center\">Achieve Business Value through Productivity and Quality
    Improvements<br>
    off the stable base of Project Process Management <br>
    (<a href=\"/home/carousel?slide=1\">Traditional</a> or <a href=\"/home/agile\"> Agile</a>) <br>
    at Capability Maturity Model Level 2 (and above)</h5>
  <img class=\"img-fluid\" src=\"/images/cmmproject2plus.png\" onmouseover=\"this.src='/images/cmmproject2plusshadedbezelled.png'\" onmouseout=\"this.src='/images/cmmproject2plus.png'\" title=\"Register with PMWay and let me help you find your way\">
  <h5>PMWay is all about ideas to improve your
    game</h5>
  <p>Figure out the idea below and your Productivity and Quality will
    improve!</p>
  <img alt=\"blue arrow down\" class=\"img-fluid\" src=\"/images/bluearrowdown.png\" >
  <p align=\"left\"><img alt=\"problem\" class=\"img-fluid\" src=\"/images/problem.png\" ><br>
    <i>As with the 12 steps of AA and the recognition that a problem exists being the first step to recovery: </i></p>
  <h3 style=\"color:blue\" align=\"center\"> The first step in moving your \"game stats&quot;</h3>
  <h5 style=\"color:blue\" align=\"center\"> from &quot;Hero&quot; to &quot;Managed Processes Pro&quot;
    is to&nbsp;take the \"pin test&quot; </h5>
  <p> <a href=\"/pin\" title=\"Use your mouse to drag me around for fun.  Then click me if you want to get serious and Pin down your Capability Maturity level now!\"> <img alt=\"\" id=\"pin\"height=\"144\" src=\"/images/pinlarge.png\" width=\"152\"></a><img alt=\"\" class=\"img-fluid\" src=\"/images/gatewayflat.png\" onmouseover=\"this.src='/images/gateway.png'\" onmouseout=\"this.src='/images/gatewayflat.png'\" >
  <p align=\"center\"><i> For fun use your mouse and drag the pin around!&nbsp; <br>
    Ready to take the test! <br>
    Click the pin image above now!</i></p>
  <br>
  <br>
  <button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapseemperor\" aria-expanded=\"false\" aria-controls=
        \"collapseemperor\">CM Level 1?<br>
  What's it look like? </button>
  <div class=\"collapse\" id=\"collapseemperor\">
    <div class=\"container\">
      <div class=\"card text-center\">
        <h5 class=\"card-header\" align=\"center\"></h5>
        <div class=\"card-body text-center\"> <img alt=\"\" class=\"img-fluid\" src=\"/images/noito.png\" ><br>
          <img alt=\"\" class=\"img-fluid\" src=\"/images/emperorbare.png\" ><br>
          <br>
          <br>
        </div>
        <div class=\"card-footer\"> Anything less (Capability Maturity Level 1 or below) is the Emperor, proud
          of his
          new clothes! </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <script src=\"/bootstrapfouroneone/jquery/jquery.js\"></script>
  <script src=\"/bootstrapfouroneone/jqueryui/jquery-ui.js\"></script>
  <link rel=\"stylesheet\" href=\"/bootstrapfouroneone/jqueryui/jquery-ui.css\">
  <script>
  \$(document).ready(function () {
    \$(\"#pin\").draggable({revert:\"invalid\"});
    \$(\"#target\").droppable({
      greedy: true,
      tolerance: 'pointer',
      drop: function (event, ui) {
        ui.draggable.draggable('option', 'revert', 'true');
        \$(this).css('background-color','lightyellow')
        alert(\"Awesome! Click the target to see the processes your team have mastered!\");

      }
    });




  });

</script>
</div>
{% endif %}




{% if not user %}

<div class=\"container\" align=\"center\">
  <h5 align=\"center\">Achieve Business Value through Productivity and Quality
    Improvements<br>
    off the stable base of Project Process Management <br>
    (<a href=\"/?slide=1\">Traditional</a> or <a href=\"/home/agile\"> Agile</a>) <br>
    at Capability Maturity Model Level 2 (and above)</h5>
  <img class=\"img-fluid\" src=\"/images/cmmproject2plus.png\" onmouseover=\"this.src='/images/cmmproject2plusshadedbezelled.png'\" onmouseout=\"this.src='/images/cmmproject2plus.png'\" title=\"Register with PMWay and let me help you find your way\">
  <h6>PMWay is all about ideas to improve your <a href=\"/home/gamestats\">game stats</a>.<br>
  If you are using a mouse then click on and drag the big red pin onto the model above.  <br>Where would you say you are operating at?<br>
  Or, if interested, you can take the <a href=\"/pin\" target=\"_blank\">pin test</a> by clicking the pin now?</h6>
    <a href=\"/pin\" target=\"_blank\" title=\"Where is your game at. Click the pin to take the test\"><img alt=\"\" id=\"pin\" height=\"144\" src=\"/images/pinlarge.png\" width=\"152\"></a>&nbsp;&nbsp;
 <br><br>
  <!--<button class=\"btn btn-primary align-center clearfix\" type=\"button\" data-toggle=
\"collapse\" data-target=\"#collapseemperor\" aria-expanded=\"false\" aria-controls=
        \"collapseemperor\">CM Level 1?<br>
  What's it look like? </button>
  <div class=\"collapse\" id=\"collapseemperor\">
    <div class=\"container\">
      <div class=\"card text-center\">
        <h5 class=\"card-header\" align=\"center\"></h5>
        <div class=\"card-body text-center\"> <img alt=\"\" class=\"img-fluid\" src=\"/images/noito.png\" ><br>
          <img alt=\"\" class=\"img-fluid\" src=\"/images/emperorbare.png\" ><br>
          <br>
          <br>
        </div>
        <div class=\"card-footer\"> Anything less (Capability Maturity Level 1 or below) is the Emperor, proud
          of his
          new clothes! </div>
      </div>
    </div>
  </div>-->
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
</div>
{% endif %}


{% endblock %}
", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/cmmi.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/cmmi.twig");
    }
}
