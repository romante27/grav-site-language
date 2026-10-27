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

/* services.html.twig */
class __TwigTemplate_fb85a7b571bc234b2ef11eb776a10b90_sourced extends Template
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
    <section class=\"section section--programs\">
        <div class=\"container\">
            <div class=\"programs\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 10), "programs", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 11
            yield "                <article class=\"program\" id=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["program"], "anchor", [], "any", false, false, false, 11), "html", null, true);
            yield "\" data-reveal>
                    <div class=\"program__head\">
                        <span class=\"program__number\">";
            // line 13
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["program"], "number", [], "any", false, false, false, 13), "html", null, true);
            yield "</span>
                        <div class=\"program__title\">
                            <p class=\"eyebrow\">";
            // line 15
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["program"], "kicker", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
                            <h2>";
            // line 16
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["program"], "title", [], "any", false, false, false, 16), "html", null, true);
            yield "</h2>
                        </div>
                    </div>

                    <div class=\"program__body\">
                        <div class=\"program__main\">
                            <p class=\"program__lead\">";
            // line 22
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["program"], "lead", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                            <ul class=\"tick-list\">
                                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["program"], "bullets", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["bullet"]) {
                // line 25
                yield "                                <li>
                                    ";
                // line 26
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(26))->call("icon", ["check", "icon icon--sm"], $context, 26, $this->source);
                yield "
                                    <span>";
                // line 27
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["bullet"], "text", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["bullet"], "text", [], "any", false, false, false, 27), $context["bullet"])) : ($context["bullet"])), "html", null, true);
                yield "</span>
                                </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bullet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 30
            yield "                            </ul>
                        </div>

                        <aside class=\"program__aside\">
                            <dl class=\"program__facts\">
                                <div>
                                    <dt>Формат</dt>
                                    <dd>";
            // line 37
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["program"], "format", [], "any", false, false, false, 37), "html", null, true);
            yield "</dd>
                                </div>
                                <div>
                                    <dt>Уровень</dt>
                                    <dd>";
            // line 41
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["program"], "level", [], "any", false, false, false, 41), "html", null, true);
            yield "</dd>
                                </div>
                                <div>
                                    <dt>Стоимость</dt>
                                    <dd>";
            // line 45
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["program"], "price", [], "any", false, false, false, 45), "html", null, true);
            yield "</dd>
                                </div>
                            </dl>
                            <a class=\"btn btn--ghost btn--full\" href=\"";
            // line 48
            yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
            yield "/contact\">
                                <span>Обсудить программу</span>
                                ";
            // line 50
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(50))->call("icon", ["arrow-up-right", "icon icon--sm"], $context, 50, $this->source);
            yield "
                            </a>
                        </aside>
                    </div>
                </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['program'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 56
        yield "            </div>
        </div>
    </section>

    <section class=\"section section--pricing\" id=\"pricing\">
        <div class=\"container\">
            <header class=\"section-head\">
                <div class=\"section-head__title\">
                    <p class=\"eyebrow\" data-reveal>Стоимость</p>
                    <h2 data-reveal style=\"--d: .05s\">Прозрачно, <em>без сюрпризов.</em></h2>
                </div>
                <p class=\"section-head__intro\" data-reveal style=\"--d: .1s\">Цены действуют с января 2026 года. Пробный урок — бесплатно.</p>
            </header>

            <div class=\"pricing-grid\">
                <div class=\"pricing-list\" data-reveal>
                    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 72), "pricing", [], "any", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 73
            yield "                    <div class=\"pricing-row";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "featured", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " is-featured";
            }
            yield "\">
                        <div class=\"pricing-row__name\">
                            <strong>";
            // line 75
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 75), "html", null, true);
            yield "</strong>
                            <span>";
            // line 76
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "detail", [], "any", false, false, false, 76), "html", null, true);
            yield "</span>
                        </div>
                        <span class=\"pricing-row__price\">";
            // line 78
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, false, 78), "html", null, true);
            yield "</span>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 81
        yield "                    <p class=\"pricing-note\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 81), "pricing_note", [], "any", false, false, false, 81), "html", null, true);
        yield "</p>
                </div>

                <aside class=\"pricing-aside\" data-reveal style=\"--d: .1s\">
                    <p class=\"pricing-aside__kicker\">Как проходит оплата</p>
                    <ul class=\"tick-list tick-list--plain\">
                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 87), "payment", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 88
            yield "                        <li>
                            ";
            // line 89
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(89))->call("icon", ["check", "icon icon--sm"], $context, 89, $this->source);
            yield "
                            <span>";
            // line 90
            yield (string) $this->escaper->escape($context["item"], "html", null, true);
            yield "</span>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 93
        yield "                    </ul>
                    <div class=\"pricing-aside__card\">
                        <span class=\"availability availability--dark\"><span class=\"availability__dot\" aria-hidden=\"true\"></span>";
        // line 95
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 95), "availability", [], "any", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 95), "availability", [], "any", false, false, false, 95), "Свободно 2 места на подготовку к ЕГЭ 2027")) : ("Свободно 2 места на подготовку к ЕГЭ 2027")), "html", null, true);
        yield "</span>
                        <p>Не уверены, какой формат подойдёт? Начните с разговора — это ни к чему не обязывает.</p>
                        <a class=\"text-link\" href=\"";
        // line 97
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/contact\">
                            <span>Записаться на знакомство</span>
                            ";
        // line 99
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(99))->call("icon", ["arrow-right", "icon icon--sm"], $context, 99, $this->source);
        yield "
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    ";
        // line 107
        yield from $this->load("partials/cta-band.html.twig", 107)->unwrap()->yield($context);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "services.html.twig";
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
        return array (  282 => 107,  271 => 99,  266 => 97,  261 => 95,  257 => 93,  247 => 90,  243 => 89,  240 => 88,  236 => 87,  226 => 81,  216 => 78,  211 => 76,  207 => 75,  199 => 73,  195 => 72,  177 => 56,  164 => 50,  159 => 48,  153 => 45,  146 => 41,  139 => 37,  130 => 30,  120 => 27,  116 => 26,  113 => 25,  109 => 24,  104 => 22,  95 => 16,  91 => 15,  86 => 13,  80 => 11,  76 => 10,  70 => 6,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/icons.html.twig\x27 as ui %}

{% block content %}
    {% include \x27partials/page-hero.html.twig\x27 %}

    <section class=\"section section--programs\">
        <div class=\"container\">
            <div class=\"programs\">
                {% for program in page.header.programs %}
                <article class=\"program\" id=\"{{ program.anchor }}\" data-reveal>
                    <div class=\"program__head\">
                        <span class=\"program__number\">{{ program.number }}</span>
                        <div class=\"program__title\">
                            <p class=\"eyebrow\">{{ program.kicker }}</p>
                            <h2>{{ program.title }}</h2>
                        </div>
                    </div>

                    <div class=\"program__body\">
                        <div class=\"program__main\">
                            <p class=\"program__lead\">{{ program.lead }}</p>
                            <ul class=\"tick-list\">
                                {% for bullet in program.bullets %}
                                <li>
                                    {{ ui.icon(\x27check\x27, \x27icon icon--sm\x27) }}
                                    <span>{{ bullet.text|default(bullet) }}</span>
                                </li>
                                {% endfor %}
                            </ul>
                        </div>

                        <aside class=\"program__aside\">
                            <dl class=\"program__facts\">
                                <div>
                                    <dt>Формат</dt>
                                    <dd>{{ program.format }}</dd>
                                </div>
                                <div>
                                    <dt>Уровень</dt>
                                    <dd>{{ program.level }}</dd>
                                </div>
                                <div>
                                    <dt>Стоимость</dt>
                                    <dd>{{ program.price }}</dd>
                                </div>
                            </dl>
                            <a class=\"btn btn--ghost btn--full\" href=\"{{ base_url_relative }}/contact\">
                                <span>Обсудить программу</span>
                                {{ ui.icon(\x27arrow-up-right\x27, \x27icon icon--sm\x27) }}
                            </a>
                        </aside>
                    </div>
                </article>
                {% endfor %}
            </div>
        </div>
    </section>

    <section class=\"section section--pricing\" id=\"pricing\">
        <div class=\"container\">
            <header class=\"section-head\">
                <div class=\"section-head__title\">
                    <p class=\"eyebrow\" data-reveal>Стоимость</p>
                    <h2 data-reveal style=\"--d: .05s\">Прозрачно, <em>без сюрпризов.</em></h2>
                </div>
                <p class=\"section-head__intro\" data-reveal style=\"--d: .1s\">Цены действуют с января 2026 года. Пробный урок — бесплатно.</p>
            </header>

            <div class=\"pricing-grid\">
                <div class=\"pricing-list\" data-reveal>
                    {% for row in page.header.pricing %}
                    <div class=\"pricing-row{% if row.featured %} is-featured{% endif %}\">
                        <div class=\"pricing-row__name\">
                            <strong>{{ row.name }}</strong>
                            <span>{{ row.detail }}</span>
                        </div>
                        <span class=\"pricing-row__price\">{{ row.price }}</span>
                    </div>
                    {% endfor %}
                    <p class=\"pricing-note\">{{ page.header.pricing_note }}</p>
                </div>

                <aside class=\"pricing-aside\" data-reveal style=\"--d: .1s\">
                    <p class=\"pricing-aside__kicker\">Как проходит оплата</p>
                    <ul class=\"tick-list tick-list--plain\">
                        {% for item in page.header.payment %}
                        <li>
                            {{ ui.icon(\x27check\x27, \x27icon icon--sm\x27) }}
                            <span>{{ item }}</span>
                        </li>
                        {% endfor %}
                    </ul>
                    <div class=\"pricing-aside__card\">
                        <span class=\"availability availability--dark\"><span class=\"availability__dot\" aria-hidden=\"true\"></span>{{ page.header.availability|default(\x27Свободно 2 места на подготовку к ЕГЭ 2027\x27) }}</span>
                        <p>Не уверены, какой формат подойдёт? Начните с разговора — это ни к чему не обязывает.</p>
                        <a class=\"text-link\" href=\"{{ base_url_relative }}/contact\">
                            <span>Записаться на знакомство</span>
                            {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    {% include \x27partials/cta-band.html.twig\x27 %}
{% endblock %}
", "services.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\services.html.twig");
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
