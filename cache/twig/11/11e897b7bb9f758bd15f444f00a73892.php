<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/hero-art.html.twig */
class __TwigTemplate_0fa4c2172a781c12c025d65ad5dbf010_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<figure class=\"hero-art\">
    <div class=\"hero-art__frame\" data-parallax-scene>
        <svg class=\"hero-art__scene\" viewBox=\"0 0 420 540\" role=\"img\" aria-labelledby=\"hero-art-title\">
            <title id=\"hero-art-title\">Линейная иллюстрация: вид из арочного окна на Лондон — Биг-Бен, собор Святого Павла и Лондонский глаз; на подоконнике книги и чашка чая.</title>
            <defs>
                <radialGradient id=\"hero-sun\" cx=\"50%\" cy=\"50%\" r=\"50%\">
                    <stop offset=\"0%\" stop-color=\"#C6A664\" stop-opacity=\".28\"/>
                    <stop offset=\"100%\" stop-color=\"#C6A664\" stop-opacity=\"0\"/>
                </radialGradient>
                <linearGradient id=\"hero-sky\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"1\">
                    <stop offset=\"0%\" stop-color=\"#FBF7EF\"/>
                    <stop offset=\"100%\" stop-color=\"#F4EDDF\"/>
                </linearGradient>
            </defs>

            <rect width=\"420\" height=\"540\" fill=\"url(#hero-sky)\"/>
            <circle cx=\"210\" cy=\"198\" r=\"132\" fill=\"url(#hero-sun)\"/>
            <circle cx=\"210\" cy=\"198\" r=\"84\" fill=\"none\" stroke=\"#B08A4F\" stroke-opacity=\".28\" stroke-width=\"1\"/>
            <circle cx=\"210\" cy=\"198\" r=\"68\" fill=\"none\" stroke=\"#B08A4F\" stroke-opacity=\".16\" stroke-width=\"1\"/>

            <g fill=\"none\" stroke=\"#14213D\" stroke-width=\"1.35\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <!-- clouds and birds -->
                <path d=\"M78 150c14-10 30-8 38 2M300 128c12-9 26-7 34 2\" stroke-opacity=\".22\"/>
                <path d=\"M268 170c5-5 10-5 15 0M288 160c4-4 8-4 12 0M314 178c4-4 8-4 12 0\" stroke-opacity=\".55\"/>
                <path d=\"M126 110c4-4 8-4 12 0\" stroke-opacity=\".4\"/>

                <!-- distant rooftops -->
                <path d=\"M0 430h420\" stroke-opacity=\".45\"/>
                <path d=\"M8 430v-48h40v48M18 382v-14h9v14M31 382v-9h9v9\" stroke-opacity=\".28\"/>
                <path d=\"M52 430v-27h36v27M62 403v-10h8v10M74 403v-6h8v6\" stroke-opacity=\".24\"/>
                <path d=\"M270 430v-32h38v32M280 398v-9h9v9M292 398v-14h8v14\" stroke-opacity=\".26\"/>
                <path d=\"M362 430v-36h42v36M372 394v-12h10v12M387 394v-7h9v7\" stroke-opacity=\".25\"/>

                <!-- london eye -->
                <g stroke-opacity=\".62\">
                    <circle cx=\"78\" cy=\"336\" r=\"62\"/>
                    <circle cx=\"78\" cy=\"336\" r=\"51\" stroke-opacity=\".4\"/>
                    <circle cx=\"78\" cy=\"336\" r=\"3.4\" fill=\"#14213D\" stroke=\"none\"/>
                    <path d=\"M78 274v124M16 336h124M34 292l88 88M122 292l-88 88\"/>
                    <path d=\"M78 430 48 431M78 430l30 1\"/>
                    <g fill=\"#FBF7EF\" stroke-opacity=\".62\">
                        <circle cx=\"78\" cy=\"274\" r=\"3.4\"/>
                        <circle cx=\"78\" cy=\"398\" r=\"3.4\"/>
                        <circle cx=\"16\" cy=\"336\" r=\"3.4\"/>
                        <circle cx=\"140\" cy=\"336\" r=\"3.4\"/>
                        <circle cx=\"34\" cy=\"292\" r=\"3.4\"/>
                        <circle cx=\"122\" cy=\"380\" r=\"3.4\"/>
                        <circle cx=\"122\" cy=\"292\" r=\"3.4\"/>
                        <circle cx=\"34\" cy=\"380\" r=\"3.4\"/>
                    </g>
                </g>

                <!-- st paul\x27s -->
                <g>
                    <path d=\"M160 430v-85h100v85\" fill=\"#FBF7EF\" stroke-opacity=\".8\"/>
                    <path d=\"M160 345c8-53 92-53 100 0\" fill=\"#FBF7EF\" stroke-opacity=\".85\"/>
                    <path d=\"M172 345c8-33 68-33 76 0\" stroke-opacity=\".25\"/>
                    <path d=\"M202 345v-42h16v42M210 303v-16M203 287h14\" stroke-opacity=\".8\"/>
                    <path d=\"M208 287v-8h4v8\" stroke-opacity=\".8\"/>
                    <path d=\"M171 430v-69M183 430v-69M195 430v-69M207 430v-69M219 430v-69M231 430v-69M243 430v-69\" stroke-opacity=\".3\"/>
                    <path d=\"M152 430h116\" stroke-opacity=\".55\"/>
                </g>

                <!-- big ben -->
                <g>
                    <path d=\"M312 430V300h48v130\" fill=\"#FBF7EF\" stroke-opacity=\".85\"/>
                    <path d=\"M312 300 336 238l24 62\" fill=\"#FBF7EF\" stroke-opacity=\".85\"/>
                    <path d=\"M336 238v-12\" stroke-opacity=\".65\"/>
                    <circle cx=\"336\" cy=\"337\" r=\"13.5\" fill=\"#FBF7EF\" stroke-opacity=\".85\"/>
                    <path d=\"M336 329v8l5 4\" stroke-opacity=\".85\"/>
                    <path d=\"M312 362h48M312 382h48\" stroke-opacity=\".32\"/>
                    <path d=\"M321 392v24M331 392v24M341 392v24M351 392v24\" stroke-opacity=\".3\"/>
                    <path d=\"M303 430h66\" stroke-opacity=\".55\"/>
                </g>

                <!-- river -->
                <g stroke-opacity=\".25\">
                    <path d=\"M0 448c28-7 44 7 72 0s44 7 72 0 44 7 72 0 44 7 72 0 44 7 72 0 44 7 72 0\"/>
                    <path d=\"M24 461c22-5 36 5 58 0s36 5 58 0 36 5 58 0 36 5 58 0 36 5 58 0 36 5 58 0\"/>
                </g>

                <!-- inner arch line -->
                <path d=\"M18 520V214a192 192 0 0 1 384 0v306\" stroke=\"#B08A4F\" stroke-opacity=\".32\" stroke-width=\"1\"/>
                <path d=\"M204 22h12l4 12h-20l4-12Z\" fill=\"#B08A4F\" stroke=\"none\" opacity=\".65\"/>

                <!-- windowsill -->
                <path d=\"M0 478h420\" stroke-opacity=\".65\"/>
                <path d=\"M0 540v-46h420v46\" fill=\"#F4EDDF\" stroke=\"none\"/>
                <path d=\"M0 494h420\" stroke-opacity=\".2\"/>

                <!-- books -->
                <g fill=\"#FBF7EF\">
                    <path d=\"M34 466h92v12H34z\" stroke-opacity=\".55\"/>
                    <path d=\"M42 454h78v12H42z\" stroke-opacity=\".55\"/>
                    <path d=\"M30 442h86v12H30z\" stroke-opacity=\".55\"/>
                    <path d=\"M188 460h74v18h-74z\" stroke-opacity=\".45\"/>
                </g>
                <path d=\"M46 470h12M54 458h14M42 446h16M196 470h58\" stroke-opacity=\".3\"/>
                <path d=\"M188 460 198 448l64-1 1 13\" fill=\"#FBF7EF\" stroke-opacity=\".45\"/>

                <!-- tea -->
                <g stroke-opacity=\".7\">
                    <ellipse cx=\"330\" cy=\"477\" rx=\"38\" ry=\"5.5\" fill=\"#FBF7EF\"/>
                    <path d=\"M305 457h47v9c0 9-9 13-23.5 13S305 475 305 466v-9Z\" fill=\"#FBF7EF\"/>
                    <path d=\"M352 460c10-1 12 5 9 9-2 3-6 4-9 3\"/>
                    <path d=\"M318 448c-4-6 4-8 0-14M330 446c-4-6 4-8 0-14\" stroke=\"#B08A4F\" stroke-opacity=\".55\"/>
                </g>

                <!-- sprig -->
                <g stroke-opacity=\".4\">
                    <path d=\"M274 478c0-16 6-27 16-35M282 455c-7 0-11-4-12-10 6-1 11 3 12 10ZM288 445c7-1 12-5 13-11-7-1-12 4-13 11Z\"/>
                </g>
            </g>
        </svg>
    </div>

    <span class=\"hero-art__seal\" aria-hidden=\"true\">
        <span>CELTA</span>
        <small>Cambridge<br>English</small>
    </span>

    <div class=\"hero-art__badge\">
        <span class=\"hero-art__badge-kicker\">";
        // line 123
        yield (string) $this->escaper->escape(((array_key_exists("badge_kicker", $context)) ? (Twig\Extension\CoreExtension::default(($context["badge_kicker"] ?? null), "ЕГЭ · 2026")) : ("ЕГЭ · 2026")), "html", null, true);
        yield "</span>
        <strong>";
        // line 124
        yield (string) $this->escaper->escape(((array_key_exists("badge_value", $context)) ? (Twig\Extension\CoreExtension::default(($context["badge_value"] ?? null), "91")) : ("91")), "html", null, true);
        yield "</strong>
        <span class=\"hero-art__badge-caption\">";
        // line 125
        yield (string) $this->escaper->escape(((array_key_exists("badge_caption", $context)) ? (Twig\Extension\CoreExtension::default(($context["badge_caption"] ?? null), "средний балл учеников")) : ("средний балл учеников")), "html", null, true);
        yield "</span>
    </div>

    <figcaption class=\"hero-art__caption\">
        <span>London · Oxford · Cambridge</span>
        <span class=\"hero-art__caption-note\">и немного Москвы</span>
    </figcaption>
</figure>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/hero-art.html.twig";
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
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  180 => 125,  176 => 124,  172 => 123,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<figure class=\"hero-art\">
    <div class=\"hero-art__frame\" data-parallax-scene>
        <svg class=\"hero-art__scene\" viewBox=\"0 0 420 540\" role=\"img\" aria-labelledby=\"hero-art-title\">
            <title id=\"hero-art-title\">Линейная иллюстрация: вид из арочного окна на Лондон — Биг-Бен, собор Святого Павла и Лондонский глаз; на подоконнике книги и чашка чая.</title>
            <defs>
                <radialGradient id=\"hero-sun\" cx=\"50%\" cy=\"50%\" r=\"50%\">
                    <stop offset=\"0%\" stop-color=\"#C6A664\" stop-opacity=\".28\"/>
                    <stop offset=\"100%\" stop-color=\"#C6A664\" stop-opacity=\"0\"/>
                </radialGradient>
                <linearGradient id=\"hero-sky\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"1\">
                    <stop offset=\"0%\" stop-color=\"#FBF7EF\"/>
                    <stop offset=\"100%\" stop-color=\"#F4EDDF\"/>
                </linearGradient>
            </defs>

            <rect width=\"420\" height=\"540\" fill=\"url(#hero-sky)\"/>
            <circle cx=\"210\" cy=\"198\" r=\"132\" fill=\"url(#hero-sun)\"/>
            <circle cx=\"210\" cy=\"198\" r=\"84\" fill=\"none\" stroke=\"#B08A4F\" stroke-opacity=\".28\" stroke-width=\"1\"/>
            <circle cx=\"210\" cy=\"198\" r=\"68\" fill=\"none\" stroke=\"#B08A4F\" stroke-opacity=\".16\" stroke-width=\"1\"/>

            <g fill=\"none\" stroke=\"#14213D\" stroke-width=\"1.35\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <!-- clouds and birds -->
                <path d=\"M78 150c14-10 30-8 38 2M300 128c12-9 26-7 34 2\" stroke-opacity=\".22\"/>
                <path d=\"M268 170c5-5 10-5 15 0M288 160c4-4 8-4 12 0M314 178c4-4 8-4 12 0\" stroke-opacity=\".55\"/>
                <path d=\"M126 110c4-4 8-4 12 0\" stroke-opacity=\".4\"/>

                <!-- distant rooftops -->
                <path d=\"M0 430h420\" stroke-opacity=\".45\"/>
                <path d=\"M8 430v-48h40v48M18 382v-14h9v14M31 382v-9h9v9\" stroke-opacity=\".28\"/>
                <path d=\"M52 430v-27h36v27M62 403v-10h8v10M74 403v-6h8v6\" stroke-opacity=\".24\"/>
                <path d=\"M270 430v-32h38v32M280 398v-9h9v9M292 398v-14h8v14\" stroke-opacity=\".26\"/>
                <path d=\"M362 430v-36h42v36M372 394v-12h10v12M387 394v-7h9v7\" stroke-opacity=\".25\"/>

                <!-- london eye -->
                <g stroke-opacity=\".62\">
                    <circle cx=\"78\" cy=\"336\" r=\"62\"/>
                    <circle cx=\"78\" cy=\"336\" r=\"51\" stroke-opacity=\".4\"/>
                    <circle cx=\"78\" cy=\"336\" r=\"3.4\" fill=\"#14213D\" stroke=\"none\"/>
                    <path d=\"M78 274v124M16 336h124M34 292l88 88M122 292l-88 88\"/>
                    <path d=\"M78 430 48 431M78 430l30 1\"/>
                    <g fill=\"#FBF7EF\" stroke-opacity=\".62\">
                        <circle cx=\"78\" cy=\"274\" r=\"3.4\"/>
                        <circle cx=\"78\" cy=\"398\" r=\"3.4\"/>
                        <circle cx=\"16\" cy=\"336\" r=\"3.4\"/>
                        <circle cx=\"140\" cy=\"336\" r=\"3.4\"/>
                        <circle cx=\"34\" cy=\"292\" r=\"3.4\"/>
                        <circle cx=\"122\" cy=\"380\" r=\"3.4\"/>
                        <circle cx=\"122\" cy=\"292\" r=\"3.4\"/>
                        <circle cx=\"34\" cy=\"380\" r=\"3.4\"/>
                    </g>
                </g>

                <!-- st paul\x27s -->
                <g>
                    <path d=\"M160 430v-85h100v85\" fill=\"#FBF7EF\" stroke-opacity=\".8\"/>
                    <path d=\"M160 345c8-53 92-53 100 0\" fill=\"#FBF7EF\" stroke-opacity=\".85\"/>
                    <path d=\"M172 345c8-33 68-33 76 0\" stroke-opacity=\".25\"/>
                    <path d=\"M202 345v-42h16v42M210 303v-16M203 287h14\" stroke-opacity=\".8\"/>
                    <path d=\"M208 287v-8h4v8\" stroke-opacity=\".8\"/>
                    <path d=\"M171 430v-69M183 430v-69M195 430v-69M207 430v-69M219 430v-69M231 430v-69M243 430v-69\" stroke-opacity=\".3\"/>
                    <path d=\"M152 430h116\" stroke-opacity=\".55\"/>
                </g>

                <!-- big ben -->
                <g>
                    <path d=\"M312 430V300h48v130\" fill=\"#FBF7EF\" stroke-opacity=\".85\"/>
                    <path d=\"M312 300 336 238l24 62\" fill=\"#FBF7EF\" stroke-opacity=\".85\"/>
                    <path d=\"M336 238v-12\" stroke-opacity=\".65\"/>
                    <circle cx=\"336\" cy=\"337\" r=\"13.5\" fill=\"#FBF7EF\" stroke-opacity=\".85\"/>
                    <path d=\"M336 329v8l5 4\" stroke-opacity=\".85\"/>
                    <path d=\"M312 362h48M312 382h48\" stroke-opacity=\".32\"/>
                    <path d=\"M321 392v24M331 392v24M341 392v24M351 392v24\" stroke-opacity=\".3\"/>
                    <path d=\"M303 430h66\" stroke-opacity=\".55\"/>
                </g>

                <!-- river -->
                <g stroke-opacity=\".25\">
                    <path d=\"M0 448c28-7 44 7 72 0s44 7 72 0 44 7 72 0 44 7 72 0 44 7 72 0 44 7 72 0\"/>
                    <path d=\"M24 461c22-5 36 5 58 0s36 5 58 0 36 5 58 0 36 5 58 0 36 5 58 0 36 5 58 0\"/>
                </g>

                <!-- inner arch line -->
                <path d=\"M18 520V214a192 192 0 0 1 384 0v306\" stroke=\"#B08A4F\" stroke-opacity=\".32\" stroke-width=\"1\"/>
                <path d=\"M204 22h12l4 12h-20l4-12Z\" fill=\"#B08A4F\" stroke=\"none\" opacity=\".65\"/>

                <!-- windowsill -->
                <path d=\"M0 478h420\" stroke-opacity=\".65\"/>
                <path d=\"M0 540v-46h420v46\" fill=\"#F4EDDF\" stroke=\"none\"/>
                <path d=\"M0 494h420\" stroke-opacity=\".2\"/>

                <!-- books -->
                <g fill=\"#FBF7EF\">
                    <path d=\"M34 466h92v12H34z\" stroke-opacity=\".55\"/>
                    <path d=\"M42 454h78v12H42z\" stroke-opacity=\".55\"/>
                    <path d=\"M30 442h86v12H30z\" stroke-opacity=\".55\"/>
                    <path d=\"M188 460h74v18h-74z\" stroke-opacity=\".45\"/>
                </g>
                <path d=\"M46 470h12M54 458h14M42 446h16M196 470h58\" stroke-opacity=\".3\"/>
                <path d=\"M188 460 198 448l64-1 1 13\" fill=\"#FBF7EF\" stroke-opacity=\".45\"/>

                <!-- tea -->
                <g stroke-opacity=\".7\">
                    <ellipse cx=\"330\" cy=\"477\" rx=\"38\" ry=\"5.5\" fill=\"#FBF7EF\"/>
                    <path d=\"M305 457h47v9c0 9-9 13-23.5 13S305 475 305 466v-9Z\" fill=\"#FBF7EF\"/>
                    <path d=\"M352 460c10-1 12 5 9 9-2 3-6 4-9 3\"/>
                    <path d=\"M318 448c-4-6 4-8 0-14M330 446c-4-6 4-8 0-14\" stroke=\"#B08A4F\" stroke-opacity=\".55\"/>
                </g>

                <!-- sprig -->
                <g stroke-opacity=\".4\">
                    <path d=\"M274 478c0-16 6-27 16-35M282 455c-7 0-11-4-12-10 6-1 11 3 12 10ZM288 445c7-1 12-5 13-11-7-1-12 4-13 11Z\"/>
                </g>
            </g>
        </svg>
    </div>

    <span class=\"hero-art__seal\" aria-hidden=\"true\">
        <span>CELTA</span>
        <small>Cambridge<br>English</small>
    </span>

    <div class=\"hero-art__badge\">
        <span class=\"hero-art__badge-kicker\">{{ badge_kicker|default(\x27ЕГЭ · 2026\x27) }}</span>
        <strong>{{ badge_value|default(\x2791\x27) }}</strong>
        <span class=\"hero-art__badge-caption\">{{ badge_caption|default(\x27средний балл учеников\x27) }}</span>
    </div>

    <figcaption class=\"hero-art__caption\">
        <span>London · Oxford · Cambridge</span>
        <span class=\"hero-art__caption-note\">и немного Москвы</span>
    </figcaption>
</figure>
", "partials/hero-art.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\partials\\hero-art.html.twig");
    }
    
    public function ensureSecurityCheckedOrHandOver(): ?\Twig\Template
    {
        if (!$this->sandbox->isSandboxed()) {
            return null;
        }

        return $this->loadSecurityCheckedTemplate() ?? throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed()) {
            throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
        }
    }
}
