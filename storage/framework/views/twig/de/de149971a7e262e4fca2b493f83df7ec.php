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

/* C:\xampp\htdocs\pmway\resources\views/Home/scrumsixmins.twig */
class __TwigTemplate_ffcd209fd32e585d4a1ed87667db77a2 extends Template
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
        return "simplemedia.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        $this->parent = $this->load("simplemedia.twig", 1);
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
            yield "Scrum Values";
        }
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
            yield "<div class=\"container\">
<h3>The Essence of Scrum in 6 Minutes</h3>
<hr>
<p><a href=\"#playlist\">PLAYLIST</a></p>
<div id=\"player\" align=\"center\">
  <!-- video source and track elements will be populated from playlist -->
  <video id=\"video1\" preload=\"false\" data-able-player playsinline loop></video>
</div>
<div id=\"playlist\">
  <h2><a name=\"playlist\"></a>Playlist</h2>
  <!-- an AblePlayer playlist is any <ul> with class=\"able-playlist\" -->
  <!-- The value of data-player must match the id of the media element -->
  <!-- see documentation for additional details -->
  <ul class=\"able-playlist\" data-player=\"video1\">
    <li  data-poster=\"/images/scrumsixmins.jpg\" data-width=\"480\" data-height=\"360\"> <span class=\"able-source\"
\t\t\t\t\tdata-type=\"video/mp4\"
\t\t\t\t\tdata-src=\"/ablelvids/scrumstudy/scrumsixmins.mp4\"> </span>
      <button type=\"button\"> <img src=\"/images/scrumsixmins.jpg\" alt=\"\">SCRUM IN 6 MINUTES! </button>
    </li>
  </ul>
  <br>
  <br>
</div>
";
        }
        // line 29
        yield "

";
        // line 31
        if ((($tmp =  !($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "<div class=\"container\">
<h3>The Essence of Scrum in 6 Minutes</h3>
<hr>

<!--
<div align=\"center\">
<br>


<div class=\"d-flex \">
  <div class=\"p-2 flex-fill\"></div>
  <div class=\"p-1 flex-fill\"></div>
  <div class=\"p-5 flex-fill\">
<video id=\"video1\"  data-able-player=\"false\" preload=\"false\" data-speed-icons=\"true\" width=\"480\" height=\"360\" poster=\"/images/scrumsixmins.jpg\"  playsinline=\"true\">
<source type=\"video/mp4\" src=\"/ablelvids/scrumstudy/scrumsixmins.mp4\">
</video>
</div>
  <div class=\"p-4 flex-fill\"></div>
</div>
<br>
</div>-->

<p><a href=\"#playlist\">PLAYLIST</a></p>
<div id=\"player\" align=\"center\">
  <!-- video source and track elements will be populated from playlist -->
  <video id=\"video1\" preload=\"false\" data-able-player playsinline loop></video>
</div>
<div id=\"playlist\">
  <h2><a name=\"playlist\"></a>Playlist</h2>
  <!-- an AblePlayer playlist is any <ul> with class=\"able-playlist\" -->
  <!-- The value of data-player must match the id of the media element -->
  <!-- see documentation for additional details -->
  <ul class=\"able-playlist\" data-player=\"video1\">
    <li data-poster=\"/images/scrumsixmins.jpg\" data-width=\"480\" data-height=\"360\"> <span class=\"able-source\"
\t\t\t\t\tdata-type=\"video/mp4\"
\t\t\t\t\tdata-src=\"/ablelvids/scrumstudy/scrumsixmins.mp4\"> </span>
      <button type=\"button\"> <img src=\"/images/scrumsixmins.jpg\" alt=\"\">SCRUM IN 6 MINUTES! </button>
    </li>
  </ul>
  <br>
  <br>
</div>
";
        }
        // line 75
        yield "


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/scrumsixmins.twig";
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
        return array (  157 => 75,  112 => 32,  110 => 31,  106 => 29,  80 => 5,  78 => 4,  71 => 3,  53 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'simplemedia.twig' %}
{% block title %} {% if not user %}PMWay{% endif %} {% if user %}Scrum Values{% endif %}{% endblock %}
{% block body %}
{% if user %}
<div class=\"container\">
<h3>The Essence of Scrum in 6 Minutes</h3>
<hr>
<p><a href=\"#playlist\">PLAYLIST</a></p>
<div id=\"player\" align=\"center\">
  <!-- video source and track elements will be populated from playlist -->
  <video id=\"video1\" preload=\"false\" data-able-player playsinline loop></video>
</div>
<div id=\"playlist\">
  <h2><a name=\"playlist\"></a>Playlist</h2>
  <!-- an AblePlayer playlist is any <ul> with class=\"able-playlist\" -->
  <!-- The value of data-player must match the id of the media element -->
  <!-- see documentation for additional details -->
  <ul class=\"able-playlist\" data-player=\"video1\">
    <li  data-poster=\"/images/scrumsixmins.jpg\" data-width=\"480\" data-height=\"360\"> <span class=\"able-source\"
\t\t\t\t\tdata-type=\"video/mp4\"
\t\t\t\t\tdata-src=\"/ablelvids/scrumstudy/scrumsixmins.mp4\"> </span>
      <button type=\"button\"> <img src=\"/images/scrumsixmins.jpg\" alt=\"\">SCRUM IN 6 MINUTES! </button>
    </li>
  </ul>
  <br>
  <br>
</div>
{% endif %}


{% if not user %}
<div class=\"container\">
<h3>The Essence of Scrum in 6 Minutes</h3>
<hr>

<!--
<div align=\"center\">
<br>


<div class=\"d-flex \">
  <div class=\"p-2 flex-fill\"></div>
  <div class=\"p-1 flex-fill\"></div>
  <div class=\"p-5 flex-fill\">
<video id=\"video1\"  data-able-player=\"false\" preload=\"false\" data-speed-icons=\"true\" width=\"480\" height=\"360\" poster=\"/images/scrumsixmins.jpg\"  playsinline=\"true\">
<source type=\"video/mp4\" src=\"/ablelvids/scrumstudy/scrumsixmins.mp4\">
</video>
</div>
  <div class=\"p-4 flex-fill\"></div>
</div>
<br>
</div>-->

<p><a href=\"#playlist\">PLAYLIST</a></p>
<div id=\"player\" align=\"center\">
  <!-- video source and track elements will be populated from playlist -->
  <video id=\"video1\" preload=\"false\" data-able-player playsinline loop></video>
</div>
<div id=\"playlist\">
  <h2><a name=\"playlist\"></a>Playlist</h2>
  <!-- an AblePlayer playlist is any <ul> with class=\"able-playlist\" -->
  <!-- The value of data-player must match the id of the media element -->
  <!-- see documentation for additional details -->
  <ul class=\"able-playlist\" data-player=\"video1\">
    <li data-poster=\"/images/scrumsixmins.jpg\" data-width=\"480\" data-height=\"360\"> <span class=\"able-source\"
\t\t\t\t\tdata-type=\"video/mp4\"
\t\t\t\t\tdata-src=\"/ablelvids/scrumstudy/scrumsixmins.mp4\"> </span>
      <button type=\"button\"> <img src=\"/images/scrumsixmins.jpg\" alt=\"\">SCRUM IN 6 MINUTES! </button>
    </li>
  </ul>
  <br>
  <br>
</div>
{% endif %}



{% endblock %}
", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/scrumsixmins.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/scrumsixmins.twig");
    }
}
