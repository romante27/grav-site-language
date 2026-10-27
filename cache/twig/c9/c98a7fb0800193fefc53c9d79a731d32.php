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

/* partials/cta-band.html.twig */
class __TwigTemplate_316b6adc6a98c05ff4fb1cfa1a6acbfb_sourced extends Template
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
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/icons.html.twig", 1)->unwrap()->getMacroNamespace();
        // line 2
        $context["eyebrow"] = ((array_key_exists("eyebrow", $context)) ? (Twig\Extension\CoreExtension::default(($context["eyebrow"] ?? null), "Начать")) : ("Начать"));
        // line 3
        $context["heading"] = ((array_key_exists("heading", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading"] ?? null), "Первый шаг — <em>разговор.</em>")) : ("Первый шаг — <em>разговор.</em>"));
        // line 4
        $context["text"] = ((array_key_exists("text", $context)) ? (Twig\Extension\CoreExtension::default(($context["text"] ?? null), "Пробный урок 40 минут: знакомимся, определяем уровень, обсуждаем цель и составляем маршрут. Даже если решите не продолжать — уйдёте с ясным планом.")) : ("Пробный урок 40 минут: знакомимся, определяем уровень, обсуждаем цель и составляем маршрут. Даже если решите не продолжать — уйдёте с ясным планом."));
        // line 5
        $context["note"] = ((array_key_exists("note", $context)) ? (Twig\Extension\CoreExtension::default(($context["note"] ?? null), "Отвечаю лично в течение дня. Без рассылок и навязчивых звонков.")) : ("Отвечаю лично в течение дня. Без рассылок и навязчивых звонков."));
        // line 6
        $context["primary_label"] = ((array_key_exists("primary_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["primary_label"] ?? null), "Записаться на пробный")) : ("Записаться на пробный"));
        // line 7
        $context["primary_url"] = ((array_key_exists("primary_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["primary_url"] ?? null), (($context["base_url_relative"] ?? null) . "/contact"))) : ((($context["base_url_relative"] ?? null) . "/contact")));
        // line 8
        $context["secondary_label"] = ((array_key_exists("secondary_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["secondary_label"] ?? null), "Написать в Telegram")) : ("Написать в Telegram"));
        // line 9
        $context["secondary_url"] = ((array_key_exists("secondary_url", $context)) ? (Twig\Extension\CoreExtension::default(($context["secondary_url"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 9), "telegram_url", [], "any", false, false, false, 9))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 9), "telegram_url", [], "any", false, false, false, 9)));
        // line 10
        $context["availability"] = ((array_key_exists("availability", $context)) ? (Twig\Extension\CoreExtension::default(($context["availability"] ?? null), "Свободно 2 места на подготовку к ЕГЭ 2027")) : ("Свободно 2 места на подготовку к ЕГЭ 2027"));
        // line 11
        yield "
<section class=\"section section--cta\">
    <div class=\"container\">
        <div class=\"cta-band\" data-reveal>
            <div class=\"cta-band__ornament\" aria-hidden=\"true\">
                <svg viewBox=\"0 0 260 340\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M18 340V118a112 112 0 0 1 224 0v222\" stroke=\"currentColor\" stroke-width=\"1\"/>
                    <path d=\"M44 340V122a86 86 0 0 1 172 0v218\" stroke=\"currentColor\" stroke-width=\"1\" opacity=\".6\"/>
                    <path d=\"M130 340V150M80 340V180M180 340V180\" stroke=\"currentColor\" stroke-width=\"1\" opacity=\".35\"/>
                    <circle cx=\"130\" cy=\"165\" r=\"54\" stroke=\"currentColor\" stroke-width=\"1\" opacity=\".4\"/>
                    <path d=\"M130 22v46M118 34h24\" stroke=\"currentColor\" stroke-width=\"1\" opacity=\".7\"/>
                </svg>
            </div>

            <div class=\"cta-band__content\">
                <p class=\"eyebrow eyebrow--light\">";
        // line 26
        yield (string) $this->escaper->escape(($context["eyebrow"] ?? null), "html", null, true);
        yield "</p>
                <h2>";
        // line 27
        yield (string) ($context["heading"] ?? null);
        yield "</h2>
                <p class=\"cta-band__text\">";
        // line 28
        yield (string) $this->escaper->escape(($context["text"] ?? null), "html", null, true);
        yield "</p>

                <div class=\"cta-band__actions\">
                    <a class=\"btn btn--primary\" href=\"";
        // line 31
        yield (string) $this->escaper->escape(($context["primary_url"] ?? null), "html", null, true);
        yield "\">
                        <span>";
        // line 32
        yield (string) $this->escaper->escape(($context["primary_label"] ?? null), "html", null, true);
        yield "</span>
                        ";
        // line 33
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(33))->call("icon", ["arrow-up-right", "icon icon--sm"], $context, 33, $this->source);
        yield "
                    </a>
                    <a class=\"btn btn--ghost btn--ghost-light\" href=\"";
        // line 35
        yield (string) $this->escaper->escape(($context["secondary_url"] ?? null), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\">
                        ";
        // line 36
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(36))->call("icon", ["telegram", "icon icon--sm"], $context, 36, $this->source);
        yield "
                        <span>";
        // line 37
        yield (string) $this->escaper->escape(($context["secondary_label"] ?? null), "html", null, true);
        yield "</span>
                    </a>
                </div>

                <p class=\"cta-band__note\">";
        // line 41
        yield (string) $this->escaper->escape(($context["note"] ?? null), "html", null, true);
        yield "</p>
            </div>

            <div class=\"cta-band__foot\">
                <span class=\"availability\"><span class=\"availability__dot\" aria-hidden=\"true\"></span>";
        // line 45
        yield (string) $this->escaper->escape(($context["availability"] ?? null), "html", null, true);
        yield "</span>
                <span class=\"cta-band__signature\" aria-hidden=\"true\">Anna Belova · English</span>
            </div>
        </div>
    </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/cta-band.html.twig";
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
        return array (  134 => 45,  127 => 41,  120 => 37,  116 => 36,  112 => 35,  107 => 33,  103 => 32,  99 => 31,  93 => 28,  89 => 27,  85 => 26,  68 => 11,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
{% set eyebrow = eyebrow|default(\x27Начать\x27) %}
{% set heading = heading|default(\x27Первый шаг — <em>разговор.</em>\x27) %}
{% set text = text|default(\x27Пробный урок 40 минут: знакомимся, определяем уровень, обсуждаем цель и составляем маршрут. Даже если решите не продолжать — уйдёте с ясным планом.\x27) %}
{% set note = note|default(\x27Отвечаю лично в течение дня. Без рассылок и навязчивых звонков.\x27) %}
{% set primary_label = primary_label|default(\x27Записаться на пробный\x27) %}
{% set primary_url = primary_url|default(base_url_relative ~ \x27/contact\x27) %}
{% set secondary_label = secondary_label|default(\x27Написать в Telegram\x27) %}
{% set secondary_url = secondary_url|default(site.contact.telegram_url) %}
{% set availability = availability|default(\x27Свободно 2 места на подготовку к ЕГЭ 2027\x27) %}

<section class=\"section section--cta\">
    <div class=\"container\">
        <div class=\"cta-band\" data-reveal>
            <div class=\"cta-band__ornament\" aria-hidden=\"true\">
                <svg viewBox=\"0 0 260 340\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M18 340V118a112 112 0 0 1 224 0v222\" stroke=\"currentColor\" stroke-width=\"1\"/>
                    <path d=\"M44 340V122a86 86 0 0 1 172 0v218\" stroke=\"currentColor\" stroke-width=\"1\" opacity=\".6\"/>
                    <path d=\"M130 340V150M80 340V180M180 340V180\" stroke=\"currentColor\" stroke-width=\"1\" opacity=\".35\"/>
                    <circle cx=\"130\" cy=\"165\" r=\"54\" stroke=\"currentColor\" stroke-width=\"1\" opacity=\".4\"/>
                    <path d=\"M130 22v46M118 34h24\" stroke=\"currentColor\" stroke-width=\"1\" opacity=\".7\"/>
                </svg>
            </div>

            <div class=\"cta-band__content\">
                <p class=\"eyebrow eyebrow--light\">{{ eyebrow }}</p>
                <h2>{{ heading|raw }}</h2>
                <p class=\"cta-band__text\">{{ text }}</p>

                <div class=\"cta-band__actions\">
                    <a class=\"btn btn--primary\" href=\"{{ primary_url }}\">
                        <span>{{ primary_label }}</span>
                        {{ ui.icon(\x27arrow-up-right\x27, \x27icon icon--sm\x27) }}
                    </a>
                    <a class=\"btn btn--ghost btn--ghost-light\" href=\"{{ secondary_url }}\" target=\"_blank\" rel=\"noopener\">
                        {{ ui.icon(\x27telegram\x27, \x27icon icon--sm\x27) }}
                        <span>{{ secondary_label }}</span>
                    </a>
                </div>

                <p class=\"cta-band__note\">{{ note }}</p>
            </div>

            <div class=\"cta-band__foot\">
                <span class=\"availability\"><span class=\"availability__dot\" aria-hidden=\"true\"></span>{{ availability }}</span>
                <span class=\"cta-band__signature\" aria-hidden=\"true\">Anna Belova · English</span>
            </div>
        </div>
    </div>
</section>
", "partials/cta-band.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\partials\\cta-band.html.twig");
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
