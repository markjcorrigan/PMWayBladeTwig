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

/* C:\xampp\htdocs\pmway\resources\views/Home/itilfourpractices.twig */
class __TwigTemplate_8d1749477acf1cd071cc0e11f398420e extends Template
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
            yield "ITIL
Practices";
        }
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        if ((($tmp = ($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "<!--BODY-->
<div class=\"container\" align=\"center\">
  <h3 align=\"left\">Information Technology Infrastructure Library
    (ITIL) Four:&nbsp;Practices</h3>
  <hr>
  <p><img alt=\"ITIL Books\" class=\"img-fluid\" src=\"/images/itilfourpractices.png\"></p>
  <br>
  <br>
  <br>
  <br>
</div>

<!--BODY ENDS HERE-->

";
        }
        // line 21
        yield "

";
        // line 23
        if ((($tmp =  !($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"container\" align=\"left\" ><h3 align=\"left\">Please log on to access the content on this page</h3><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>";
        }
        if (( !($context["current_user"] ?? null) && false)) {
            // line 24
            yield "<div class=\"container\" align=\"center\">
  <h3 align=\"left\">Information Technology Infrastructure Library
    (ITIL) Four:&nbsp;Practices</h3>
  <hr>
  <p><img alt=\"ITIL Books\" class=\"img-fluid\" src=\"/images/itilfourpractices.png\"></p>
  <br>
  <br>
  <br>
  <br>
</div>
";
        }
        // line 35
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/itilfourpractices.twig";
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
        return array (  120 => 35,  107 => 24,  102 => 23,  98 => 21,  81 => 6,  79 => 5,  72 => 4,  53 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.twig' %}
{% block title %} {% if not user %}PMWay{% endif %} {% if user %}ITIL
Practices{% endif %}{% endblock %}
{% block body %}
{% if user %}
<!--BODY-->
<div class=\"container\" align=\"center\">
  <h3 align=\"left\">Information Technology Infrastructure Library
    (ITIL) Four:&nbsp;Practices</h3>
  <hr>
  <p><img alt=\"ITIL Books\" class=\"img-fluid\" src=\"/images/itilfourpractices.png\"></p>
  <br>
  <br>
  <br>
  <br>
</div>

<!--BODY ENDS HERE-->

{% endif %}


{% if not user %}<div class=\"container\" align=\"left\" ><h3 align=\"left\">Please log on to access the content on this page</h3><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>{% endif %}{% if not current_user and false %}
<div class=\"container\" align=\"center\">
  <h3 align=\"left\">Information Technology Infrastructure Library
    (ITIL) Four:&nbsp;Practices</h3>
  <hr>
  <p><img alt=\"ITIL Books\" class=\"img-fluid\" src=\"/images/itilfourpractices.png\"></p>
  <br>
  <br>
  <br>
  <br>
</div>
{% endif %}


{% endblock %}
", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/itilfourpractices.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/itilfourpractices.twig");
    }
}
