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

/* about.html.twig */
class __TwigTemplate_b8970e141e8d55cbcf3f7cebf33e80c2_sourced extends Template
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
    <section class=\"section section--about-story\">
        <div class=\"container\">
            <div class=\"story-grid\">
                <div class=\"story-text\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 11), "story", [], "any", false, false, false, 11));
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
        foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
            // line 12
            yield "                    <p";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " class=\"story-text__lead\"";
            }
            yield " data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12) * 0.04), "html", null, true);
            yield "s\">";
            yield (string) $this->escaper->escape($context["paragraph"], "html", null, true);
            yield "</p>
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
        unset($context['_seq'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 14
        yield "                </div>

                <aside class=\"credentials\" data-reveal style=\"--d: .1s\" aria-label=\"Квалификация\">
                    <p class=\"credentials__label\">";
        // line 17
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 17), "credentials_label", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 17), "credentials_label", [], "any", false, false, false, 17), "Коротко о квалификации")) : ("Коротко о квалификации")), "html", null, true);
        yield "</p>
                    <ul>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 19), "credentials", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            yield "                        <li>
                            <span class=\"credentials__title\">";
            // line 21
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>
                            <span class=\"credentials__text\">";
            // line 22
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 22), "html", null, true);
            yield "</span>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 25
        yield "                    </ul>
                    <span class=\"credentials__stamp\" aria-hidden=\"true\">CELTA<br><small>Cambridge</small></span>
                </aside>
            </div>

            ";
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 30), "quote", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "            <blockquote class=\"story-quote\" data-reveal>
                ";
            // line 32
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(32))->call("icon", ["quote", "quote-mark"], $context, 32, $this->source);
            yield "
                <p>";
            // line 33
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 33), "quote", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
            </blockquote>
            ";
        }
        // line 36
        yield "        </div>
    </section>

    ";
        // line 39
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 39), "principles", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "    <section class=\"section section--principles\">
        <div class=\"container\">
            <header class=\"section-head section-head--compact\">
                <div class=\"section-head__title\">
                    <p class=\"eyebrow\" data-reveal>";
            // line 44
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 44), "principles_eyebrow", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 44), "principles_eyebrow", [], "any", false, false, false, 44), "Принципы")) : ("Принципы")), "html", null, true);
            yield "</p>
                    <h2 data-reveal style=\"--d: .05s\">";
            // line 45
            yield (string) ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 45), "principles_heading", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 45), "principles_heading", [], "any", false, false, false, 45), "Три вещи, на которых <em>всё держится.</em>")) : ("Три вещи, на которых <em>всё держится.</em>"));
            yield "</h2>
                </div>
            </header>
            <div class=\"principle-grid\">
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 49), "principles", [], "any", false, false, false, 49));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                yield "                <article class=\"principle\" data-reveal style=\"--d: ";
                yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 50) * 0.07), "html", null, true);
                yield "s\">
                    <span class=\"principle__number\">0";
                // line 51
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 51), "html", null, true);
                yield "</span>
                    <h3>";
                // line 52
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 52), "html", null, true);
                yield "</h3>
                    <p>";
                // line 53
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 53), "html", null, true);
                yield "</p>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 56
            yield "            </div>
        </div>
    </section>
    ";
        }
        // line 60
        yield "
    ";
        // line 61
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 61), "timeline", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "    <section class=\"section section--timeline\">
        <div class=\"container\">
            <div class=\"timeline-layout\">
                <div class=\"timeline-intro\">
                    <p class=\"eyebrow\" data-reveal>";
            // line 66
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 66), "timeline_eyebrow", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 66), "timeline_eyebrow", [], "any", false, false, false, 66), "Хронология")) : ("Хронология")), "html", null, true);
            yield "</p>
                    <h2 data-reveal style=\"--d: .05s\">";
            // line 67
            yield (string) ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 67), "timeline_heading", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 67), "timeline_heading", [], "any", false, false, false, 67), "Как это <em>складывалось.</em>")) : ("Как это <em>складывалось.</em>"));
            yield "</h2>
                    ";
            // line 68
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 68), "timeline_note", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "                    <p class=\"timeline-intro__note\" data-reveal style=\"--d: .1s\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 69), "timeline_note", [], "any", false, false, false, 69), "html", null, true);
                yield "</p>
                    ";
            }
            // line 71
            yield "                </div>
                <ol class=\"timeline\">
                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 73), "timeline", [], "any", false, false, false, 73));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 74
                yield "                    <li class=\"timeline__item\" data-reveal style=\"--d: ";
                yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 74) * 0.05), "html", null, true);
                yield "s\">
                        <span class=\"timeline__year\">";
                // line 75
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "year", [], "any", false, false, false, 75), "html", null, true);
                yield "</span>
                        <p>";
                // line 76
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 76), "html", null, true);
                yield "</p>
                    </li>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 79
            yield "                </ol>
            </div>
        </div>
    </section>
    ";
        }
        // line 84
        yield "
    ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 85), "personal", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "    <section class=\"section section--personal\">
        <div class=\"container\">
            <div class=\"personal-note\" data-reveal>
                <span class=\"personal-note__label\">";
            // line 89
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 89), "personal", [], "any", false, true, false, 89), "label", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 89), "personal", [], "any", false, false, false, 89), "label", [], "any", false, false, false, 89), "Немного личного")) : ("Немного личного")), "html", null, true);
            yield "</span>
                <p class=\"personal-note__text\">";
            // line 90
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 90), "personal", [], "any", false, false, false, 90), "text", [], "any", false, false, false, 90), "html", null, true);
            yield "</p>
                <span class=\"personal-note__sign\" aria-hidden=\"true\">A.</span>
            </div>
        </div>
    </section>
    ";
        }
        // line 96
        yield "
    ";
        // line 97
        yield from $this->load("partials/cta-band.html.twig", 97)->unwrap()->yield($context);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "about.html.twig";
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
        return array (  357 => 97,  354 => 96,  345 => 90,  341 => 89,  336 => 86,  334 => 85,  331 => 84,  324 => 79,  306 => 76,  302 => 75,  297 => 74,  280 => 73,  276 => 71,  270 => 69,  268 => 68,  264 => 67,  260 => 66,  254 => 62,  252 => 61,  249 => 60,  243 => 56,  225 => 53,  221 => 52,  217 => 51,  212 => 50,  195 => 49,  188 => 45,  184 => 44,  178 => 40,  176 => 39,  171 => 36,  165 => 33,  161 => 32,  158 => 31,  156 => 30,  149 => 25,  139 => 22,  135 => 21,  132 => 20,  128 => 19,  123 => 17,  118 => 14,  94 => 12,  77 => 11,  70 => 6,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/icons.html.twig\x27 as ui %}

{% block content %}
    {% include \x27partials/page-hero.html.twig\x27 %}

    <section class=\"section section--about-story\">
        <div class=\"container\">
            <div class=\"story-grid\">
                <div class=\"story-text\">
                    {% for paragraph in page.header.story %}
                    <p{% if loop.first %} class=\"story-text__lead\"{% endif %} data-reveal style=\"--d: {{ loop.index0 * 0.04 }}s\">{{ paragraph }}</p>
                    {% endfor %}
                </div>

                <aside class=\"credentials\" data-reveal style=\"--d: .1s\" aria-label=\"Квалификация\">
                    <p class=\"credentials__label\">{{ page.header.credentials_label|default(\x27Коротко о квалификации\x27) }}</p>
                    <ul>
                        {% for item in page.header.credentials %}
                        <li>
                            <span class=\"credentials__title\">{{ item.title }}</span>
                            <span class=\"credentials__text\">{{ item.text }}</span>
                        </li>
                        {% endfor %}
                    </ul>
                    <span class=\"credentials__stamp\" aria-hidden=\"true\">CELTA<br><small>Cambridge</small></span>
                </aside>
            </div>

            {% if page.header.quote %}
            <blockquote class=\"story-quote\" data-reveal>
                {{ ui.icon(\x27quote\x27, \x27quote-mark\x27) }}
                <p>{{ page.header.quote }}</p>
            </blockquote>
            {% endif %}
        </div>
    </section>

    {% if page.header.principles %}
    <section class=\"section section--principles\">
        <div class=\"container\">
            <header class=\"section-head section-head--compact\">
                <div class=\"section-head__title\">
                    <p class=\"eyebrow\" data-reveal>{{ page.header.principles_eyebrow|default(\x27Принципы\x27) }}</p>
                    <h2 data-reveal style=\"--d: .05s\">{{ page.header.principles_heading|default(\x27Три вещи, на которых <em>всё держится.</em>\x27)|raw }}</h2>
                </div>
            </header>
            <div class=\"principle-grid\">
                {% for item in page.header.principles %}
                <article class=\"principle\" data-reveal style=\"--d: {{ loop.index0 * 0.07 }}s\">
                    <span class=\"principle__number\">0{{ loop.index }}</span>
                    <h3>{{ item.title }}</h3>
                    <p>{{ item.text }}</p>
                </article>
                {% endfor %}
            </div>
        </div>
    </section>
    {% endif %}

    {% if page.header.timeline %}
    <section class=\"section section--timeline\">
        <div class=\"container\">
            <div class=\"timeline-layout\">
                <div class=\"timeline-intro\">
                    <p class=\"eyebrow\" data-reveal>{{ page.header.timeline_eyebrow|default(\x27Хронология\x27) }}</p>
                    <h2 data-reveal style=\"--d: .05s\">{{ page.header.timeline_heading|default(\x27Как это <em>складывалось.</em>\x27)|raw }}</h2>
                    {% if page.header.timeline_note %}
                    <p class=\"timeline-intro__note\" data-reveal style=\"--d: .1s\">{{ page.header.timeline_note }}</p>
                    {% endif %}
                </div>
                <ol class=\"timeline\">
                    {% for item in page.header.timeline %}
                    <li class=\"timeline__item\" data-reveal style=\"--d: {{ loop.index0 * 0.05 }}s\">
                        <span class=\"timeline__year\">{{ item.year }}</span>
                        <p>{{ item.text }}</p>
                    </li>
                    {% endfor %}
                </ol>
            </div>
        </div>
    </section>
    {% endif %}

    {% if page.header.personal %}
    <section class=\"section section--personal\">
        <div class=\"container\">
            <div class=\"personal-note\" data-reveal>
                <span class=\"personal-note__label\">{{ page.header.personal.label|default(\x27Немного личного\x27) }}</span>
                <p class=\"personal-note__text\">{{ page.header.personal.text }}</p>
                <span class=\"personal-note__sign\" aria-hidden=\"true\">A.</span>
            </div>
        </div>
    </section>
    {% endif %}

    {% include \x27partials/cta-band.html.twig\x27 %}
{% endblock %}
", "about.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\about.html.twig");
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
