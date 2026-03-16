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

/* ./subviews/registration/register_message.twig */
class __TwigTemplate_14c7712caa8fdca50bc269a03ae732f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "

";
        // line 19
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 19) == 519263) &&  !($context["registerSuccess"] ?? null))) {
            // line 20
            yield "    <h2>You must be registered to complete the 2025 Best of WNC Ballot</h2>
";
        }
        // line 22
        yield "
";
        // line 23
        if (($context["registerSuccess"] ?? null)) {
            // line 24
            yield "    <h4 ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 24), "registermessageb", [], "any", false, false, true, 24), 24, $this->source);
            yield " >";
            yield gT("Thank you for registering. You will receive an email shortly.");
            yield "</h4>
";
        } else {
            // line 26
            yield "    ";
            if (($context["sStartDate"] ?? null)) {
                // line 27
                yield "    <h4 ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 27), "registermessagea", [], "any", false, false, true, 27), 27, $this->source);
                yield " > ";
                yield gT("You may register for this survey but you have to wait for the {{sStartDate}} before starting the survey.");
                yield "</h4>
    ";
            } else {
                // line 29
                yield "    <h4  ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 29), "registermessageb", [], "any", false, false, true, 29), 29, $this->source);
                yield " >";
                yield gT("You may register for this survey if you wish to take part.  Enter your details below, and an email containing the link to participate in this survey will be sent shortly.");
                yield "</h4>
    ";
            }
            // line 31
            yield "    <!-- <h4  ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 31), "registermessagec", [], "any", false, false, true, 31), 31, $this->source);
            yield " >";
            yield gT("Enter your details below, and an email containing the link to participate in this survey will be sent shortly.");
            yield "</h4>-->
";
        }
        // line 33
        yield "
";
        // line 34
        if ( !empty(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aErrors", [], "any", false, false, true, 34))) {
            // line 35
            yield "    <ul class='";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 35), "maincoldivdivbul", [], "any", false, false, true, 35), 35, $this->source);
            yield " alert alert-danger list-unstyled' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 35), "maincoldivdivbul", [], "any", false, false, true, 35), 35, $this->source);
            yield ">
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aErrors", [], "any", false, false, true, 36));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 37
                yield "            <li>";
                yield $this->sandbox->ensureToStringAllowed($context["error"], 37, $this->source);
                yield "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "    </ul>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/registration/register_message.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  115 => 39,  106 => 37,  102 => 36,  95 => 35,  93 => 34,  90 => 33,  82 => 31,  74 => 29,  66 => 27,  63 => 26,  55 => 24,  53 => 23,  50 => 22,  46 => 20,  44 => 19,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/registration/register_message.twig", "/var/www/html/upload/themes/survey/Vanilla_Child/views/subviews/registration/register_message.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 36);
        static $filters = array();
        static $functions = array("gT" => 24, "empty" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                [],
                ['gT', 'empty'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
