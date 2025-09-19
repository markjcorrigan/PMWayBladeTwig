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

/* C:\xampp\htdocs\pmway\resources\views/home/twelveone.twig */
class __TwigTemplate_ab8c7fb95d020a663f13e6a15ba7cd07 extends Template
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
            yield "12.1";
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
            yield "<!--BODY-->


  <div id=\"i\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">


  <ol class=\"carousel-indicators\">
    <li data-target=\"#i\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#i\" data-slide-to=\"1\"></li>
    <li data-target=\"#i\" data-slide-to=\"2\"></li>

  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\" align=\"center\">
        <a href=\"/pmboksix/twelveone\" title=\"Click here to go to the drillable ITTO dashboard.\"><h5>Click here</h5>
       <img class=\"img-fluid\"
 align=\"bottom\" src=\"/images/121.png\" alt=\"First slide\"></a>
       <br>
      <br>
      <br>
      <br>

    </div>
    <div class=\"carousel-item\" align=\"center\">
      <img class=\"d-block img-fluid\" align=\"bottom\" src=\"/images/121ittos.png\" alt=\"Second slide\">
       <br>
      <br>
      <br>
      <br>


    </div>
    <div class=\"carousel-item\" align=\"center\">
      <img class=\"d-block img-fluid\" align=\"bottom\" src=\"/images/121flow.png\" alt=\"Third slide\">
       <br>
      <br>
      <br>
      <br>
         <br>
      <br>
      <br>
      <br>
   <br>
      <br>
      <br>
      <br>
           <br>
      <br>


  </div>
  <a class=\"carousel-control-prev\" href=\"#i\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#i\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div><!--ENDBODY-->

    ";
        } else {
            // line 67
            yield "

    ";
        }
        // line 70
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "C:\\xampp\\htdocs\\pmway\\resources\\views/home/twelveone.twig";
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
        return array (  150 => 70,  145 => 67,  81 => 5,  79 => 4,  72 => 3,  53 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.twig' %}
{% block title %} {% if not user %}PMWay{% endif %} {% if user %}12.1{% endif %}  {% endblock %}
{% block body %}
{% if user %}
<!--BODY-->


  <div id=\"i\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">


  <ol class=\"carousel-indicators\">
    <li data-target=\"#i\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#i\" data-slide-to=\"1\"></li>
    <li data-target=\"#i\" data-slide-to=\"2\"></li>

  </ol>
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\" align=\"center\">
        <a href=\"/pmboksix/twelveone\" title=\"Click here to go to the drillable ITTO dashboard.\"><h5>Click here</h5>
       <img class=\"img-fluid\"
 align=\"bottom\" src=\"/images/121.png\" alt=\"First slide\"></a>
       <br>
      <br>
      <br>
      <br>

    </div>
    <div class=\"carousel-item\" align=\"center\">
      <img class=\"d-block img-fluid\" align=\"bottom\" src=\"/images/121ittos.png\" alt=\"Second slide\">
       <br>
      <br>
      <br>
      <br>


    </div>
    <div class=\"carousel-item\" align=\"center\">
      <img class=\"d-block img-fluid\" align=\"bottom\" src=\"/images/121flow.png\" alt=\"Third slide\">
       <br>
      <br>
      <br>
      <br>
         <br>
      <br>
      <br>
      <br>
   <br>
      <br>
      <br>
      <br>
           <br>
      <br>


  </div>
  <a class=\"carousel-control-prev\" href=\"#i\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#i\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div><!--ENDBODY-->

    {% else %}


    {% endif %}


{% endblock %}
", "C:\\xampp\\htdocs\\pmway\\resources\\views/home/twelveone.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/home/twelveone.twig");
    }
}
