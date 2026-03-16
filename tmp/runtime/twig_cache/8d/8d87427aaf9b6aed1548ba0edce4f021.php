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

/* ./subviews/registration/register_form.twig */
class __TwigTemplate_7f332cc075d36e13bf0a358f5c0099a8 extends Template
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
        // line 1
        yield "
";
        // line 18
        yield "
";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 19) == 519263)) {
            // line 20
            yield "<div class=\"registration-banner\">
    <img src=\"/upload/themes/survey/Vanilla_Child/files/BestOf_2025_Register_crop.png\" />
</div>
";
        }
        // line 24
        yield "
<div class=\"";
        // line 25
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 25), "registerform", [], "any", false, false, true, 25), 25, $this->source);
        yield " row\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 25), "registerform", [], "any", false, false, true, 25), 25, $this->source);
        yield ">
    ";
        // line 26
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 26), "form", [CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sRegisterFormUrl", [], "any", false, false, true, 26), "post", ["id" => "limesurvey", "role" => "form", "class" => "form"]], "method", false, false, true, 26), 26, $this->source);
        yield "

    ";
        // line 28
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "registerform", [], "any", false, false, true, 28), "hiddeninputs", [], "any", false, false, true, 28), 28, $this->source);
        yield "

    <div class='";
        // line 30
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 30), "registerformcol", [], "any", false, false, true, 30), 30, $this->source);
        yield " col-lg-8 offset-lg-2' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 30), "registerformcol", [], "any", false, false, true, 30), 30, $this->source);
        yield ">
        <div class=\"ls-js-hidden mb-3\">
            ";
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/navigation/language_changer.twig");
        yield "
        </div>
        ";
        // line 35
        yield "        <div class='";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 35), "registerformcolrow", [], "any", false, false, true, 35), 35, $this->source);
        yield " mb-3' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 35), "registerformcolrow", [], "any", false, false, true, 35), 35, $this->source);
        yield ">
            <label for='register_firstname' class='";
        // line 36
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 36), "registerformcolrowlabel", [], "any", false, false, true, 36), 36, $this->source);
        yield " control-label '>";
        yield gT("First name:");
        yield " ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/registration/required.twig");
        yield "</label>
            <div class=\"\">
                ";
        // line 38
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 38), "textField", ["register_firstname", CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sFirstName", [], "any", false, false, true, 38), ["id" => "register_firstname", "class" => "form-control", "required" => true]], "method", false, false, true, 38), 38, $this->source);
        yield "
            </div>
        </div>

        ";
        // line 43
        yield "        <div class='";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 43), "registerformcolrowb", [], "any", false, false, true, 43), 43, $this->source);
        yield " mb-3' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 43), "registerformcolrowb", [], "any", false, false, true, 43), 43, $this->source);
        yield ">
            <label ";
        // line 44
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 44), "registerformcolrowblabel", [], "any", false, false, true, 44), 44, $this->source);
        yield "  class='";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "registerformcolrowblabel", [], "any", false, false, true, 44), 44, $this->source);
        yield " control-label '>";
        yield gT("Last name:");
        yield " ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/registration/required.twig");
        yield "</label>
            <div ";
        // line 45
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 45), "registerformcolrowbdiv", [], "any", false, false, true, 45), 45, $this->source);
        yield " >
                ";
        // line 46
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 46), "textField", ["register_lastname", CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sLastName", [], "any", false, false, true, 46), ["id" => "register_lastname", "class" => "form-control", "required" => true]], "method", false, false, true, 46), 46, $this->source);
        yield "
            </div>
        </div>

        ";
        // line 51
        yield "        <div class='";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 51), "registerformcolrowc", [], "any", false, false, true, 51), 51, $this->source);
        yield " mb-3' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 51), "registerformcolrowc", [], "any", false, false, true, 51), 51, $this->source);
        yield ">
            <label ";
        // line 52
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 52), "registerformcolrowclabel", [], "any", false, false, true, 52), 52, $this->source);
        yield " class='";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 52), "registerformcolrowclabel", [], "any", false, false, true, 52), 52, $this->source);
        yield "  control-label'> ";
        yield gT("Email address:");
        yield " ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/registration/required.twig");
        yield "</label>
            <div ";
        // line 53
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 53), "registerformcolrowcdiv", [], "any", false, false, true, 53), 53, $this->source);
        yield "  >
                ";
        // line 54
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 54), "emailField", ["register_email", CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sEmail", [], "any", false, false, true, 54), ["id" => "register_email", "class" => "form-control input-sm", "required" => true]], "method", false, false, true, 54), 54, $this->source);
        yield "
            </div>
        </div>

        ";
        // line 59
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aExtraAttributes", [], "any", false, false, true, 59));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["aExtraAttribute"]) {
            // line 60
            yield "            <div class='mx-form-fields ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 60), "registerformextras", [], "any", false, false, true, 60), 60, $this->source);
            yield " mb-3' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 60), "registerformextras", [], "any", false, false, true, 60), 60, $this->source);
            yield " >
                ";
            // line 61
            $context["registerKey"] = ("register_" . $this->sandbox->ensureToStringAllowed($context["key"], 61, $this->source));
            // line 62
            yield "                <label for=\"";
            yield $this->sandbox->ensureToStringAllowed(($context["registerKey"] ?? null), 62, $this->source);
            yield "\" class='";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 62), "registerformextraslabel", [], "any", false, false, true, 62), 62, $this->source);
            yield " control-label '> ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["aExtraAttribute"], "caption", [], "any", false, false, true, 62), 62, $this->source);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["aExtraAttribute"], "mandatory", [], "any", false, false, true, 62) == "Y")) {
                yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/registration/required.twig");
            }
            yield "</label>
                <div ";
            // line 63
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 63), "registerformcolrowcdiv", [], "any", false, false, true, 63), 63, $this->source);
            yield " >
                    ";
            // line 64
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 64), "textField", [($context["registerKey"] ?? null), (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aAttribute", [], "any", false, false, true, 64)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array(get_class($__internal_compile_0), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[$context["key"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aAttribute", [], "any", false, false, true, 64), $context["key"], [], "array", false, false, true, 64)), ["id" => ($context["registerKey"] ?? null), "class" => "form-control input-sm"]], "method", false, false, true, 64), 64, $this->source);
            yield "
                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['aExtraAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "
        ";
        // line 70
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bCaptcha", [], "any", false, false, true, 70)) {
            // line 71
            yield "            <div class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 71), "registerformcaptcha", [], "any", false, false, true, 71), 71, $this->source);
            yield " mb-3\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 71), "maincolformdivb", [], "any", false, false, true, 71), 71, $this->source);
            yield ">
                <label class='";
            // line 72
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 72), "registerformcaptchalabel", [], "any", false, false, true, 72), 72, $this->source);
            yield " control-label ' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 72), "registerformcaptchalabel", [], "any", false, false, true, 72), 72, $this->source);
            yield " >";
            yield gT("Please solve the following equation:");
            yield " ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/registration/required.twig");
            yield "</label>
                <div class=\"row\" ";
            // line 73
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 73), "registerformcaptchadiv", [], "any", false, false, true, 73), 73, $this->source);
            yield ">
                    <div class=\"";
            // line 74
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 74), "registerformcaptchadivb", [], "any", false, false, true, 74), 74, $this->source);
            yield " col-4\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 74), "registerformcaptchadivb", [], "any", false, false, true, 74), 74, $this->source);
            yield ">
                            ";
            // line 75
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, LS_Twig_Extension::renderCaptcha(), "renderOut", [], "method", false, false, true, 75), 75, $this->source);
            yield "
                    </div>
                    <div class=\"";
            // line 77
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 77), "registerformcaptchadivc", [], "any", false, false, true, 77), 77, $this->source);
            yield " col-1 align-self-center\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 77), "registerformcaptchadivc", [], "any", false, false, true, 77), 77, $this->source);
            yield ">
                        <a href=\"#\" class=\"btn btn-sm btn-outline-secondary\" id=\"reloadCaptcha\" title=\"";
            // line 78
            yield gT("Reload captcha");
            yield "\" data-bs-toggle=\"captcha\"><i class=\"fa fa-refresh\"></i></a>
                    </div>
                    <div class=\"col-4 align-self-center\">
                        <input class='form-control ";
            // line 81
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 81), "registerformcaptchainput", [], "any", false, false, true, 81), 81, $this->source);
            yield "' ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 81), "registerformcaptchainput", [], "any", false, false, true, 81), 81, $this->source);
            yield ">
                    </div>
                </div>
            </div>
        ";
        }
        // line 86
        yield "
        <script
            src=\"https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback\"
            defer
        ></script>
        <div id=\"cloudflare-turnstile\" data-sitekey=\"0x4AAAAAABAMlwBNpUTdYkxr\"></div>

        ";
        // line 94
        yield "        <div class='";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 94), "registermandatoryinfo", [], "any", false, false, true, 94), 94, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 94), "registermandatoryinfo", [], "any", false, false, true, 94), 94, $this->source);
        yield " >
                ";
        // line 95
        yield gT("Fields marked with an asterisk are mandatory.");
        yield "
        </div>

        ";
        // line 99
        yield "        <div id=\"mx-limesurvey-submit\" class='";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 99), "registersave", [], "any", false, false, true, 99), 99, $this->source);
        yield " mb-3 d-none' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 99), "registersave", [], "any", false, false, true, 99), 99, $this->source);
        yield " >
            <div class='";
        // line 100
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 100), "registersavediv", [], "any", false, false, true, 100), 100, $this->source);
        yield " float-end' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 100), "registersavediv", [], "any", false, false, true, 100), 100, $this->source);
        yield " >
                ";
        // line 101
        $context["continue"] = gT("Continue", "unescaped");
        // line 102
        yield "                <button ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 102), "registersavedivbutton", [], "any", false, false, true, 102), 102, $this->source);
        yield "  class='";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 102), "registersavedivbutton", [], "any", false, false, true, 102), 102, $this->source);
        yield " btn btn-outline-secondary' >
                    ";
        // line 103
        yield $this->sandbox->ensureToStringAllowed(($context["continue"] ?? null), 103, $this->source);
        yield "
                </button>
            </div>
        </div>

        ";
        // line 109
        yield "    </div>
    <div class='";
        // line 110
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 110), "registerformcoladdidtions", [], "any", false, false, true, 110), 110, $this->source);
        yield " col-lg-8 offset-lg-2' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 110), "registerformcoladdidtions", [], "any", false, false, true, 110), 110, $this->source);
        yield ">
        ";
        // line 111
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "formAdditions", [], "any", false, false, true, 111), 111, $this->source);
        yield "
    </div>

    ";
        // line 114
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 114), "endForm", [], "any", false, false, true, 114), 114, $this->source);
        yield "
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/registration/register_form.twig";
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
        return array (  353 => 114,  347 => 111,  341 => 110,  338 => 109,  330 => 103,  323 => 102,  321 => 101,  315 => 100,  308 => 99,  302 => 95,  295 => 94,  286 => 86,  276 => 81,  270 => 78,  264 => 77,  259 => 75,  253 => 74,  249 => 73,  239 => 72,  232 => 71,  229 => 70,  226 => 68,  208 => 64,  204 => 63,  191 => 62,  189 => 61,  182 => 60,  164 => 59,  157 => 54,  153 => 53,  143 => 52,  136 => 51,  129 => 46,  125 => 45,  115 => 44,  108 => 43,  101 => 38,  92 => 36,  85 => 35,  80 => 32,  73 => 30,  68 => 28,  63 => 26,  57 => 25,  54 => 24,  48 => 20,  46 => 19,  43 => 18,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/registration/register_form.twig", "/var/www/html/upload/themes/survey/Vanilla_Child/views/subviews/registration/register_form.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "for" => 59, "set" => 61);
        static $filters = array("raw" => 111);
        static $functions = array("include" => 32, "gT" => 36, "renderCaptcha" => 75);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['raw'],
                ['include', 'gT', 'renderCaptcha'],
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
