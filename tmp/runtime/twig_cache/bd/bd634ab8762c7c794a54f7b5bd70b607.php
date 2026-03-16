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

/* __string_template__d8130546df7bc9c36bd2d52cdab76e76 */
class __TwigTemplate_3802ec982599c4f217a29c3dda19c798 extends Template
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
        yield "<div class=\"card card-primary h-100\">
    <!-- Default panel contents -->
    <div class=\"card-header\">
        <h5 class=\"card-title\">";
        // line 4
        yield gT("Share survey");
        yield "</h5>
    </div>
    <!-- List group -->
    <ul class=\"list-group list-group-flush\">
        <!-- Base language -->
        <li class=\"list-group-item p-0 border-0\" id=\"adminsidepanel__surveysummary--mainLanguageLink\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 12
        yield getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 12), 12, $this->source), false);
        yield " (";
        yield gT("Base language");
        yield "):
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 15)) {
            yield " ";
            // line 16
            yield "                        ";
            $context["tmp_url"] = (($__internal_compile_0 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array(get_class($__internal_compile_0), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 16)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["surveyUrls"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 16), [], "array", false, false, true, 16));
            // line 17
            yield "                    ";
        }
        // line 18
        yield "                    <a href='";
        yield $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 18, $this->source);
        yield "' target='_blank'> ";
        yield $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 18, $this->source);
        yield " </a>
                </div>
            </div>
        </li>
        <!-- Additional languages  -->
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aAdditionalLanguages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
            // line 24
            yield "        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
               <div class=\"col-4 card-label\">
                    ";
            // line 27
            yield (getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 27, $this->source), false) . ":");
            yield "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 30)) {
                yield " ";
                // line 31
                yield "                        ";
                $context["tmp_url"] = (($__internal_compile_1 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array(get_class($__internal_compile_1), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1[$context["langname"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["surveyUrls"] ?? null), $context["langname"], [], "array", false, false, true, 31));
                // line 32
                yield "                    ";
            }
            // line 33
            yield "                    <a href='";
            yield $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 33, $this->source);
            yield "' target='_blank'> ";
            yield $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 33, $this->source);
            yield " </a>
                </div>
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
        <!-- End URL -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
               <div class=\"col-4 card-label\">
                    ";
        // line 43
        yield gT("End URL:");
        yield "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                        ";
        // line 46
        yield $this->sandbox->ensureToStringAllowed(($context["endurl"] ?? null), 46, $this->source);
        yield "
                </div>
            </div>
        </li>
        <!-- Number of questions/groups -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
               <div class=\"col-4 card-label\">
                    ";
        // line 54
        yield gT("Number of questions/groups:");
        yield "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
        // line 57
        yield (($this->sandbox->ensureToStringAllowed(($context["sumcount3"] ?? null), 57, $this->source) . "/") . $this->sandbox->ensureToStringAllowed(($context["sumcount2"] ?? null), 57, $this->source));
        yield "
                </div>
            </div>
        </li>
        <!-- Sharing panel -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\" style=\"align-items:center\">
                <div class=\"col-4 card-label\">
                    ";
        // line 65
        yield gT("Sharing panel:");
        yield "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                   <div class='selector_openSharePanel'  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 68
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 68) == "Y")) ? ("") : (gT("Activate your survey to open this panel")));
        yield "\">
                        <a href=\"#sharingdialog\" class=\"btn btn-outline-secondary ";
        // line 69
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 69) == "Y")) ? ("") : ("disabled"));
        yield "\" data-bs-toggle=\"modal\"
                        id=\"sharePanelButton_";
        // line 70
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 70), 70, $this->source);
        yield "\" data-surveyid=\"";
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 70), 70, $this->source);
        yield "\">
                            ";
        // line 71
        yield gT("Open sharing panel");
        yield "
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <!-- Access mode -->
        <li class=\"list-group-item p-0 border-0\" >
            <div class=\"ls-flex-row col-12\" style=\"align-items:center; margin-top:6px\">
                <div class=\"col-4 card-label\">
                    ";
        // line 81
        yield gT("Access mode:");
        yield "
                </div>
                <div class=\"col-8 ls-card-grid__description\"  style=\"align-content:center\">
                    ";
        // line 84
        $context["accessModeIcon"] = (((($context["accessMode"] ?? null) == "O")) ? ("ri-global-line") : ("ri-lock-2-line"));
        // line 85
        yield "                    ";
        $context["accessModeText"] = (((($context["accessMode"] ?? null) == "O")) ? (gT("Anyone with link")) : (gT("Link with access code")));
        // line 86
        yield "                    <div class=\"dropdown\">
                        <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" id=\"access-mode-dropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" ";
        // line 87
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 87) == "Y")) ? ("") : ("disabled"));
        yield ">
                            <i class=\"";
        // line 88
        yield $this->sandbox->ensureToStringAllowed(($context["accessModeIcon"] ?? null), 88, $this->source);
        yield "\"></i> ";
        yield $this->sandbox->ensureToStringAllowed(($context["accessModeText"] ?? null), 88, $this->source);
        yield "
                        </button>
                         <ul class=\"dropdown-menu\" aria-labelledby=\"access-mode-dropdown\">
                            <li><a data-surveyid=\"";
        // line 91
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 91), 91, $this->source);
        yield "\" data-newaccessmode=\"O\" class=\"dropdown-item updateAccessModeBtn\" href=\"#\"><i class=\"ri-global-line\"></i> ";
        yield gT("Anyone with link");
        yield "</a></li>
                            <li><a data-surveyid=\"";
        // line 92
        yield $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 92), 92, $this->source);
        yield "\" data-newaccessmode=\"C\" class=\"dropdown-item updateAccessModeBtn\" href=\"#\"><i class=\"ri-lock-2-line\"></i> ";
        yield gT("Link with access code");
        yield "</a></li>
                        </ul>
                    </div>
                </div>
        </li>
    </ul>
</div>

";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "active", [], "any", false, false, true, 100) == "Y")) {
            // line 101
            yield "    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"sharingdialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 105
            yield gT("Share survey");
            yield "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">";
            // line 111
            yield gT("Share QR-code:");
            yield "</h5>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 115
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 115)) {
                yield " ";
                // line 116
                yield "                                        ";
                $context["tmp_url"] = (($__internal_compile_2 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess && in_array(get_class($__internal_compile_2), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 116)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["surveyUrls"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 116), [], "array", false, false, true, 116));
                // line 117
                yield "                                ";
            }
            // line 118
            yield "                                 <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 121
            yield getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 121), 121, $this->source), false);
            yield "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <div class=\"selector__qrcode_container\">
                                                <button class=\"btn btn-outline-secondary selector__qrcode_trigger\">";
            // line 125
            yield gT("Generate QR-Code");
            yield "</button>
                                                <div class=\"selector__qrcode\" data-url=\"";
            // line 126
            yield $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 126, $this->source);
            yield "\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["aAdditionalLanguages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 132
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 132)) {
                    yield " ";
                    // line 133
                    yield "                                        ";
                    $context["tmp_url"] = (($__internal_compile_3 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess && in_array(get_class($__internal_compile_3), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_3[$context["langname"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["surveyUrls"] ?? null), $context["langname"], [], "array", false, false, true, 133));
                    // line 134
                    yield "                                    ";
                }
                // line 135
                yield "                                    <li class=\"list-group-item p-0 border-0";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 135)) {
                    yield " mb-2";
                }
                yield "\">
                                        <div class=\"ls-flex-row col-12 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 138
                yield getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 138, $this->source), false);
                yield "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <div class=\"selector__qrcode_container\">
                                                    <button class=\"btn btn-outline-secondary selector__qrcode_trigger\">";
                // line 142
                yield gT("Generate QR-Code");
                yield "</button>
                                                    <div class=\"selector__qrcode\" data-url=\"";
                // line 143
                yield $this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 143, $this->source);
                yield "\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "                            </ul>
                        </div>
                    </div>
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">
                                ";
            // line 155
            yield gT("Share on Facebook:");
            yield "
                            </h5>
                            <button class=\"btn btn-xs btn-warning float-end facebook-button\" 
                                  id=\"selector_activateFacebookSharing\">";
            // line 158
            yield gT("Enable");
            yield "</button>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 162
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 162)) {
                yield " ";
                // line 163
                yield "                                        ";
                $context["tmp_url"] = (($__internal_compile_4 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess && in_array(get_class($__internal_compile_4), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 163)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["surveyUrls"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 163), [], "array", false, false, true, 163));
                // line 164
                yield "                                ";
            }
            // line 165
            yield "                                    <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 168
            yield getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 168), 168, $this->source), false);
            yield "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"ri-facebook-box-fill\"></i> ";
            // line 171
            yield gT("Disabled");
            yield "</button>
                                            <iframe class=\"selector_fb_share d-none\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
            // line 172
            yield Twig\Extension\CoreExtension::urlencode($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 172, $this->source));
            yield "&layout=button_count&size=large&mobile_iframe=true&appId=328433594315978&width=106&height=28\" width=\"106\" height=\"28\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["aAdditionalLanguages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 177
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 177)) {
                    yield " ";
                    // line 178
                    yield "                                        ";
                    $context["tmp_url"] = (($__internal_compile_5 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess && in_array(get_class($__internal_compile_5), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_5[$context["langname"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["surveyUrls"] ?? null), $context["langname"], [], "array", false, false, true, 178));
                    // line 179
                    yield "                                    ";
                }
                // line 180
                yield "                                    <li class=\"list-group-item p-0 border-0";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 180)) {
                    yield " mb-2";
                }
                yield "\">
                                        <div class=\"ls-flex-row col-12 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 183
                yield getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 183, $this->source), false);
                yield "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <button class=\"btn btn-disabled facebook-button selector_fb_share_disabled\" disabled ><i class=\"ri-facebook-box-fill\"></i> ";
                // line 186
                yield gT("Disabled");
                yield "</button>
                                                <iframe class=\"selector_fb_share d-none h-12\" data-src=\"https://www.facebook.com/plugins/share_button.php?href=";
                // line 187
                yield Twig\Extension\CoreExtension::urlencode($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 187, $this->source));
                yield "&layout=button_count&size=large&mobile_iframe=true&appId=1321262851319939&width=106&height=28\" width=\"106\" height=\"28\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
                                            </div>
                                        </div>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "                            </ul>
                        </div>
                    </div>
                    <div class=\"card card-primary h-100 mb-3 p-4\">
                        <div class=\"card-header\">
                            <h5 class=\"card-title\">
                                ";
            // line 198
            yield gT("Share on Twitter:");
            yield "
                            </h5>
                        </div>
                        <div class=\"card-body border rounded\">
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 203
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 203)) {
                yield " ";
                // line 204
                yield "                                    ";
                $context["tmp_url"] = (($__internal_compile_6 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess && in_array(get_class($__internal_compile_6), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_6[CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 204)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["surveyUrls"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 204), [], "array", false, false, true, 204));
                // line 205
                yield "                                ";
            }
            // line 206
            yield "                                <li class=\"list-group-item p-0 border-0 mb-2\">
                                    <div class=\"ls-flex-row col-12 align-items-center\">
                                        <div class=\"col-4\">
                                            ";
            // line 209
            yield getLanguageNameFromCode($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "language", [], "any", false, false, true, 209), 209, $this->source), false);
            yield "
                                        </div>
                                        <div class=\"col-8 d-flex justify-content-center\">
                                            <a class=\"btn btn-outline-secondary twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
            // line 212
            yield Twig\Extension\CoreExtension::urlencode(gT("Thanks for taking this survey!"));
            yield "&url=";
            yield Twig\Extension\CoreExtension::urlencode($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 212, $this->source));
            yield "&hashtags=limesurvey,survey\">
                                                <i class=\"ri-twitter-fill\"></i>";
            // line 213
            yield gT("Tweet it");
            yield "
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["aAdditionalLanguages"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["langname"]) {
                // line 219
                yield "                                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["oSurvey"] ?? null), "sid", [], "any", false, false, true, 219)) {
                    yield " ";
                    // line 220
                    yield "                                        ";
                    $context["tmp_url"] = (($__internal_compile_7 = ($context["surveyUrls"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess && in_array(get_class($__internal_compile_7), CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_7[$context["langname"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["surveyUrls"] ?? null), $context["langname"], [], "array", false, false, true, 220));
                    // line 221
                    yield "                                    ";
                }
                // line 222
                yield "                                    <li class=\"list-group-item p-0 border-0";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 222)) {
                    yield " mb-2";
                }
                yield "\">
                                        <div class=\"ls-flex-row col-12 align-items-center\">
                                            <div class=\"col-4\">
                                                ";
                // line 225
                yield getLanguageNameFromCode($this->sandbox->ensureToStringAllowed($context["langname"], 225, $this->source), false);
                yield "
                                            </div>
                                            <div class=\"col-8 d-flex justify-content-center\">
                                                <a class=\"btn btn-outline-secondary twitter-button\" target='_blank' href=\"https://twitter.com/intent/tweet?text=";
                // line 228
                yield Twig\Extension\CoreExtension::urlencode(gT("Thanks for taking this survey!"));
                yield "&url=";
                yield Twig\Extension\CoreExtension::urlencode($this->sandbox->ensureToStringAllowed(($context["tmp_url"] ?? null), 228, $this->source));
                yield "&hashtags=limesurvey,survey\">
                                                    <i class=\"ri-twitter-fill\"></i>";
                // line 229
                yield gT("Tweet it");
                yield "
                                                </a>
                                            </div>
                                        </div>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            yield "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">";
            // line 240
            yield gT("Close");
            yield "</button>
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
        return "__string_template__d8130546df7bc9c36bd2d52cdab76e76";
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
        return array (  607 => 240,  600 => 235,  580 => 229,  574 => 228,  568 => 225,  559 => 222,  556 => 221,  553 => 220,  549 => 219,  532 => 218,  524 => 213,  518 => 212,  512 => 209,  507 => 206,  504 => 205,  501 => 204,  498 => 203,  490 => 198,  482 => 192,  463 => 187,  459 => 186,  453 => 183,  444 => 180,  441 => 179,  438 => 178,  434 => 177,  417 => 176,  410 => 172,  406 => 171,  400 => 168,  395 => 165,  392 => 164,  389 => 163,  386 => 162,  379 => 158,  373 => 155,  365 => 149,  345 => 143,  341 => 142,  334 => 138,  325 => 135,  322 => 134,  319 => 133,  315 => 132,  298 => 131,  290 => 126,  286 => 125,  279 => 121,  274 => 118,  271 => 117,  268 => 116,  265 => 115,  258 => 111,  249 => 105,  243 => 101,  241 => 100,  228 => 92,  222 => 91,  214 => 88,  210 => 87,  207 => 86,  204 => 85,  202 => 84,  196 => 81,  183 => 71,  177 => 70,  173 => 69,  169 => 68,  163 => 65,  152 => 57,  146 => 54,  135 => 46,  129 => 43,  122 => 38,  108 => 33,  105 => 32,  102 => 31,  99 => 30,  93 => 27,  88 => 24,  84 => 23,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  56 => 12,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d8130546df7bc9c36bd2d52cdab76e76", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "set" => 16, "for" => 23);
        static $filters = array("url_encode" => 172);
        static $functions = array("gT" => 4, "getLanguageNameFromCode" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['url_encode'],
                ['gT', 'getLanguageNameFromCode'],
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
