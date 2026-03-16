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

/* ./subviews/navigation/language_changer.twig */
class __TwigTemplate_9370a3d0b3721eea27a9beff20e80c42 extends Template
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
        // line 11
        yield "
";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 12), "show", [], "any", false, false, true, 12) == true)) {
            // line 13
            yield "    
    ";
            // line 15
            yield "    ";
            $context["aLCD"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "alanguageChanger", [], "any", false, false, true, 15), "datas", [], "any", false, false, true, 15);
            // line 16
            yield "
    ";
            // line 22
            yield "    ";
            $context["htmlOptions"] = ["class" => "form-control", "data-targeturl" => CoreExtension::getAttribute($this->env, $this->source,             // line 24
($context["aLCD"] ?? null), "targetUrl", [], "any", false, false, true, 24)];
            // line 27
            yield "    <!-- Language Changer -->
    <div class=\" ";
            // line 28
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 28), "formgroup", [], "any", false, false, true, 28), 28, $this->source);
            yield " form-change-lang row row-cols-lg-auto g-1\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 28), "formgroup", [], "any", false, false, true, 28), 28, $this->source);
            yield " >
        <label class=\"";
            // line 29
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 29), "controllabel", [], "any", false, false, true, 29), 29, $this->source);
            yield " col-form-label col-auto fw-bold\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 29), "controllabel", [], "any", false, false, true, 29), 29, $this->source);
            yield " for=\"lang\">
            <span class=\"control-label\" ";
            // line 30
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 30), "languagechanger", [], "any", false, false, true, 30), 30, $this->source);
            yield ">";
            yield gT("Language:");
            yield "</span>
        </label>
        <div class=\"col-auto\">
                ";
            // line 33
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 34
($context["C"] ?? null), "Html", [], "any", false, false, true, 34), "dropDownList", ["lang", CoreExtension::getAttribute($this->env, $this->source,             // line 36
($context["aLCD"] ?? null), "sSelected", [], "any", false, false, true, 36), CoreExtension::getAttribute($this->env, $this->source,             // line 37
($context["aLCD"] ?? null), "aListLang", [], "any", false, false, true, 37),             // line 38
($context["htmlOptions"] ?? null)], "method", false, false, true, 34), 34, $this->source);
            // line 40
            yield "
        </div>
        <div class=\"col-auto\">
        <!-- for no js functionality (need form) -->
        ";
            // line 44
            $context["buttonhtmlOptions"] = ["type" => "submit", "value" => "changelang", "name" => "move", "class" => "btn btn-primary ls-language-changer-item "];
            // line 51
            yield "        ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 52
($context["C"] ?? null), "Html", [], "any", false, false, true, 52), "htmlButton", [gT("Change the language"),             // line 54
($context["buttonhtmlOptions"] ?? null)], "method", false, false, true, 52), 52, $this->source);
            // line 56
            yield "
        </div>
    </div>

    ";
            // line 61
            yield "    ";
            yield LS_Twig_Extension::registerScript("activateLanguageChanger", "activateLanguageChanger(); ", "POS_END");
            yield "
    
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer.twig";
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
        return array (  106 => 61,  100 => 56,  98 => 54,  97 => 52,  95 => 51,  93 => 44,  87 => 40,  85 => 38,  84 => 37,  83 => 36,  82 => 34,  81 => 33,  73 => 30,  67 => 29,  61 => 28,  58 => 27,  56 => 24,  54 => 22,  51 => 16,  48 => 15,  45 => 13,  43 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/language_changer.twig", "/var/www/html/themes/survey/vanilla/views/subviews/navigation/language_changer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "set" => 15);
        static $filters = array();
        static $functions = array("gT" => 30, "registerScript" => 61);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT', 'registerScript'],
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
