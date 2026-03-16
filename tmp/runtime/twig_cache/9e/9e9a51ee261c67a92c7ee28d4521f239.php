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

/* ./subviews/messages/bootstrap_alert_modal.twig */
class __TwigTemplate_1bbaf6dbf2bfb3aa4ca3de44fd2766c5 extends Template
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
        // line 21
        yield "


";
        // line 25
        if ((empty(LS_Twig_Extension::json_decode(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "jPopup", [], "any", false, false, true, 25))) == false)) {
            // line 26
            yield "    ";
            yield LS_Twig_Extension::registerScript("startPopup", ("LSvar.startPopups = " . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "jPopup", [], "any", false, false, true, 26), 26, $this->source)), "POS_HEAD");
            yield "
    ";
            // line 27
            yield LS_Twig_Extension::registerScript("showStartPopups", (("window.templateCore.alertSurveyDialog(" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "jPopup", [], "any", false, false, true, 27), 27, $this->source)) . ");"), "POS_END");
            yield "
    ";
            // line 28
            yield LS_Twig_Extension::registerScript("activateSoftMandatory", "activateSoftMandatory();", "POS_END");
            yield "
";
        }
        // line 30
        yield "<!-- Bootstrap Modal Alert -->
";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 31), "alertmodal", [], "any", false, false, true, 31)) {
            // line 32
            yield "<div id=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 32), "alertmodal", [], "any", false, false, true, 32), 32, $this->source);
            yield "\" class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "alertmodal", [], "any", false, false, true, 32), 32, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 32), "alertmodal", [], "any", false, false, true, 32), 32, $this->source);
            yield ">
    <div class=\"";
            // line 33
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 33), "modaldialog", [], "any", false, false, true, 33), 33, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 33), "modaldialog", [], "any", false, false, true, 33), 33, $this->source);
            yield ">
        <div class=\"";
            // line 34
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 34), "modalcontent", [], "any", false, false, true, 34), 34, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 34), "modalcontent", [], "any", false, false, true, 34), 34, $this->source);
            yield " >
            <div class=\"";
            // line 35
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 35), "modalheader", [], "any", false, false, true, 35), 35, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 35), "modalheader", [], "any", false, false, true, 35), 35, $this->source);
            yield " >
                <button  ";
            // line 36
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 36), "modalclosebutton", [], "any", false, false, true, 36), 36, $this->source);
            yield " class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 36), "modalclosebutton", [], "any", false, false, true, 36), 36, $this->source);
            yield "\"  ></button>
                <div class=\"";
            // line 37
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 37), "modaltitle", [], "any", false, false, true, 37), 37, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 37), "modaltitle", [], "any", false, false, true, 37), 37, $this->source);
            yield ">&nbsp;</div>
            </div>
            <div class=\"";
            // line 39
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 39), "modalbody", [], "any", false, false, true, 39), 39, $this->source);
            yield "\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 39), "modalbody", [], "any", false, false, true, 39), 39, $this->source);
            yield ">
            </div>
            ";
            // line 41
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "mandNonSoft", [], "any", false, false, true, 41) == false) && CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "mandSoft", [], "any", false, false, true, 41))) {
                // line 42
                yield "            <div class=\"";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 42), "modalfooter", [], "any", false, false, true, 42), 42, $this->source);
                yield "\" ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 42), "modalfooter", [], "any", false, false, true, 42), 42, $this->source);
                yield ">
                <a id=\"";
                // line 43
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 43), "mandatorySoftModal", [], "any", false, false, true, 43), 43, $this->source);
                yield "\" class=\"";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 43), "modalfooterlink", [], "any", false, false, true, 43), 43, $this->source);
                yield "\">";
                yield gT("Continue without answering");
                yield "</a>
                <script>
                    ";
                // line 45
                if ((intval(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 45), "showpopups", [], "any", false, false, true, 45)) > 0)) {
                    yield "\$(\".ls-softmandatory-input\").hide();";
                }
                // line 46
                yield "                    \$(\"#";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 46), "mandatorySoftModal", [], "any", false, false, true, 46), 46, $this->source);
                yield "\").on('click', function() {
                        \$(\".ls-mandSoft-checkbox\").prop('checked',true);
                        \$(\"#ls-button-submit\").trigger('click');
                    });
                </script>
                <a ";
                // line 51
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 51), "modalfooterlink", [], "any", false, false, true, 51), 51, $this->source);
                yield "  class=\"";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 51), "modalfooterlink", [], "any", false, false, true, 51), 51, $this->source);
                yield "\">";
                yield gT("Answer question");
                yield "</a>
            </div>
            ";
            } else {
                // line 54
                yield "            <div class=\"";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 54), "modalfooter", [], "any", false, false, true, 54), 54, $this->source);
                yield "\" ";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 54), "modalfooter", [], "any", false, false, true, 54), 54, $this->source);
                yield ">
                <a ";
                // line 55
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 55), "modalfooterlink", [], "any", false, false, true, 55), 55, $this->source);
                yield "  class=\"";
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 55), "modalfooterlink", [], "any", false, false, true, 55), 55, $this->source);
                yield "\">";
                yield gT("Close");
                yield "</a>
            </div>
            ";
            }
            // line 58
            yield "        </div>
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
        return "./subviews/messages/bootstrap_alert_modal.twig";
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
        return array (  171 => 58,  161 => 55,  154 => 54,  144 => 51,  135 => 46,  131 => 45,  122 => 43,  115 => 42,  113 => 41,  106 => 39,  99 => 37,  93 => 36,  87 => 35,  81 => 34,  75 => 33,  66 => 32,  64 => 31,  61 => 30,  56 => 28,  52 => 27,  47 => 26,  45 => 25,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/messages/bootstrap_alert_modal.twig", "/var/www/html/themes/survey/vanilla/views/subviews/messages/bootstrap_alert_modal.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 25);
        static $filters = array();
        static $functions = array("empty" => 25, "json_decode" => 25, "registerScript" => 26, "gT" => 43, "intval" => 45);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['empty', 'json_decode', 'registerScript', 'gT', 'intval'],
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
