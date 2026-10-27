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

/* contact.html.twig */
class __TwigTemplate_70d0c2606c40a61adc87952994e5dfd0_sourced extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("partials/base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/icons.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        yield from $this->load("partials/page-hero.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "
    <section class=\"section section--contact\">
        <div class=\"container\">
            <div class=\"contact-grid\">
                <div class=\"contact-info\" data-reveal>
                    <div class=\"contact-block\">
                        <p class=\"contact-block__label\">Написать напрямую</p>
                        <ul class=\"contact-methods\">
                            <li>
                                <span class=\"contact-methods__icon\">";
        // line 15
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(15))->call("icon", ["mail", "icon"], $context, 15, $this->source);
        yield "</span>
                                <span>
                                    <small>Почта</small>
                                    <a href=\"mailto:";
        // line 18
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
        yield "</a>
                                </span>
                            </li>
                            <li>
                                <span class=\"contact-methods__icon\">";
        // line 22
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(22))->call("icon", ["telegram", "icon"], $context, 22, $this->source);
        yield "</span>
                                <span>
                                    <small>Telegram</small>
                                    <a href=\"";
        // line 25
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 25), "telegram_url", [], "any", false, false, false, 25), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\">@";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 25), "telegram", [], "any", false, false, false, 25), "html", null, true);
        yield "</a>
                                </span>
                            </li>
                            <li>
                                <span class=\"contact-methods__icon\">";
        // line 29
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(29))->call("icon", ["phone", "icon"], $context, 29, $this->source);
        yield "</span>
                                <span>
                                    <small>Телефон</small>
                                    <a href=\"tel:";
        // line 32
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 32), "phone_href", [], "any", false, false, false, 32), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 32), "phone", [], "any", false, false, false, 32), "html", null, true);
        yield "</a>
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class=\"contact-block\">
                        <p class=\"contact-block__label\">Где и когда</p>
                        <ul class=\"contact-details\">
                            <li>";
        // line 41
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(41))->call("icon", ["pin", "icon icon--sm"], $context, 41, $this->source);
        yield "<span>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 41), "location", [], "any", false, false, false, 41), "html", null, true);
        yield "</span></li>
                            <li>";
        // line 42
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(42))->call("icon", ["clock", "icon icon--sm"], $context, 42, $this->source);
        yield "<span>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 42), "hours", [], "any", false, false, false, 42), "html", null, true);
        yield "</span></li>
                            <li>";
        // line 43
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(43))->call("icon", ["calendar", "icon icon--sm"], $context, 43, $this->source);
        yield "<span>Онлайн — в любое удобное время по договорённости</span></li>
                        </ul>
                    </div>

                    <div class=\"contact-next\">
                        <p class=\"contact-next__label\">Что будет дальше</p>
                        <ol>
                            <li><span>01</span>Отвечу лично в течение дня.</li>
                            <li><span>02</span>Согласуем время для знакомства.</li>
                            <li><span>03</span>Составлю честный план под вашу цель.</li>
                        </ol>
                    </div>

                    <div class=\"contact-availability\">
                        <span class=\"availability availability--dark\"><span class=\"availability__dot\" aria-hidden=\"true\"></span>";
        // line 57
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 57), "availability", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 57), "availability", [], "any", false, false, false, 57), "Свободно 2 места на подготовку к ЕГЭ 2027")) : ("Свободно 2 места на подготовку к ЕГЭ 2027")), "html", null, true);
        yield "</span>
                    </div>
                </div>

                <div class=\"contact-form-card\" data-reveal style=\"--d: .08s\">
                    <div class=\"contact-form-card__head\">
                        <p class=\"eyebrow\">Заявка</p>
                        <h2>Расскажите <em>о цели.</em></h2>
                        <p>Заполните короткую форму — я вернусь с вариантами формата и времени. Или напишите напрямую в Telegram.</p>
                    </div>

                    ";
        // line 68
        yield from $this->load("forms/form.html.twig", 68)->unwrap()->yield($context);
        // line 69
        yield "
                    <p class=\"form-privacy\">Отправляя форму, вы соглашаетесь с <a href=\"";
        // line 70
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/privacy\">политикой конфиденциальности</a>. Данные используются только для ответа на заявку.</p>
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
        return "contact.html.twig";
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
        return array (  179 => 70,  176 => 69,  174 => 68,  160 => 57,  143 => 43,  137 => 42,  131 => 41,  117 => 32,  111 => 29,  102 => 25,  96 => 22,  87 => 18,  81 => 15,  70 => 6,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/icons.html.twig\x27 as ui %}

{% block content %}
    {% include \x27partials/page-hero.html.twig\x27 %}

    <section class=\"section section--contact\">
        <div class=\"container\">
            <div class=\"contact-grid\">
                <div class=\"contact-info\" data-reveal>
                    <div class=\"contact-block\">
                        <p class=\"contact-block__label\">Написать напрямую</p>
                        <ul class=\"contact-methods\">
                            <li>
                                <span class=\"contact-methods__icon\">{{ ui.icon(\x27mail\x27, \x27icon\x27) }}</span>
                                <span>
                                    <small>Почта</small>
                                    <a href=\"mailto:{{ site.contact.email }}\">{{ site.contact.email }}</a>
                                </span>
                            </li>
                            <li>
                                <span class=\"contact-methods__icon\">{{ ui.icon(\x27telegram\x27, \x27icon\x27) }}</span>
                                <span>
                                    <small>Telegram</small>
                                    <a href=\"{{ site.contact.telegram_url }}\" target=\"_blank\" rel=\"noopener\">@{{ site.contact.telegram }}</a>
                                </span>
                            </li>
                            <li>
                                <span class=\"contact-methods__icon\">{{ ui.icon(\x27phone\x27, \x27icon\x27) }}</span>
                                <span>
                                    <small>Телефон</small>
                                    <a href=\"tel:{{ site.contact.phone_href }}\">{{ site.contact.phone }}</a>
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class=\"contact-block\">
                        <p class=\"contact-block__label\">Где и когда</p>
                        <ul class=\"contact-details\">
                            <li>{{ ui.icon(\x27pin\x27, \x27icon icon--sm\x27) }}<span>{{ site.contact.location }}</span></li>
                            <li>{{ ui.icon(\x27clock\x27, \x27icon icon--sm\x27) }}<span>{{ site.contact.hours }}</span></li>
                            <li>{{ ui.icon(\x27calendar\x27, \x27icon icon--sm\x27) }}<span>Онлайн — в любое удобное время по договорённости</span></li>
                        </ul>
                    </div>

                    <div class=\"contact-next\">
                        <p class=\"contact-next__label\">Что будет дальше</p>
                        <ol>
                            <li><span>01</span>Отвечу лично в течение дня.</li>
                            <li><span>02</span>Согласуем время для знакомства.</li>
                            <li><span>03</span>Составлю честный план под вашу цель.</li>
                        </ol>
                    </div>

                    <div class=\"contact-availability\">
                        <span class=\"availability availability--dark\"><span class=\"availability__dot\" aria-hidden=\"true\"></span>{{ page.header.availability|default(\x27Свободно 2 места на подготовку к ЕГЭ 2027\x27) }}</span>
                    </div>
                </div>

                <div class=\"contact-form-card\" data-reveal style=\"--d: .08s\">
                    <div class=\"contact-form-card__head\">
                        <p class=\"eyebrow\">Заявка</p>
                        <h2>Расскажите <em>о цели.</em></h2>
                        <p>Заполните короткую форму — я вернусь с вариантами формата и времени. Или напишите напрямую в Telegram.</p>
                    </div>

                    {% include \x27forms/form.html.twig\x27 %}

                    <p class=\"form-privacy\">Отправляя форму, вы соглашаетесь с <a href=\"{{ base_url_relative }}/privacy\">политикой конфиденциальности</a>. Данные используются только для ответа на заявку.</p>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "contact.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\contact.html.twig");
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
