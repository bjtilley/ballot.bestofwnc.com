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

/* ./subviews/header/progress_bar.twig */
class __TwigTemplate_725076d0d3ad3abe3016bb478bebe024 extends Template
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
        // line 20
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "showprogress", [], "any", false, false, true, 20) == "Y") && (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "format", [], "any", false, false, true, 20) != "A")) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 20))) {
            // line 21
            yield "    <!-- Top container -->
    <div class=\"";
            // line 22
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 22), "topcontainer", [], "any", false, false, true, 22), 22, $this->source);
            yield " space-col\"  ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "topcontainer", [], "any", false, false, true, 22), 22, $this->source);
            yield " >
        <div class=\"";
            // line 23
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 23), "topcontent", [], "any", false, false, true, 23), 23, $this->source);
            yield " container-fluid\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 23), "topcontent", [], "any", false, false, true, 23), 23, $this->source);
            yield " >
            ";
            // line 24
            $context["progressValue"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "progress", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24);
            // line 25
            yield "            <div class=\"visually-hidden\">";
            yield sprintf(gT("You have completed %s%% of this survey"), $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null), 25, $this->source));
            yield "</div>
                <div class=\"";
            // line 26
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 26), "progress", [], "any", false, false, true, 26), 26, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 26), "progress", [], "any", false, false, true, 26), 26, $this->source);
            yield "  aria-hidden=\"true\">
                    <div class=\"";
            // line 27
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 27), "progressbar", [], "any", false, false, true, 27), 27, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 27), "progressbar", [], "any", false, false, true, 27), 27, $this->source);
            yield " style=\"min-width: 2em; width: ";
            yield $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null), 27, $this->source);
            yield "%;\">
                        ";
            // line 28
            yield $this->sandbox->ensureToStringAllowed(($context["progressValue"] ?? null), 28, $this->source);
            yield "%
                    </div>
                </div>
        </div>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/header/progress_bar.twig";
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
        return array (  78 => 28,  70 => 27,  64 => 26,  59 => 25,  57 => 24,  51 => 23,  45 => 22,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/progress_bar.twig", "/var/www/html/themes/survey/vanilla/views/subviews/header/progress_bar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 24);
        static $filters = array();
        static $functions = array("sprintf" => 25, "gT" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['sprintf', 'gT'],
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
