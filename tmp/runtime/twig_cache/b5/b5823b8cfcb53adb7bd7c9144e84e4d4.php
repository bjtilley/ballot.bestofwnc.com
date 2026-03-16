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

/* __string_template__6ef0943266d325c0afc6568b548f144d */
class __TwigTemplate_d8d53be8fb85aca3883a6e48034d4aac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'nav_bar' => [$this, 'block_nav_bar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'themescripts' => [$this, 'block_themescripts'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        yield "


";
        // line 86
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 88
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 88), 88, $this->source);
        yield "\" dir=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 88), 88, $this->source);
        yield "\"
      class=\"";
        // line 89
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 89), 89, $this->source);
        yield " dir-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 89), 89, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 89), "html", [], "any", false, false, true, 89), 89, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 89), "html", [], "any", false, false, true, 89), 89, $this->source);
        yield ">

";
        // line 92
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/header/head.twig");
        yield "

<body
    class=\" ";
        // line 95
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 95), "body", [], "any", false, false, true, 95), 95, $this->source);
        yield " font-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 95), "font", [], "any", false, false, true, 95), 95, $this->source);
        yield " lang-";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 95), 95, $this->source);
        yield " ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyformat", [], "any", false, false, true, 95), 95, $this->source);
        yield " ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 95), "brandlogo", [], "any", false, false, true, 95) == "on")) {
            yield "brand-logo";
        }
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 95), "body", [], "any", false, false, true, 95), 95, $this->source);
        yield " >

";
        // line 98
        yield "<div id=\"beginScripts\">
    <###begin###>
</div>

";
        // line 103
        yield "<div>

    <div id=\"";
        // line 105
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 105), "dynamicreload", [], "any", false, false, true, 105), 105, $this->source);
        yield "\" role=\"none\">
        ";
        // line 106
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 222
        yield "    </div>
</div>
";
        // line 224
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 227
        yield "<div id=\"bottomScripts\">
    <###end###>
</div>
";
        // line 230
        yield from $this->unwrap()->yieldBlock('themescripts', $context, $blocks);
        // line 235
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        yield "            ";
        // line 108
        yield "            ";
        yield from $this->unwrap()->yieldBlock('nav_bar', $context, $blocks);
        // line 111
        yield "

            ";
        // line 114
        yield "            ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 207
        yield "

            ";
        // line 210
        yield "            ";
        yield LS_Twig_Extension::registerScript("BasicThemeScripts", "
            if(window.basicThemeScripts === undefined){
                window.basicThemeScripts = new ThemeScripts();
            }
            if(window.navbarScripts === undefined){
                window.navbarScripts = new NavbarScripts();
            }
            basicThemeScripts.initGlobal();
            navbarScripts.initNavbarEvents();
            ", "POS_END");
        // line 219
        yield "

        ";
        return; yield '';
    }

    // line 108
    public function block_nav_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/header/nav_bar.twig");
        yield "
            ";
        return; yield '';
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        yield "                <div class=\"container-md\" role=\"none\">
                    ";
        // line 116
        yield LS_Twig_Extension::registerTemplateCssFile("./css/survey-list.css");
        yield "

                    <main role=\"main\" class=\"";
        // line 118
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 118), "surveylistrow", [], "any", false, false, true, 118), 118, $this->source);
        yield " row\"
                         id=\"";
        // line 119
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 119), "surveylistrow", [], "any", false, false, true, 119), 119, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 119), "surveylistrow", [], "any", false, false, true, 119), 119, $this->source);
        yield ">
                        <div class=\"col-12\">
                            ";
        // line 122
        yield "                            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/messages/no_js_alert.twig");
        yield "
                            <div class=\"row justify-content-center mb-3\">
                                <div
                                    id=\"";
        // line 125
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 125), "surveylistrowjumbotron", [], "any", false, false, true, 125), 125, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 125), "surveylistrowjumbotron", [], "any", false, false, true, 125), 125, $this->source);
        yield ">
                                    <div class=\"img-fluid mx-auto d-block\" role=\"img\" aria-label=\"";
        // line 126
        yield gT("LimeSurvey Logo");
        yield "\">
                                        ";
        // line 127
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./ls_logo_svg.twig");
        yield "
                                    </div>
                                    <span class=\"text-center h3\">";
        // line 129
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteName", [], "any", false, false, true, 129), 129, $this->source);
        yield "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\"></div>
                                <div class=\"col\">
                                    <div id=\"surveylist-language-changer\" class=\"ls-js-hidden\">
                                        ";
        // line 136
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/navigation/language_changer_form.twig");
        yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 142
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 142), "surveylistrowdiva", [], "any", false, false, true, 142), 142, $this->source);
        yield " col-12\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 142), "surveylistrowdiva", [], "any", false, false, true, 142), 142, $this->source);
        yield ">
                                    <h2
                                        class='";
        // line 144
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 144), "surveylistrowdivadiv", [], "any", false, false, true, 144), 144, $this->source);
        yield " form-heading my-0' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 144), "surveylistrowdivadiv", [], "any", false, false, true, 144), 144, $this->source);
        yield ">
                                        ";
        // line 145
        yield gT("The following surveys are available:");
        yield "
                                    </h2>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 152
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 152), "surveylistrowdivb", [], "any", false, false, true, 152), 152, $this->source);
        yield " col-12\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 152), "surveylistrowdivb", [], "any", false, false, true, 152), 152, $this->source);
        yield ">
                                    <div
                                        class='";
        // line 154
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 154), "surveylistrowdivbdiv", [], "any", false, false, true, 154), 154, $this->source);
        yield "' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 154), "surveylistrowdivbdiv", [], "any", false, false, true, 154), 154, $this->source);
        yield ">
                                        <ul class='";
        // line 155
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 155), "surveylistrowdivbdivul", [], "any", false, false, true, 155), 155, $this->source);
        yield " list-unstyled ' ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 155), "surveylistrowdivbdivul", [], "any", false, false, true, 155), 155, $this->source);
        yield ">

                                            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "publicSurveys", [], "any", false, false, true, 157));
        foreach ($context['_seq'] as $context["key"] => $context["oSurvey"]) {
            // line 158
            yield "                                                <li class=\"";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 158), "surveylistrowdivbdivulli", [], "any", false, false, true, 158), 158, $this->source);
            yield " btn-group col-12 col-md-6\" ";
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 158), "surveylistrowdivbdivulli", [], "any", false, false, true, 158), 158, $this->source);
            yield ">
                                                    <a
                                                        href=\"";
            // line 160
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["oSurvey"], "sSurveyUrl", [], "any", false, false, true, 160), 160, $this->source);
            yield "\"
                                                        title=\"";
            // line 161
            yield gT("Start survey");
            yield "\"
                                                        lang=\"";
            // line 162
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["oSurvey"], "language", [], "any", false, false, true, 162), 162, $this->source);
            yield "\"
                                                        class=\"";
            // line 163
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 163), "surveylistrowdivbdivullia", [], "any", false, false, true, 163), 163, $this->source);
            yield " btn btn-primary col-12\">
                                                        ";
            // line 164
            yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["oSurvey"], "localizedTitle", [], "any", false, false, true, 164), 164, $this->source);
            yield "
                                                    </a>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oSurvey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div
                                    class=\"";
        // line 174
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 174), "surveylistrowdivc", [], "any", false, false, true, 174), 174, $this->source);
        yield " col-12\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 174), "surveylistrowdivc", [], "any", false, false, true, 174), 174, $this->source);
        yield ">
                                    ";
        // line 175
        yield sprintf(gT("Please contact %s ( %s ) for further assistance."), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminName", [], "any", false, false, true, 175), 175, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sSiteAdminEmail", [], "any", false, false, true, 175), 175, $this->source));
        yield "
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer role=\"contentinfo\" id=\"";
        // line 181
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 181), "surveylistfooter", [], "any", false, false, true, 181), 181, $this->source);
        yield "\"
                         class=\"";
        // line 182
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 182), "surveylistfooter", [], "any", false, false, true, 182), 182, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 182), "surveylistfooter", [], "any", false, false, true, 182), 182, $this->source);
        yield ">
                        <div
                            class=\"";
        // line 184
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 184), "surveylistfootercont", [], "any", false, false, true, 184), 184, $this->source);
        yield "\" ";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 184), "surveylistfootercont", [], "any", false, false, true, 184), 184, $this->source);
        yield ">
                            <div ";
        // line 185
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 185), "surveylistfootercontp", [], "any", false, false, true, 185), 185, $this->source);
        yield " class=\"row\">
                                <div class=\"col-6 col-md-12\">
                                    <a ";
        // line 187
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 187), "surveylistfootercontpaa", [], "any", false, false, true, 187), 187, $this->source);
        yield ">
                                        ";
        // line 188
        yield LS_Twig_Extension::image("./files/poweredby.png", gT("Proudly powered by LimeSurvey"), ["class" => "img-fluid"]);
        yield "
                                    </a>
                                </div>
                                <div class=\"col-12 d-block d-sm-none d-md-block text-center\">
                                    <a ";
        // line 192
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 192), "surveylistfootercontpab", [], "any", false, false, true, 192), 192, $this->source);
        yield " class=\"text-decoration-underline\">
                                        The Online Survey Tool
                                    </a>
                                    - Free & Open Source
                                </div>
                                <div class=\"col-6 d-none d-sm-block d-md-none text-center\">
                                    <a ";
        // line 198
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 198), "surveylistfootercontpab", [], "any", false, false, true, 198), 198, $this->source);
        yield ">
                                        Online Surveytool
                                    </a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            ";
        return; yield '';
    }

    // line 224
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "./subviews/footer/footer.twig");
        yield "
";
        return; yield '';
    }

    // line 230
    public function block_themescripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <script>
        window.basicThemeScripts.init();
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__6ef0943266d325c0afc6568b548f144d";
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
        return array (  417 => 230,  409 => 225,  405 => 224,  391 => 198,  382 => 192,  375 => 188,  371 => 187,  366 => 185,  360 => 184,  353 => 182,  349 => 181,  340 => 175,  334 => 174,  326 => 168,  316 => 164,  312 => 163,  308 => 162,  304 => 161,  300 => 160,  292 => 158,  288 => 157,  281 => 155,  275 => 154,  268 => 152,  258 => 145,  252 => 144,  245 => 142,  236 => 136,  226 => 129,  221 => 127,  217 => 126,  211 => 125,  204 => 122,  197 => 119,  193 => 118,  188 => 116,  185 => 115,  181 => 114,  173 => 109,  169 => 108,  162 => 219,  150 => 210,  146 => 207,  143 => 114,  139 => 111,  136 => 108,  134 => 107,  130 => 106,  123 => 235,  121 => 230,  116 => 227,  114 => 224,  110 => 222,  108 => 106,  104 => 105,  100 => 103,  94 => 98,  77 => 95,  71 => 92,  60 => 89,  54 => 88,  50 => 86,  45 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6ef0943266d325c0afc6568b548f144d", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 95, "block" => 106, "for" => 157);
        static $filters = array();
        static $functions = array("include" => 92, "registerScript" => 210, "registerTemplateCssFile" => 116, "gT" => 126, "sprintf" => 175, "image" => 188);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for'],
                [],
                ['include', 'registerScript', 'registerTemplateCssFile', 'gT', 'sprintf', 'image'],
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
