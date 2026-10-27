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

/* exams.html.twig */
class __TwigTemplate_643134ab9771487d2d7401d3d077f658_sourced extends Template
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
    <section class=\"section section--exams\">
        <div class=\"container\">
            <div class=\"exam-grid\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 10), "exams", [], "any", false, false, false, 10));
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
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 11
            yield "                <article class=\"exam-card\" data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 11) * 0.06), "html", null, true);
            yield "s\">
                    <div class=\"exam-card__top\">
                        <span class=\"exam-card__badge\">";
            // line 13
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exam"], "badge", [], "any", false, false, false, 13), "html", null, true);
            yield "</span>
                        <span class=\"exam-card__target\">";
            // line 14
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exam"], "target", [], "any", false, false, false, 14), "html", null, true);
            yield "</span>
                    </div>
                    <h2>";
            // line 16
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exam"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "</h2>
                    <p class=\"exam-card__subtitle\">";
            // line 17
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exam"], "subtitle", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                    <dl class=\"exam-card__facts\">
                        <div>
                            <dt>Формат</dt>
                            <dd>";
            // line 21
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exam"], "format", [], "any", false, false, false, 21), "html", null, true);
            yield "</dd>
                        </div>
                        <div>
                            <dt>Сроки</dt>
                            <dd>";
            // line 25
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exam"], "duration", [], "any", false, false, false, 25), "html", null, true);
            yield "</dd>
                        </div>
                    </dl>
                    <ul class=\"tick-list\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["exam"], "bullets", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["bullet"]) {
                // line 30
                yield "                        <li>
                            ";
                // line 31
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(31))->call("icon", ["check", "icon icon--sm"], $context, 31, $this->source);
                yield "
                            <span>";
                // line 32
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["bullet"], "text", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["bullet"], "text", [], "any", false, false, false, 32), $context["bullet"])) : ($context["bullet"])), "html", null, true);
                yield "</span>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bullet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 35
            yield "                    </ul>
                </article>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 38
        yield "
                <article class=\"exam-card exam-card--aside\" data-reveal>
                    <div>
                        <p class=\"eyebrow eyebrow--light\">Не знаете, что выбрать?</p>
                        <h2>Начнём с диагностики.</h2>
                        <p>Определим уровень, обсудим цель и сроки. Я скажу, какой экзамен реалистичен и что нужно сделать в первую очередь.</p>
                    </div>
                    <a class=\"btn btn--ghost btn--ghost-light\" href=\"";
        // line 45
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/contact\">
                        <span>Обсудить экзамен</span>
                        ";
        // line 47
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(47))->call("icon", ["arrow-up-right", "icon icon--sm"], $context, 47, $this->source);
        yield "
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class=\"section section--plans\">
        <div class=\"container\">
            <header class=\"section-head\">
                <div class=\"section-head__title\">
                    <p class=\"eyebrow\" data-reveal>Маршрут</p>
                    <h2 data-reveal style=\"--d: .05s\">План, который <em>видно на горизонте.</em></h2>
                </div>
                <p class=\"section-head__intro\" data-reveal style=\"--d: .1s\">Два примера: год до ЕГЭ и три месяца до IELTS. Точный график собираем после диагностики.</p>
            </header>

            <div class=\"plan-grid\">
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 65), "plans", [], "any", false, false, false, 65));
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
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 66
            yield "                <article class=\"plan\" data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 66) * 0.08), "html", null, true);
            yield "s\">
                    <header class=\"plan__head\">
                        <p class=\"plan__kicker\">";
            // line 68
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "kicker", [], "any", false, false, false, 68), "html", null, true);
            yield "</p>
                        <h3>";
            // line 69
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "title", [], "any", false, false, false, 69), "html", null, true);
            yield "</h3>
                        <p class=\"plan__note\">";
            // line 70
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "note", [], "any", false, false, false, 70), "html", null, true);
            yield "</p>
                    </header>
                    <ol class=\"plan__steps\">
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "steps", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
                // line 74
                yield "                        <li>
                            <span class=\"plan__period\">";
                // line 75
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "period", [], "any", false, false, false, 75), "html", null, true);
                yield "</span>
                            <span class=\"plan__text\">";
                // line 76
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "text", [], "any", false, false, false, 76), "html", null, true);
                yield "</span>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['step'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 79
            yield "                    </ol>
                </article>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 82
        yield "            </div>
        </div>
    </section>

    <section class=\"section section--honesty\">
        <div class=\"container\">
            <div class=\"honesty\" data-reveal>
                <div class=\"honesty__intro\">
                    <p class=\"eyebrow eyebrow--light\">Честно</p>
                    <h2>Чего здесь <em>не будет.</em></h2>
                    <p>Хорошая подготовка — это не магия. Поэтому сразу о том, чего я не обещаю.</p>
                </div>
                <ul class=\"honesty__list\">
                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 95), "not_offered", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 96
            yield "                    <li>
                        ";
            // line 97
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(97))->call("icon", ["close", "icon"], $context, 97, $this->source);
            yield "
                        <span>";
            // line 98
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 98)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 98), $context["item"])) : ($context["item"])), "html", null, true);
            yield "</span>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 101
        yield "                </ul>
            </div>
        </div>
    </section>

    ";
        // line 106
        yield from $this->load("partials/cta-band.html.twig", 106)->unwrap()->yield($context);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "exams.html.twig";
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
        return array (  324 => 106,  317 => 101,  307 => 98,  303 => 97,  300 => 96,  296 => 95,  281 => 82,  264 => 79,  254 => 76,  250 => 75,  247 => 74,  243 => 73,  237 => 70,  233 => 69,  229 => 68,  223 => 66,  206 => 65,  185 => 47,  180 => 45,  171 => 38,  154 => 35,  144 => 32,  140 => 31,  137 => 30,  133 => 29,  126 => 25,  119 => 21,  112 => 17,  108 => 16,  103 => 14,  99 => 13,  93 => 11,  76 => 10,  70 => 6,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/icons.html.twig\x27 as ui %}

{% block content %}
    {% include \x27partials/page-hero.html.twig\x27 %}

    <section class=\"section section--exams\">
        <div class=\"container\">
            <div class=\"exam-grid\">
                {% for exam in page.header.exams %}
                <article class=\"exam-card\" data-reveal style=\"--d: {{ loop.index0 * 0.06 }}s\">
                    <div class=\"exam-card__top\">
                        <span class=\"exam-card__badge\">{{ exam.badge }}</span>
                        <span class=\"exam-card__target\">{{ exam.target }}</span>
                    </div>
                    <h2>{{ exam.name }}</h2>
                    <p class=\"exam-card__subtitle\">{{ exam.subtitle }}</p>
                    <dl class=\"exam-card__facts\">
                        <div>
                            <dt>Формат</dt>
                            <dd>{{ exam.format }}</dd>
                        </div>
                        <div>
                            <dt>Сроки</dt>
                            <dd>{{ exam.duration }}</dd>
                        </div>
                    </dl>
                    <ul class=\"tick-list\">
                        {% for bullet in exam.bullets %}
                        <li>
                            {{ ui.icon(\x27check\x27, \x27icon icon--sm\x27) }}
                            <span>{{ bullet.text|default(bullet) }}</span>
                        </li>
                        {% endfor %}
                    </ul>
                </article>
                {% endfor %}

                <article class=\"exam-card exam-card--aside\" data-reveal>
                    <div>
                        <p class=\"eyebrow eyebrow--light\">Не знаете, что выбрать?</p>
                        <h2>Начнём с диагностики.</h2>
                        <p>Определим уровень, обсудим цель и сроки. Я скажу, какой экзамен реалистичен и что нужно сделать в первую очередь.</p>
                    </div>
                    <a class=\"btn btn--ghost btn--ghost-light\" href=\"{{ base_url_relative }}/contact\">
                        <span>Обсудить экзамен</span>
                        {{ ui.icon(\x27arrow-up-right\x27, \x27icon icon--sm\x27) }}
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class=\"section section--plans\">
        <div class=\"container\">
            <header class=\"section-head\">
                <div class=\"section-head__title\">
                    <p class=\"eyebrow\" data-reveal>Маршрут</p>
                    <h2 data-reveal style=\"--d: .05s\">План, который <em>видно на горизонте.</em></h2>
                </div>
                <p class=\"section-head__intro\" data-reveal style=\"--d: .1s\">Два примера: год до ЕГЭ и три месяца до IELTS. Точный график собираем после диагностики.</p>
            </header>

            <div class=\"plan-grid\">
                {% for plan in page.header.plans %}
                <article class=\"plan\" data-reveal style=\"--d: {{ loop.index0 * 0.08 }}s\">
                    <header class=\"plan__head\">
                        <p class=\"plan__kicker\">{{ plan.kicker }}</p>
                        <h3>{{ plan.title }}</h3>
                        <p class=\"plan__note\">{{ plan.note }}</p>
                    </header>
                    <ol class=\"plan__steps\">
                        {% for step in plan.steps %}
                        <li>
                            <span class=\"plan__period\">{{ step.period }}</span>
                            <span class=\"plan__text\">{{ step.text }}</span>
                        </li>
                        {% endfor %}
                    </ol>
                </article>
                {% endfor %}
            </div>
        </div>
    </section>

    <section class=\"section section--honesty\">
        <div class=\"container\">
            <div class=\"honesty\" data-reveal>
                <div class=\"honesty__intro\">
                    <p class=\"eyebrow eyebrow--light\">Честно</p>
                    <h2>Чего здесь <em>не будет.</em></h2>
                    <p>Хорошая подготовка — это не магия. Поэтому сразу о том, чего я не обещаю.</p>
                </div>
                <ul class=\"honesty__list\">
                    {% for item in page.header.not_offered %}
                    <li>
                        {{ ui.icon(\x27close\x27, \x27icon\x27) }}
                        <span>{{ item.text|default(item) }}</span>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </section>

    {% include \x27partials/cta-band.html.twig\x27 %}
{% endblock %}
", "exams.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\exams.html.twig");
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
