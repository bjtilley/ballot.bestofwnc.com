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

/* ./subviews/header/custom_header.twig */
class __TwigTemplate_cbc8c50ab762284774e7d9267ce989ee extends Template
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
        yield "<style>
    ";
        // line 20
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 20), "backgroundimage", [], "any", false, false, true, 20) == "on") && LS_Twig_Extension::imageSrc(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 20), "backgroundimagefile", [], "any", false, false, true, 20)))) {
            // line 21
            yield "        body {
            background-image: url('";
            // line 22
            yield LS_Twig_Extension::imageSrc($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 22), "backgroundimagefile", [], "any", false, false, true, 22), 22, $this->source));
            yield "');
            background-attachment: fixed;
            background-size: cover;

        }

        body .top-container {
            background-color: rgba(236, 240, 241, 0.2);
        }
    ";
        }
        // line 32
        yield "
    body {
         padding-bottom: 10px;
         /*padding-top: 60px;!* now is redefine in JS to fit any title length *!*/
         background-color:";
        // line 36
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 36), "bodybackgroundcolor", [], "any", false, false, true, 36), 36, $this->source);
        yield " ;
         color: ";
        // line 37
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 37), "fontcolor", [], "any", false, false, true, 37), 37, $this->source);
        yield ";
    }

    .navbar-default .navbar-nav > li > a:hover {
        color: ";
        // line 41
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 41), "fontcolor", [], "any", false, false, true, 41), 41, $this->source);
        yield ";
    }

    .question-container {
        background-color: ";
        // line 45
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 45), "questionbackgroundcolor", [], "any", false, false, true, 45), 45, $this->source);
        yield ";
    }

    ";
        // line 48
        $context["checkicon"] = (("\"\\" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 48), "checkicon", [], "any", false, false, true, 48), 48, $this->source)) . "\"");
        // line 49
        yield "    .checkbox-item input[type=\"checkbox\"]:checked + label::after, .checkbox-item input[type=\"radio\"]:checked + label::after {
        content: ";
        // line 50
        yield $this->sandbox->ensureToStringAllowed(($context["checkicon"] ?? null), 50, $this->source);
        yield ";
    }

    ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 53), "animatecheckbox", [], "any", false, false, true, 53) == "on")) {
            // line 54
            yield "
        ";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 55), "checkboxanimationduration", [], "any", false, false, true, 55) < 1)) {
                // line 56
                yield "            ";
                $context["checkboxanimationduration"] = 500;
                // line 57
                yield "        ";
            } else {
                // line 58
                yield "            ";
                $context["checkboxanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 58), "checkboxanimationduration", [], "any", false, false, true, 58);
                // line 59
                yield "        ";
            }
            // line 60
            yield "
        .checkbox-item input[type=\"checkbox\"]:checked + label::after{
            animation-name: ";
            // line 62
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 62), "checkboxanimation", [], "any", false, false, true, 62), 62, $this->source);
            yield ";
            animation-duration: ";
            // line 63
            yield $this->sandbox->ensureToStringAllowed(($context["checkboxanimationduration"] ?? null), 63, $this->source);
            yield "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .checkbox-item input[type=\"checkbox\"] + label::after{
            display: none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 80
        yield "
    ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 81), "animateradio", [], "any", false, false, true, 81) == "on")) {
            // line 82
            yield "
        ";
            // line 83
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 83), "radioanimationduration", [], "any", false, false, true, 83) < 1)) {
                // line 84
                yield "            ";
                $context["radioanimationduration"] = 500;
                // line 85
                yield "        ";
            } else {
                // line 86
                yield "            ";
                $context["radioanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 86), "radioanimationduration", [], "any", false, false, true, 86);
                // line 87
                yield "        ";
            }
            // line 88
            yield "
        .radio-item input[type=\"radio\"]:checked + label::after{
            animation-name: ";
            // line 90
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 90), "radioanimation", [], "any", false, false, true, 90), 90, $this->source);
            yield ";
            animation-duration: ";
            // line 91
            yield $this->sandbox->ensureToStringAllowed(($context["radioanimationduration"] ?? null), 91, $this->source);
            yield "ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
            display: inline-block;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
        .radio-item input[type=\"radio\"] + label::after{
            display:none;
            -webkit-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }
    ";
        }
        // line 108
        yield "
    ";
        // line 109
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 109), "animatequestion", [], "any", false, false, true, 109) == "on")) {
            // line 110
            yield "
        ";
            // line 111
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 111), "questionanimationduration", [], "any", false, false, true, 111) < 1)) {
                // line 112
                yield "            ";
                $context["questionanimationduration"] = 500;
                // line 113
                yield "        ";
            } else {
                // line 114
                yield "            ";
                $context["questionanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 114), "questionanimationduration", [], "any", false, false, true, 114);
                // line 115
                yield "        ";
            }
            // line 116
            yield "
        .question-container {
            animation-name: ";
            // line 118
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 118), "questionanimation", [], "any", false, false, true, 118), 118, $this->source);
            yield ";
            animation-duration: ";
            // line 119
            yield $this->sandbox->ensureToStringAllowed(($context["questionanimationduration"] ?? null), 119, $this->source);
            yield "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 123
        yield "
    ";
        // line 124
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 124), "animatealert", [], "any", false, false, true, 124) == "on")) {
            // line 125
            yield "
        ";
            // line 126
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 126), "alertanimationduration", [], "any", false, false, true, 126) < 1)) {
                // line 127
                yield "            ";
                $context["alertanimationduration"] = 500;
                // line 128
                yield "        ";
            } else {
                // line 129
                yield "            ";
                $context["alertanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 129), "alertanimationduration", [], "any", false, false, true, 129);
                // line 130
                yield "        ";
            }
            // line 131
            yield "
        .alert {
            animation-name: ";
            // line 133
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 133), "alertanimation", [], "any", false, false, true, 133), 133, $this->source);
            yield ";
            animation-duration: ";
            // line 134
            yield $this->sandbox->ensureToStringAllowed(($context["alertanimationduration"] ?? null), 134, $this->source);
            yield "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 138
        yield "
    ";
        // line 139
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 139), "animatebody", [], "any", false, false, true, 139) == "on")) {
            // line 140
            yield "
        ";
            // line 141
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 141), "bodyanimationduration", [], "any", false, false, true, 141) < 1)) {
                // line 142
                yield "            ";
                $context["bodyanimationduration"] = 500;
                // line 143
                yield "        ";
            } else {
                // line 144
                yield "            ";
                $context["bodyanimationduration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 144), "bodyanimationduration", [], "any", false, false, true, 144);
                // line 145
                yield "        ";
            }
            // line 146
            yield "
        #outerframeContainer {
            animation-name: ";
            // line 148
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 148), "bodyanimation", [], "any", false, false, true, 148), 148, $this->source);
            yield ";
            animation-duration: ";
            // line 149
            yield $this->sandbox->ensureToStringAllowed(($context["bodyanimationduration"] ?? null), 149, $this->source);
            yield "ms;
            animation-fill-mode: both;
        }
    ";
        }
        // line 153
        yield "
    ";
        // line 154
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 154), "cornerradius", [], "any", false, false, true, 154) == 1)) {
            // line 155
            yield "        ";
            $context["cornerradius"] = "0px";
            // line 156
            yield "    ";
        }
        // line 157
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 157), "cornerradius", [], "any", false, false, true, 157) == 3)) {
            // line 158
            yield "        ";
            $context["cornerradius"] = "20px";
            // line 159
            yield "    ";
        }
        // line 160
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 160), "cornerradius", [], "any", false, false, true, 160) != 2)) {
            // line 161
            yield "        .question-container,
        .form-control,
        .form-select,
        .btn,
        .yesno-button.btn-group > .btn:not(:last-child),
        .yesno-button.btn-group > .btn,
        .gender-button.btn-group > .btn:not(:last-child),
        .gender-button.btn-group > .btn {
            border-radius: ";
            // line 169
            yield $this->sandbox->ensureToStringAllowed(($context["cornerradius"] ?? null), 169, $this->source);
            yield ";
        }

        .input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
        .input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3) {
            border-top-left-radius: ";
            // line 174
            yield $this->sandbox->ensureToStringAllowed(($context["cornerradius"] ?? null), 174, $this->source);
            yield ";
            border-bottom-left-radius: ";
            // line 175
            yield $this->sandbox->ensureToStringAllowed(($context["cornerradius"] ?? null), 175, $this->source);
            yield ";
        }

        .input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            border-top-right-radius: ";
            // line 179
            yield $this->sandbox->ensureToStringAllowed(($context["cornerradius"] ?? null), 179, $this->source);
            yield ";
            border-bottom-right-radius: ";
            // line 180
            yield $this->sandbox->ensureToStringAllowed(($context["cornerradius"] ?? null), 180, $this->source);
            yield ";
        }
    ";
        }
        // line 183
        yield "</style>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/header/custom_header.twig";
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
        return array (  375 => 183,  369 => 180,  365 => 179,  358 => 175,  354 => 174,  346 => 169,  336 => 161,  333 => 160,  330 => 159,  327 => 158,  324 => 157,  321 => 156,  318 => 155,  316 => 154,  313 => 153,  306 => 149,  302 => 148,  298 => 146,  295 => 145,  292 => 144,  289 => 143,  286 => 142,  284 => 141,  281 => 140,  279 => 139,  276 => 138,  269 => 134,  265 => 133,  261 => 131,  258 => 130,  255 => 129,  252 => 128,  249 => 127,  247 => 126,  244 => 125,  242 => 124,  239 => 123,  232 => 119,  228 => 118,  224 => 116,  221 => 115,  218 => 114,  215 => 113,  212 => 112,  210 => 111,  207 => 110,  205 => 109,  202 => 108,  182 => 91,  178 => 90,  174 => 88,  171 => 87,  168 => 86,  165 => 85,  162 => 84,  160 => 83,  157 => 82,  155 => 81,  152 => 80,  132 => 63,  128 => 62,  124 => 60,  121 => 59,  118 => 58,  115 => 57,  112 => 56,  110 => 55,  107 => 54,  105 => 53,  99 => 50,  96 => 49,  94 => 48,  88 => 45,  81 => 41,  74 => 37,  70 => 36,  64 => 32,  51 => 22,  48 => 21,  46 => 20,  43 => 19,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/custom_header.twig", "/var/www/html/themes/survey/fruity_twentythree/views/subviews/header/custom_header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 48);
        static $filters = array();
        static $functions = array("imageSrc" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['imageSrc'],
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
