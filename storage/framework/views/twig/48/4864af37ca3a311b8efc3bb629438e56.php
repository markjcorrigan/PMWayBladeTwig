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

/* C:\xampp\htdocs\pmway\resources\views/Home/cmmidevdash.twig */
class __TwigTemplate_78dfb43cb1805609ddf35eae670d6b36 extends Template
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
            yield "CMMi Dev Dashboard ";
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
  <h5 align=\"left\">CMMi for Development:&nbsp;Processes</h5>
  <p align=\"left\">Can you see that the PMBOK processes are found mostly at Maturity Level (ML) 2 (with a few on Level 3 and above).<br>
    Also see that the <a href=\"/landscape\" target=\"_blank\">Standards / Frameworks landscape</a>: Software
    Engineering, DevOps, KanBan, ITIL, CM, Traditional &amp; Agile
    Project Management Process, Cobit and others are fundamentally all
    focused on removing constraints between ML2 processes PP and PMC <a href=\"/home/vmodel\" target=\"_blank\">as you improve between baselines.</a><br>
    To illustrate this point for Agile Project Management <a href=\"/scrum\">check out PP and PMC for Scrum here.</a> </p>
  <hr style=\"width: 94%\">
  <p><span dir=\"auto\"><span class=\"auto-style2\"><b>Category:</b>&nbsp;<span class=\"smltxt\">Logical grouping of Process Areas I.e. Project Management, Engineering, Support etc.<br>
    <span class=\"auto-style2\"><b>PA or Process Area:</b>&nbsp; A Process: <span class=\"smltxt\">is a set of activities, methods, practices, and transformations that people use to develop and maintain systems and associated products.&nbsp; <strong><br>
    </strong>There are 22 processes in CMMi Development 1.3 which form a cluster of related practices in an area that, when performed collectively, satisfy a set of goals considered important for making significant improvement in that area. .<br>
    <span class=\"auto-style3\"><strong>ML or Maturity level:</strong><span class=\"smltxt\">&nbsp; Degree of process improvement across a predefined set of process areas in which all goals within the set are attained.<br>
    <span class=\"auto-style2\"><b>SG or Specific Goal:</b><span class=\"smltxt\">&nbsp; SG's apply to a process area and address the unique characteristics that describe what must be implemented to satisfy the process area. Specific goals are required model components and are used in appraisals to help determine whether a process area is satisfied.<br>
    <span class=\"auto-style2\"><b>SP or Specific Practice:</b> <span class=\"smltxt\">SP's are an activity that is considered important in achieving the associated specific goal. The specific practices describe the activities expected to result in achievement of the specific goals of a process area. Specific practices are expected model components.</span></span></span></span></span></span></span></span></span></span></span></p>
  <p><span dir=\"auto\">
    <map id=\"ImgMap0\" name=\"ImgMap0\">
      <span dir=\"auto\"></span>
      <area coords=\"63, 1192, 470, 1211\" href=\"/cmmidev/pp#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1264, 471, 1285\" href=\"/cmmidev/pp#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1156, 471, 1177\" href=\"/cmmidev/pp#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1177, 471, 1195\" href=\"/cmmidev/pp#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"116, 1195, 468, 1211\" href=\"/cmmidev/pp#sp13\" shape=\"rect\">
      <area coords=\"62, 1210, 470, 1231\" href=\"/cmmidev/pp#sp1.4\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1247, 471, 1268\" href=\"/cmmidev/pp#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1281, 471, 1301\" href=\"/cmmidev/pp#sp2.3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1299, 471, 1320\" href=\"/cmmidev/pp#sp2.4\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1320, 470, 1336\" href=\"/cmmidev/pp#sp2.5\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1337, 470, 1356\" href=\"/cmmidev/pp#sp2.6\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1356, 470, 1375\" href=\"/cmmidev/pp#sp2.7\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1388, 471, 1410\" href=\"/cmmidev/pp#sp3.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1410, 471, 1427\" href=\"/cmmidev/pp#sp3.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"114, 1426, 471, 1445\" href=\"/cmmidev/pp#sp3.3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1482, 466, 1503\" href=\"/cmmidev/pmc#sp11\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1502, 471, 1521\" href=\"/cmmidev/pmc#sp12\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1518, 472, 1540\" href=\"/cmmidev/pmc#sp13\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1538, 471, 1558\" href=\"/cmmidev/pmc#sp14\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1556, 471, 1578\" href=\"/cmmidev/pmc#sp15\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1578, 469, 1595\" href=\"/cmmidev/pmc#sp16\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1595, 470, 1614\" href=\"/cmmidev/pmc#sp17\" shape=\"rect\" target=\"_blank\">
      <area coords=\"67, 1632, 473, 1652\" href=\"/cmmidev/pmc#sp21\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1652, 474, 1670\" href=\"/cmmidev/pmc#sp22\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1670, 472, 1691\" href=\"/cmmidev/pmc#sp23\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1137, 475, 1155\" href=\"/cmmidev/pp#sg1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1229, 473, 1250\" href=\"/cmmidev/pp#sg2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1374, 471, 1391\" href=\"/cmmidev/pp#sg3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1461, 469, 1481\" href=\"/cmmidev/pmc#sg1\" shape=\"rect\">
      <area coords=\"65, 1613, 471, 1632\" href=\"/cmmidev/pmc#sg2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1442, 464, 1464\" href=\"/cmmidev/pmc.php\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1122, 464, 1140\" href=\"/cmmidev/pp.php\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"66, 2543, 470, 2560\" href=\"cmmireq#spg\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2561, 472, 2579\" href=\"cmmireq#sg1\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2580, 470, 2597\" href=\"cmmireq#sp11\" shape=\"rect\">
      <area alt=\"\" coords=\"67, 2597, 470, 2614\" href=\"cmmireq#sp12\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2614, 471, 2633\" href=\"cmmireq#sp13\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 2634, 470, 2652\" href=\"cmmireq#sp14\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2651, 469, 2669\" href=\"cmmireq#sp15\" shape=\"rect\">
      <area coords=\"66, 4459, 472, 4478\" href=\"/cmmidevviewpdf/car.pdf\" shape=\"rect\">
      <area coords=\"66, 3781, 472, 3801\" href=\"/cmmidevviewpdf/cm.pdf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"68, 2543, 472, 2561\" href=\"/cmmidev/reqm.php\" shape=\"rect\">
      <area coords=\"64, 1689, 474, 1708\" href=\"/cmmidev/sam.php\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"66, 1852, 474, 1868\" href=\"/cmmidev/ippd_ipm_ippd.php\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 503, 472, 520\" href=\"/cmmidev/ot.php\" shape=\"rect\">
      <span dir=\"auto\"></span>
      <area coords=\"65, 342, 470, 361\" href=\"/cmmidev/opd_opd_ippd.php\" shape=\"rect\">
      <area coords=\"65, 74, 476, 95\" href=\"/cmmidev/opf.php\" shape=\"rect\">
      <area coords=\"65, 96, 475, 130\" href=\"/cmmidev/opf#sg1\" shape=\"rect\">
      <area coords=\"66, 2668, 471, 2686\" href=\"/cmmidev/rd.php\" shape=\"rect\">
      <area coords=\"66, 2685, 473, 2704\" href=\"/cmmidev/rd#sg1\" shape=\"rect\">
      <area alt=\"\" coords=\"67, 2701, 471, 2722\" href=\"/cmmidev/rd#sp11\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2719, 470, 2741\" href=\"/cmmidev/rd#sp12\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2741, 471, 2757\" href=\"/cmmidev/rd#sg2\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2756, 473, 2775\" href=\"/cmmidev/rd#sp21\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 2774, 472, 2794\" href=\"/cmmidev/rd#sp22\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 2795, 472, 2814\" href=\"/cmmidev/rd#sp23\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 2810, 473, 2831\" href=\"/cmmidev/rd#sg3\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2830, 470, 2847\" href=\"/cmmidev/rd#sp31\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2848, 475, 2868\" href=\"/cmmidev/rd#sp32\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2869, 471, 2886\" href=\"/cmmidev/rd#sp33\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2885, 473, 2905\" href=\"/cmmidev/rd#sp34\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2905, 474, 2924\" href=\"/cmmidev/rd#sp35\" shape=\"rect\">
      <area coords=\"504, 0, 1051, 36\" href=\"cmmidev/cmmi%20dev%20combined\" shape=\"rect\" target=\"_blank\">
      <area coords=\"475, 1119, 517, 1137\" href=\"cmmidev/pp\" shape=\"rect\" target=\"_blank\">
      <area coords=\"471, 1444, 528, 1464\" href=\"cmmidev/pmc\" shape=\"rect\" target=\"_blank\">
      <area coords=\"471, 2123, 519, 2141\" href=\"cmmidev/rskm\" shape=\"rect\" target=\"_blank\">
      <area coords=\"475, 1688, 516, 1709\" href=\"cmmidev/sam\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"472, 2668, 531, 2688\" href=\"cmmidev/rd\" shape=\"rect\" target=\"_blank\" title=\"\">
      <area coords=\"471, 2540, 525, 2564\" href=\"cmmidev/reqm\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 2124, 356, 2143\" href=\"/cmmidev/rskm.php\" shape=\"rect\">
      <area coords=\"115, 2161, 471, 2178\" href=\"/cmmidev/rskm#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"117, 2177, 470, 2196\" href=\"/cmmidev/rskm#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"116, 2195, 472, 2214\" href=\"/cmmidev/rskm#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"115, 2232, 472, 2250\" href=\"/cmmidev/rskm#sp21\" shape=\"rect\" target=\"_blank\">
      <area coords=\"114, 2248, 472, 2268\" href=\"/cmmidev/rskm#sp22\" shape=\"rect\" target=\"_blank\">
      <area coords=\"115, 2287, 472, 2305\" href=\"/cmmidev/rskm#sp31\" shape=\"rect\" target=\"_blank\">
      <area coords=\"114, 2305, 474, 2322\" href=\"/cmmidev/rskm#sp32\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1027, 1119, 1051, 1138\" href=\"cmmidev/pa/pp/pp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1028, 74, 1050, 93\" href=\"cmmidev/pa/opf/opf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1029, 344, 1050, 363\" href=\"cmmidev/pa/opd/opd\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1031, 504, 1049, 527\" href=\"cmmidev/pa/ot/ot\" shape=\"rect\" target=\"_blank\">
      <area coords=\"1027, 694, 1051, 715\" href=\"cmmidev/pa/opp/opp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1033, 832, 1051, 852\" href=\"cmmidev/pa/opm/opm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1025, 832, 1051, 857\" href=\"cmmidev/pa/opp/opp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1026, 1447, 1051, 1465\" href=\"cmmidev/pa/pp/pp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1026, 1690, 1051, 1711\" href=\"cmmidev/pa/sam/sam\" shape=\"rect\">
      <area coords=\"1024, 1851, 1051, 1874\" href=\"cmmidev/pa/ipm/ipm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1025, 2124, 1049, 2147\" href=\"cmmidev/pa/rskm/rskm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1026, 2323, 1050, 2346\" href=\"cmmidev/pa/qpm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1027, 2542, 1050, 2561\" href=\"cmmidev/pa/reqm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1024, 2670, 1050, 2689\" href=\"cmmidev/pa/rd/rd\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1027, 2923, 1050, 2944\" href=\"cmmidev/pa/ts/ts\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1019, 3134, 1051, 3156\" href=\"cmmidev/pa/pi/pi\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1021, 3386, 1049, 3407\" href=\"cmmidev/pa/ver/ver\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1021, 3602, 1050, 3620\" href=\"cmmidev/pa/val/val\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 3798, 471, 3816\" href=\"/cmmidev/cm#sg1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"67, 3815, 470, 3836\" href=\"/cmmidev/cm#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 3835, 472, 3853\" href=\"/cmmidev/cm#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 3850, 473, 3869\" href=\"/cmmidev/cm#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 3868, 473, 3889\" href=\"/cmmidev/cm#sg2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 3889, 473, 3909\" href=\"/cmmidev/cm#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 3907, 471, 3928\" href=\"/cmmidev/cm#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 3924, 473, 3943\" href=\"/cmmidev/cm#sg3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 3942, 472, 3963\" href=\"/cmmidev/cm#sp3.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 3963, 474, 3979\" href=\"/cmmidev/cm#sp3.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"62, 3978, 472, 3998\" href=\"/cmmidevviewpdf/ppqa.pdf\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 3998, 470, 4030\" href=\"/cmmidev/ppqa#sg1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"62, 4029, 472, 4048\" href=\"/cmmidev/ppqa#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 4048, 474, 4065\" href=\"/cmmidev/ppqa#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 4064, 477, 4083\" href=\"/cmmidev/ppqa#sg2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"62, 4081, 478, 4102\" href=\"/cmmidev/ppqa#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 4101, 475, 4121\" href=\"/cmmidev/ppqa#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"62, 4121, 474, 4140\" href=\"/cmmidevviewpdf/ma.pdf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"61, 4140, 474, 4157\" href=\"/cmmidev/ma.phpsp1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4156, 476, 4174\" href=\"/cmmidev/ma#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 4175, 472, 4193\" href=\"/cmmidev/ma#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 4190, 472, 4209\" href=\"/cmmidev/ma#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4207, 473, 4229\" href=\"/cmmidev/ma#sp1.4\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"67, 4226, 472, 4247\" href=\"/cmmidev/ma#sg2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"65, 4247, 475, 4265\" href=\"/cmmidev/ma#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4265, 472, 4281\" href=\"/cmmidev/ma#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4281, 475, 4299\" href=\"/cmmidev/ma#sp2.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"66, 4298, 473, 4317\" href=\"/cmmidev/ma#sp2.4\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1708, 480, 1728\" href=\"/cmmidev/sam#sg1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1725, 473, 1745\" href=\"/cmmidev/sam#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"62, 1742, 475, 1762\" href=\"/cmmidev/sam#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"65, 1763, 473, 1781\" href=\"/cmmidev/sam#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 1781, 473, 1799\" href=\"/cmmidev/sam#sg2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"65, 1797, 474, 1815\" href=\"/cmmidev/sam#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 1814, 476, 1833\" href=\"/cmmidev/sam#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"62, 1833, 474, 1852\" href=\"/cmmidev/sam#sp2.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"476, 75, 513, 95\" href=\"cmmidev/opf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"472, 342, 510, 362\" href=\"cmmidev/opd\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"472, 502, 511, 524\" href=\"cmmidev/ot\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"471, 693, 514, 713\" href=\"cmmidev/opp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"470, 831, 512, 853\" href=\"cmmidev/opm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"476, 1849, 511, 1871\" href=\"cmmidev/ipm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"474, 2321, 513, 2343\" href=\"cmmidev/qpm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"474, 2923, 509, 2942\" href=\"cmmidev/ts\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"471, 3135, 511, 3156\" href=\"cmmidev/pi\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"471, 3386, 516, 3406\" href=\"cmmidev/ver\" shape=\"rect\" target=\"_blank\">
      <area coords=\"472, 3601, 511, 3620\" href=\"/cmmidev/val\" shape=\"rect\" target=\"_blank\">
      <area coords=\"474, 3781, 513, 3801\" href=\"/cmmidev/cm\" shape=\"rect\" target=\"_blank\">
      <area coords=\"473, 3977, 516, 4000\" href=\"/cmmidev/ppqa\" shape=\"rect\" target=\"_blank\">
      <area coords=\"475, 4119, 511, 4141\" href=\"/cmmidev/ma\" shape=\"rect\" target=\"_blank\">
      <area coords=\"471, 4317, 518, 4338\" href=\"/cmmidev/dar\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"472, 4456, 515, 4483\" href=\"/cmmidev/car\" shape=\"rect\" target=\"_blank\">
      <area coords=\"67, 129, 470, 145\" href=\"/cmmidev/opf#sp11\" shape=\"rect\">
      <area coords=\"66, 147, 472, 164\" href=\"/cmmidev/opf#sp12\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 164, 470, 183\" href=\"/cmmidev/opf#sp13\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 184, 470, 200\" href=\"/cmmidev/opf#sg2\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 197, 470, 219\" href=\"/cmmidev/opf#sp21\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 218, 471, 239\" href=\"/cmmidev/opf#sp22\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 236, 470, 269\" href=\"/cmmidev/opf#sg3\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 268, 471, 288\" href=\"/cmmidev/opf#sp31\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 286, 470, 308\" href=\"/cmmidev/opf#sp32\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 305, 470, 325\" href=\"/cmmidev/opf#sp33\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 322, 470, 343\" href=\"/cmmidev/opf#sp34\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 128, 64, 146\" href=\"/cmmidev/opf#sp11wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 146, 62, 165\" href=\"/cmmidev/opf#sp12wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 165, 63, 184\" href=\"/cmmidev/opf#sp13wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 197, 62, 218\" href=\"/cmmidev/opf#sp21wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 218, 62, 237\" href=\"/cmmidev/opf#sp22wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 269, 66, 288\" href=\"/cmmidev/opf#sp31wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 287, 64, 309\" href=\"/cmmidev/opf#sp32wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 309, 64, 325\" href=\"/cmmidev/opf#sp33wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 325, 65, 342\" href=\"/cmmidev/opf#sp34wp\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 4479, 474, 4496\" href=\"/cmmidev/car#sgone\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 4496, 473, 4513\" href=\"/cmmidev/car#sponeone\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 4513, 474, 4531\" href=\"/cmmidev/car#sponetwo\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 4532, 473, 4551\" href=\"/cmmidev/car#sgtwo\" shape=\"rect\">
      <area alt=\"\" coords=\"62, 4554, 472, 4572\" href=\"/cmmidev/car#sptwoone\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 4568, 471, 4584\" href=\"/cmmidev/car#sptwotwo\" shape=\"rect\">
      <area alt=\"\" coords=\"63, 4585, 472, 4603\" href=\"/cmmidev/car#sptwothree\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 4317, 473, 4334\" href=\"/cmmidevviewpdf/dar.pdf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4335, 476, 4355\" href=\"/cmmidev/dar#sg1\" shape=\"rect\">
      <area coords=\"65, 4352, 468, 4369\" href=\"/cmmidev/dar#sp1.1\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 4369, 468, 4389\" href=\"/cmmidev/dar#sp1.2\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 4389, 475, 4407\" href=\"/cmmidev/dar#sp1.3\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 4407, 476, 4425\" href=\"/cmmidev/dar#sp1.4\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 4425, 473, 4442\" href=\"/cmmidev/dar#sp1.5\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 4440, 473, 4459\" href=\"/cmmidev/dar#sp1.6\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3599, 473, 3619\" href=\"/cmmidevviewpdf/val.pdf\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3619, 473, 3637\" href=\"/cmmidev/val#sg1\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3637, 476, 3656\" href=\"/cmmidev/val#sp1.1\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3656, 471, 3674\" href=\"/cmmidev/val#sp1.2\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3674, 471, 3692\" href=\"/cmmidev/val#sp1.3\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3709, 473, 3727\" href=\"/cmmidev/val#sp2.1\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 3726, 476, 3747\" href=\"/cmmidev/val#sp2.2\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3692, 473, 3712\" href=\"/cmmidev/val#sg2\" shape=\"rect\">
    </map>
    <img alt=\"CMMi-Dev1.3 dashboard\" class=\"img-fluid\" src=\"/images/cmmi-dev1.png\" usemap=\"#ImgMap0\" ></span></p>
  <p><span dir=\"auto\">&nbsp;</span></p>
  <span dir=\"auto\">
  <map id=\"ImgMap1\" name=\"ImgMap1\">
    <span dir=\"auto\"></span>
    <area alt=\"\" coords=\"102, 10, 82, 79, 132, 27\" href=\"cmmidev/module%201\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"134, 27, 84, 80, 150, 59\" href=\"cmmidev/module%202\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"149, 62, 84, 79, 149, 96\" href=\"cmmidev/module%203\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"149, 100, 88, 80, 130, 126\" href=\"cmmidev/module%204\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"129, 127, 89, 80, 99, 144\" href=\"cmmidev/module%205\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"102, 144, 86, 78, 62, 144, 101, 148\" href=\"cmmidev/module%206\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"59, 148, 84, 77, 32, 129\" href=\"cmmidev/module%207\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"85, 78, 33, 130, 10, 100\" href=\"cmmidev/module%208\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"80, 79, 11, 99, 8, 61\" href=\"cmmidev/module%209\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"84, 78, 9, 60, 28, 23, 87, 79, 74, 77, 69, 72, 67, 75\" href=\"cmmidev/module%2010\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"82, 74, 30, 23, 60, 8\" href=\"cmmidev/module%2011\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"83, 73, 61, 7, 103, 9, 88, 68, 82, 65\" href=\"cmmidev/module%2012\" shape=\"poly\" target=\"_blank\">
  </map>
  <img alt=\"\" class=\"img-fluid\" src=\"/images/cmmimods.png\" usemap=\"#ImgMap1\" ><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </span> </div>
";
        }
        // line 243
        yield "

";
        // line 245
        if ((($tmp =  !($context["user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"container\" align=\"left\" ><h3 align=\"left\">Please log on to access the content on this page</h3><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>";
        }
        if (( !($context["current_user"] ?? null) && false)) {
            // line 246
            yield "<div class=\"container\" align=\"center\">
  <h5 align=\"left\">CMMi for Development:&nbsp;Processes</h5>
  <p align=\"left\">Can you see that the PMBOK processes are found mostly at Maturity Level (ML) 2 (with a few on Level 3 and above).<br>
    Also see that the <a href=\"/landscape\" target=\"_blank\">Standards / Frameworks landscape</a>: Software
    Engineering, DevOps, KanBan, ITIL, CM, Traditional &amp; Agile
    Project Management Process, Cobit and others are fundamentally all
    focused on removing constraints between ML2 processes PP and PMC <a href=\"/home/vmodel\" target=\"_blank\">as you improve between baselines.</a><br>
    To illustrate this point for Agile Project Management <a href=\"/scrum\">check out PP and PMC for Scrum here.</a> </p>
  <hr style=\"width: 94%\">
  <img alt=\"CMMi-Dev1.3 dashboard\" class=\"img-fluid\" src=\"/images/cmmi-dev1.png\" usemap=\"#ImgMap0\" > <br>
  <br>
</div>
";
        }
        // line 259
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/cmmidevdash.twig";
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
        return array (  345 => 259,  330 => 246,  325 => 245,  321 => 243,  81 => 5,  79 => 4,  72 => 3,  53 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.twig' %}
{% block title %} {% if not user %}PMWay{% endif %} {% if user %}CMMi Dev Dashboard {% endif %}  {% endblock %}
{% block body %}
{% if user %}

<!--BODY-->
<div class=\"container\">
  <h5 align=\"left\">CMMi for Development:&nbsp;Processes</h5>
  <p align=\"left\">Can you see that the PMBOK processes are found mostly at Maturity Level (ML) 2 (with a few on Level 3 and above).<br>
    Also see that the <a href=\"/landscape\" target=\"_blank\">Standards / Frameworks landscape</a>: Software
    Engineering, DevOps, KanBan, ITIL, CM, Traditional &amp; Agile
    Project Management Process, Cobit and others are fundamentally all
    focused on removing constraints between ML2 processes PP and PMC <a href=\"/home/vmodel\" target=\"_blank\">as you improve between baselines.</a><br>
    To illustrate this point for Agile Project Management <a href=\"/scrum\">check out PP and PMC for Scrum here.</a> </p>
  <hr style=\"width: 94%\">
  <p><span dir=\"auto\"><span class=\"auto-style2\"><b>Category:</b>&nbsp;<span class=\"smltxt\">Logical grouping of Process Areas I.e. Project Management, Engineering, Support etc.<br>
    <span class=\"auto-style2\"><b>PA or Process Area:</b>&nbsp; A Process: <span class=\"smltxt\">is a set of activities, methods, practices, and transformations that people use to develop and maintain systems and associated products.&nbsp; <strong><br>
    </strong>There are 22 processes in CMMi Development 1.3 which form a cluster of related practices in an area that, when performed collectively, satisfy a set of goals considered important for making significant improvement in that area. .<br>
    <span class=\"auto-style3\"><strong>ML or Maturity level:</strong><span class=\"smltxt\">&nbsp; Degree of process improvement across a predefined set of process areas in which all goals within the set are attained.<br>
    <span class=\"auto-style2\"><b>SG or Specific Goal:</b><span class=\"smltxt\">&nbsp; SG's apply to a process area and address the unique characteristics that describe what must be implemented to satisfy the process area. Specific goals are required model components and are used in appraisals to help determine whether a process area is satisfied.<br>
    <span class=\"auto-style2\"><b>SP or Specific Practice:</b> <span class=\"smltxt\">SP's are an activity that is considered important in achieving the associated specific goal. The specific practices describe the activities expected to result in achievement of the specific goals of a process area. Specific practices are expected model components.</span></span></span></span></span></span></span></span></span></span></span></p>
  <p><span dir=\"auto\">
    <map id=\"ImgMap0\" name=\"ImgMap0\">
      <span dir=\"auto\"></span>
      <area coords=\"63, 1192, 470, 1211\" href=\"/cmmidev/pp#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1264, 471, 1285\" href=\"/cmmidev/pp#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1156, 471, 1177\" href=\"/cmmidev/pp#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1177, 471, 1195\" href=\"/cmmidev/pp#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"116, 1195, 468, 1211\" href=\"/cmmidev/pp#sp13\" shape=\"rect\">
      <area coords=\"62, 1210, 470, 1231\" href=\"/cmmidev/pp#sp1.4\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1247, 471, 1268\" href=\"/cmmidev/pp#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1281, 471, 1301\" href=\"/cmmidev/pp#sp2.3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1299, 471, 1320\" href=\"/cmmidev/pp#sp2.4\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1320, 470, 1336\" href=\"/cmmidev/pp#sp2.5\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1337, 470, 1356\" href=\"/cmmidev/pp#sp2.6\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1356, 470, 1375\" href=\"/cmmidev/pp#sp2.7\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1388, 471, 1410\" href=\"/cmmidev/pp#sp3.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1410, 471, 1427\" href=\"/cmmidev/pp#sp3.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"114, 1426, 471, 1445\" href=\"/cmmidev/pp#sp3.3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1482, 466, 1503\" href=\"/cmmidev/pmc#sp11\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 1502, 471, 1521\" href=\"/cmmidev/pmc#sp12\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1518, 472, 1540\" href=\"/cmmidev/pmc#sp13\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1538, 471, 1558\" href=\"/cmmidev/pmc#sp14\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1556, 471, 1578\" href=\"/cmmidev/pmc#sp15\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1578, 469, 1595\" href=\"/cmmidev/pmc#sp16\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1595, 470, 1614\" href=\"/cmmidev/pmc#sp17\" shape=\"rect\" target=\"_blank\">
      <area coords=\"67, 1632, 473, 1652\" href=\"/cmmidev/pmc#sp21\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1652, 474, 1670\" href=\"/cmmidev/pmc#sp22\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1670, 472, 1691\" href=\"/cmmidev/pmc#sp23\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1137, 475, 1155\" href=\"/cmmidev/pp#sg1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1229, 473, 1250\" href=\"/cmmidev/pp#sg2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 1374, 471, 1391\" href=\"/cmmidev/pp#sg3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1461, 469, 1481\" href=\"/cmmidev/pmc#sg1\" shape=\"rect\">
      <area coords=\"65, 1613, 471, 1632\" href=\"/cmmidev/pmc#sg2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1442, 464, 1464\" href=\"/cmmidev/pmc.php\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 1122, 464, 1140\" href=\"/cmmidev/pp.php\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"66, 2543, 470, 2560\" href=\"cmmireq#spg\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2561, 472, 2579\" href=\"cmmireq#sg1\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2580, 470, 2597\" href=\"cmmireq#sp11\" shape=\"rect\">
      <area alt=\"\" coords=\"67, 2597, 470, 2614\" href=\"cmmireq#sp12\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2614, 471, 2633\" href=\"cmmireq#sp13\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 2634, 470, 2652\" href=\"cmmireq#sp14\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2651, 469, 2669\" href=\"cmmireq#sp15\" shape=\"rect\">
      <area coords=\"66, 4459, 472, 4478\" href=\"/cmmidevviewpdf/car.pdf\" shape=\"rect\">
      <area coords=\"66, 3781, 472, 3801\" href=\"/cmmidevviewpdf/cm.pdf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"68, 2543, 472, 2561\" href=\"/cmmidev/reqm.php\" shape=\"rect\">
      <area coords=\"64, 1689, 474, 1708\" href=\"/cmmidev/sam.php\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"66, 1852, 474, 1868\" href=\"/cmmidev/ippd_ipm_ippd.php\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 503, 472, 520\" href=\"/cmmidev/ot.php\" shape=\"rect\">
      <span dir=\"auto\"></span>
      <area coords=\"65, 342, 470, 361\" href=\"/cmmidev/opd_opd_ippd.php\" shape=\"rect\">
      <area coords=\"65, 74, 476, 95\" href=\"/cmmidev/opf.php\" shape=\"rect\">
      <area coords=\"65, 96, 475, 130\" href=\"/cmmidev/opf#sg1\" shape=\"rect\">
      <area coords=\"66, 2668, 471, 2686\" href=\"/cmmidev/rd.php\" shape=\"rect\">
      <area coords=\"66, 2685, 473, 2704\" href=\"/cmmidev/rd#sg1\" shape=\"rect\">
      <area alt=\"\" coords=\"67, 2701, 471, 2722\" href=\"/cmmidev/rd#sp11\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2719, 470, 2741\" href=\"/cmmidev/rd#sp12\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2741, 471, 2757\" href=\"/cmmidev/rd#sg2\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2756, 473, 2775\" href=\"/cmmidev/rd#sp21\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 2774, 472, 2794\" href=\"/cmmidev/rd#sp22\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 2795, 472, 2814\" href=\"/cmmidev/rd#sp23\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 2810, 473, 2831\" href=\"/cmmidev/rd#sg3\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2830, 470, 2847\" href=\"/cmmidev/rd#sp31\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2848, 475, 2868\" href=\"/cmmidev/rd#sp32\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2869, 471, 2886\" href=\"/cmmidev/rd#sp33\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2885, 473, 2905\" href=\"/cmmidev/rd#sp34\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 2905, 474, 2924\" href=\"/cmmidev/rd#sp35\" shape=\"rect\">
      <area coords=\"504, 0, 1051, 36\" href=\"cmmidev/cmmi%20dev%20combined\" shape=\"rect\" target=\"_blank\">
      <area coords=\"475, 1119, 517, 1137\" href=\"cmmidev/pp\" shape=\"rect\" target=\"_blank\">
      <area coords=\"471, 1444, 528, 1464\" href=\"cmmidev/pmc\" shape=\"rect\" target=\"_blank\">
      <area coords=\"471, 2123, 519, 2141\" href=\"cmmidev/rskm\" shape=\"rect\" target=\"_blank\">
      <area coords=\"475, 1688, 516, 1709\" href=\"cmmidev/sam\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"472, 2668, 531, 2688\" href=\"cmmidev/rd\" shape=\"rect\" target=\"_blank\" title=\"\">
      <area coords=\"471, 2540, 525, 2564\" href=\"cmmidev/reqm\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 2124, 356, 2143\" href=\"/cmmidev/rskm.php\" shape=\"rect\">
      <area coords=\"115, 2161, 471, 2178\" href=\"/cmmidev/rskm#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"117, 2177, 470, 2196\" href=\"/cmmidev/rskm#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"116, 2195, 472, 2214\" href=\"/cmmidev/rskm#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"115, 2232, 472, 2250\" href=\"/cmmidev/rskm#sp21\" shape=\"rect\" target=\"_blank\">
      <area coords=\"114, 2248, 472, 2268\" href=\"/cmmidev/rskm#sp22\" shape=\"rect\" target=\"_blank\">
      <area coords=\"115, 2287, 472, 2305\" href=\"/cmmidev/rskm#sp31\" shape=\"rect\" target=\"_blank\">
      <area coords=\"114, 2305, 474, 2322\" href=\"/cmmidev/rskm#sp32\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1027, 1119, 1051, 1138\" href=\"cmmidev/pa/pp/pp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1028, 74, 1050, 93\" href=\"cmmidev/pa/opf/opf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1029, 344, 1050, 363\" href=\"cmmidev/pa/opd/opd\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1031, 504, 1049, 527\" href=\"cmmidev/pa/ot/ot\" shape=\"rect\" target=\"_blank\">
      <area coords=\"1027, 694, 1051, 715\" href=\"cmmidev/pa/opp/opp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1033, 832, 1051, 852\" href=\"cmmidev/pa/opm/opm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1025, 832, 1051, 857\" href=\"cmmidev/pa/opp/opp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1026, 1447, 1051, 1465\" href=\"cmmidev/pa/pp/pp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1026, 1690, 1051, 1711\" href=\"cmmidev/pa/sam/sam\" shape=\"rect\">
      <area coords=\"1024, 1851, 1051, 1874\" href=\"cmmidev/pa/ipm/ipm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1025, 2124, 1049, 2147\" href=\"cmmidev/pa/rskm/rskm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1026, 2323, 1050, 2346\" href=\"cmmidev/pa/qpm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1027, 2542, 1050, 2561\" href=\"cmmidev/pa/reqm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1024, 2670, 1050, 2689\" href=\"cmmidev/pa/rd/rd\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1027, 2923, 1050, 2944\" href=\"cmmidev/pa/ts/ts\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1019, 3134, 1051, 3156\" href=\"cmmidev/pa/pi/pi\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1021, 3386, 1049, 3407\" href=\"cmmidev/pa/ver/ver\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"1021, 3602, 1050, 3620\" href=\"cmmidev/pa/val/val\" shape=\"rect\" target=\"_blank\">
      <area coords=\"66, 3798, 471, 3816\" href=\"/cmmidev/cm#sg1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"67, 3815, 470, 3836\" href=\"/cmmidev/cm#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 3835, 472, 3853\" href=\"/cmmidev/cm#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 3850, 473, 3869\" href=\"/cmmidev/cm#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 3868, 473, 3889\" href=\"/cmmidev/cm#sg2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 3889, 473, 3909\" href=\"/cmmidev/cm#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 3907, 471, 3928\" href=\"/cmmidev/cm#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 3924, 473, 3943\" href=\"/cmmidev/cm#sg3\" shape=\"rect\" target=\"_blank\">
      <area coords=\"65, 3942, 472, 3963\" href=\"/cmmidev/cm#sp3.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 3963, 474, 3979\" href=\"/cmmidev/cm#sp3.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"62, 3978, 472, 3998\" href=\"/cmmidevviewpdf/ppqa.pdf\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 3998, 470, 4030\" href=\"/cmmidev/ppqa#sg1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"62, 4029, 472, 4048\" href=\"/cmmidev/ppqa#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 4048, 474, 4065\" href=\"/cmmidev/ppqa#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"64, 4064, 477, 4083\" href=\"/cmmidev/ppqa#sg2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"62, 4081, 478, 4102\" href=\"/cmmidev/ppqa#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 4101, 475, 4121\" href=\"/cmmidev/ppqa#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area coords=\"62, 4121, 474, 4140\" href=\"/cmmidevviewpdf/ma.pdf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"61, 4140, 474, 4157\" href=\"/cmmidev/ma.phpsp1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4156, 476, 4174\" href=\"/cmmidev/ma#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 4175, 472, 4193\" href=\"/cmmidev/ma#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 4190, 472, 4209\" href=\"/cmmidev/ma#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4207, 473, 4229\" href=\"/cmmidev/ma#sp1.4\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"67, 4226, 472, 4247\" href=\"/cmmidev/ma#sg2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"65, 4247, 475, 4265\" href=\"/cmmidev/ma#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4265, 472, 4281\" href=\"/cmmidev/ma#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4281, 475, 4299\" href=\"/cmmidev/ma#sp2.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"66, 4298, 473, 4317\" href=\"/cmmidev/ma#sp2.4\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1708, 480, 1728\" href=\"/cmmidev/sam#sg1\" shape=\"rect\" target=\"_blank\">
      <area coords=\"63, 1725, 473, 1745\" href=\"/cmmidev/sam#sp1.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"62, 1742, 475, 1762\" href=\"/cmmidev/sam#sp1.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"65, 1763, 473, 1781\" href=\"/cmmidev/sam#sp1.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 1781, 473, 1799\" href=\"/cmmidev/sam#sg2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"65, 1797, 474, 1815\" href=\"/cmmidev/sam#sp2.1\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"63, 1814, 476, 1833\" href=\"/cmmidev/sam#sp2.2\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"62, 1833, 474, 1852\" href=\"/cmmidev/sam#sp2.3\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"476, 75, 513, 95\" href=\"cmmidev/opf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"472, 342, 510, 362\" href=\"cmmidev/opd\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"472, 502, 511, 524\" href=\"cmmidev/ot\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"471, 693, 514, 713\" href=\"cmmidev/opp\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"470, 831, 512, 853\" href=\"cmmidev/opm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"476, 1849, 511, 1871\" href=\"cmmidev/ipm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"474, 2321, 513, 2343\" href=\"cmmidev/qpm\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"474, 2923, 509, 2942\" href=\"cmmidev/ts\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"471, 3135, 511, 3156\" href=\"cmmidev/pi\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"471, 3386, 516, 3406\" href=\"cmmidev/ver\" shape=\"rect\" target=\"_blank\">
      <area coords=\"472, 3601, 511, 3620\" href=\"/cmmidev/val\" shape=\"rect\" target=\"_blank\">
      <area coords=\"474, 3781, 513, 3801\" href=\"/cmmidev/cm\" shape=\"rect\" target=\"_blank\">
      <area coords=\"473, 3977, 516, 4000\" href=\"/cmmidev/ppqa\" shape=\"rect\" target=\"_blank\">
      <area coords=\"475, 4119, 511, 4141\" href=\"/cmmidev/ma\" shape=\"rect\" target=\"_blank\">
      <area coords=\"471, 4317, 518, 4338\" href=\"/cmmidev/dar\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"472, 4456, 515, 4483\" href=\"/cmmidev/car\" shape=\"rect\" target=\"_blank\">
      <area coords=\"67, 129, 470, 145\" href=\"/cmmidev/opf#sp11\" shape=\"rect\">
      <area coords=\"66, 147, 472, 164\" href=\"/cmmidev/opf#sp12\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 164, 470, 183\" href=\"/cmmidev/opf#sp13\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 184, 470, 200\" href=\"/cmmidev/opf#sg2\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 197, 470, 219\" href=\"/cmmidev/opf#sp21\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 218, 471, 239\" href=\"/cmmidev/opf#sp22\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 236, 470, 269\" href=\"/cmmidev/opf#sg3\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 268, 471, 288\" href=\"/cmmidev/opf#sp31\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 286, 470, 308\" href=\"/cmmidev/opf#sp32\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 305, 470, 325\" href=\"/cmmidev/opf#sp33\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 322, 470, 343\" href=\"/cmmidev/opf#sp34\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 128, 64, 146\" href=\"/cmmidev/opf#sp11wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 146, 62, 165\" href=\"/cmmidev/opf#sp12wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 165, 63, 184\" href=\"/cmmidev/opf#sp13wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 197, 62, 218\" href=\"/cmmidev/opf#sp21wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 218, 62, 237\" href=\"/cmmidev/opf#sp22wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 269, 66, 288\" href=\"/cmmidev/opf#sp31wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 287, 64, 309\" href=\"/cmmidev/opf#sp32wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 309, 64, 325\" href=\"/cmmidev/opf#sp33wp\" shape=\"rect\">
      <area alt=\"\" coords=\"0, 325, 65, 342\" href=\"/cmmidev/opf#sp34wp\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 4479, 474, 4496\" href=\"/cmmidev/car#sgone\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 4496, 473, 4513\" href=\"/cmmidev/car#sponeone\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 4513, 474, 4531\" href=\"/cmmidev/car#sponetwo\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 4532, 473, 4551\" href=\"/cmmidev/car#sgtwo\" shape=\"rect\">
      <area alt=\"\" coords=\"62, 4554, 472, 4572\" href=\"/cmmidev/car#sptwoone\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 4568, 471, 4584\" href=\"/cmmidev/car#sptwotwo\" shape=\"rect\">
      <area alt=\"\" coords=\"63, 4585, 472, 4603\" href=\"/cmmidev/car#sptwothree\" shape=\"rect\">
      <area alt=\"\" coords=\"65, 4317, 473, 4334\" href=\"/cmmidevviewpdf/dar.pdf\" shape=\"rect\" target=\"_blank\">
      <area alt=\"\" coords=\"64, 4335, 476, 4355\" href=\"/cmmidev/dar#sg1\" shape=\"rect\">
      <area coords=\"65, 4352, 468, 4369\" href=\"/cmmidev/dar#sp1.1\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 4369, 468, 4389\" href=\"/cmmidev/dar#sp1.2\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 4389, 475, 4407\" href=\"/cmmidev/dar#sp1.3\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 4407, 476, 4425\" href=\"/cmmidev/dar#sp1.4\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 4425, 473, 4442\" href=\"/cmmidev/dar#sp1.5\" shape=\"rect\">
      <area alt=\"\" coords=\"68, 4440, 473, 4459\" href=\"/cmmidev/dar#sp1.6\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3599, 473, 3619\" href=\"/cmmidevviewpdf/val.pdf\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3619, 473, 3637\" href=\"/cmmidev/val#sg1\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3637, 476, 3656\" href=\"/cmmidev/val#sp1.1\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3656, 471, 3674\" href=\"/cmmidev/val#sp1.2\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3674, 471, 3692\" href=\"/cmmidev/val#sp1.3\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3709, 473, 3727\" href=\"/cmmidev/val#sp2.1\" shape=\"rect\">
      <area alt=\"\" coords=\"64, 3726, 476, 3747\" href=\"/cmmidev/val#sp2.2\" shape=\"rect\">
      <area alt=\"\" coords=\"66, 3692, 473, 3712\" href=\"/cmmidev/val#sg2\" shape=\"rect\">
    </map>
    <img alt=\"CMMi-Dev1.3 dashboard\" class=\"img-fluid\" src=\"/images/cmmi-dev1.png\" usemap=\"#ImgMap0\" ></span></p>
  <p><span dir=\"auto\">&nbsp;</span></p>
  <span dir=\"auto\">
  <map id=\"ImgMap1\" name=\"ImgMap1\">
    <span dir=\"auto\"></span>
    <area alt=\"\" coords=\"102, 10, 82, 79, 132, 27\" href=\"cmmidev/module%201\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"134, 27, 84, 80, 150, 59\" href=\"cmmidev/module%202\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"149, 62, 84, 79, 149, 96\" href=\"cmmidev/module%203\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"149, 100, 88, 80, 130, 126\" href=\"cmmidev/module%204\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"129, 127, 89, 80, 99, 144\" href=\"cmmidev/module%205\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"102, 144, 86, 78, 62, 144, 101, 148\" href=\"cmmidev/module%206\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"59, 148, 84, 77, 32, 129\" href=\"cmmidev/module%207\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"85, 78, 33, 130, 10, 100\" href=\"cmmidev/module%208\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"80, 79, 11, 99, 8, 61\" href=\"cmmidev/module%209\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"84, 78, 9, 60, 28, 23, 87, 79, 74, 77, 69, 72, 67, 75\" href=\"cmmidev/module%2010\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"82, 74, 30, 23, 60, 8\" href=\"cmmidev/module%2011\" shape=\"poly\" target=\"_blank\">
    <area alt=\"\" coords=\"83, 73, 61, 7, 103, 9, 88, 68, 82, 65\" href=\"cmmidev/module%2012\" shape=\"poly\" target=\"_blank\">
  </map>
  <img alt=\"\" class=\"img-fluid\" src=\"/images/cmmimods.png\" usemap=\"#ImgMap1\" ><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </span> </div>
{% endif %}


{% if not user %}<div class=\"container\" align=\"left\" ><h3 align=\"left\">Please log on to access the content on this page</h3><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>{% endif %}{% if not current_user and false %}
<div class=\"container\" align=\"center\">
  <h5 align=\"left\">CMMi for Development:&nbsp;Processes</h5>
  <p align=\"left\">Can you see that the PMBOK processes are found mostly at Maturity Level (ML) 2 (with a few on Level 3 and above).<br>
    Also see that the <a href=\"/landscape\" target=\"_blank\">Standards / Frameworks landscape</a>: Software
    Engineering, DevOps, KanBan, ITIL, CM, Traditional &amp; Agile
    Project Management Process, Cobit and others are fundamentally all
    focused on removing constraints between ML2 processes PP and PMC <a href=\"/home/vmodel\" target=\"_blank\">as you improve between baselines.</a><br>
    To illustrate this point for Agile Project Management <a href=\"/scrum\">check out PP and PMC for Scrum here.</a> </p>
  <hr style=\"width: 94%\">
  <img alt=\"CMMi-Dev1.3 dashboard\" class=\"img-fluid\" src=\"/images/cmmi-dev1.png\" usemap=\"#ImgMap0\" > <br>
  <br>
</div>
{% endif %}


{% endblock %}
", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/cmmidevdash.twig", "C:\\xampp\\htdocs\\pmway\\resources\\views/Home/cmmidevdash.twig");
    }
}
