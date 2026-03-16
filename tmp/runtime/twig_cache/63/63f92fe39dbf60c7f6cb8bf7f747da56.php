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

/* ./subviews/navigation/save_links.twig */
class __TwigTemplate_f529b8ab2a59a00b0d40d45b6bd76bf0 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 20), "load", [], "any", false, false, true, 20), "show", [], "any", false, false, true, 20) == "Y")) {
            // line 21
            yield "    <!-- Load unfinished survey button -->
    <li class=\"nav-item ls-no-js-hidden\" ";
            // line 22
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 22), "loadlinksli", [], "any", false, false, true, 22), 22, $this->source);
            yield ">
        <a href=\"#\" data-limesurvey-submit='{ \"loadall\":\"loadall\" }'
           class='nav-link ls-link-action ls-link-loadall'>
            ";
            // line 25
            yield gT("Load unfinished survey");
            yield "
        </a>
    </li>
    ";
            // line 28
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "access_mode", [], "any", false, false, true, 28) == "O") && (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "hastokenstable", [], "any", false, false, true, 28) == true)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "filltoken", [], "any", false, false, true, 28))) {
                // line 29
                yield "    <!-- Fill token button -->
    <li class=\"nav-item ls-no-js-hidden\">
        <a href=\"";
                // line 31
                yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 31), 31, $this->source);
                yield "?lang=en&filltoken=true\"
            class=\"nav-link ls-link-action\">
            ";
                // line 33
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "allowregister", [], "any", false, false, true, 33) == "Y")) {
                    // line 34
                    yield "                ";
                    yield gT("Register");
                    yield "
            ";
                } else {
                    // line 36
                    yield "                ";
                    yield gT("Enter access code");
                    yield "
            ";
                }
                // line 38
                yield "        </a>
    </li>
    ";
            }
        }
        // line 42
        yield "
";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 43), "save", [], "any", false, false, true, 43), "show", [], "any", false, false, true, 43) == "Y")) {
            // line 44
            yield "    <!-- Resume later button -->
    <li class=\"nav-item ls-no-js-hidden\">
        <a href=\"#\" data-limesurvey-submit='{ \"saveall\":\"saveall\" }' class='nav-link'>
            ";
            // line 47
            yield gT("Resume later");
            yield "
        </a>
        ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 49), "text", [], "any", false, false, true, 49) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 49), "showpopups", [], "any", false, false, true, 49) > 0))) {
                // line 50
                yield "            ";
                yield LS_Twig_Extension::registerScript("saveflashmessage", (("
            var modalElement = document.getElementById('bootstrap-alert-box-modal');
            var myModal = new bootstrap.Modal(modalElement, {});
            myModal.hide();
            var modalBody = modalElement.getElementsByClassName('modal-body');
            modalBody[0].textContent = '" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 55
($context["aSurveyInfo"] ?? null), "saved", [], "any", false, false, true, 55), "text", [], "any", false, false, true, 55), 55, $this->source)) . "';
            myModal.show();

            modalElement.addEventListener('hidden.bs.modal', function (event) {
                document.body.classList.remove('modal-open');
                document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
            });
                "), "POS_POSTSCRIPT");
                // line 62
                yield "
        ";
            }
            // line 64
            yield "    </li>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/navigation/save_links.twig";
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
        return array (  125 => 64,  121 => 62,  112 => 55,  105 => 50,  103 => 49,  98 => 47,  93 => 44,  91 => 43,  88 => 42,  82 => 38,  76 => 36,  70 => 34,  68 => 33,  63 => 31,  59 => 29,  57 => 28,  51 => 25,  45 => 22,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/save_links.twig", "/var/www/html/themes/survey/fruity_twentythree/views/subviews/navigation/save_links.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20);
        static $filters = array();
        static $functions = array("gT" => 25, "registerScript" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
