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

/* blog.html.twig */
class __TwigTemplate_ae3b962fc890ca388b105e66c3e64bed_sourced extends Template
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
    ";
        // line 7
        $context["posts"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "method", false, false, false, 7);
        // line 8
        yield "    <section class=\"section section--blog\">
        <div class=\"container\">
            <div class=\"blog-layout\">
                <div class=\"blog-main\">
                    ";
        // line 12
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["posts"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                    ";
            $context["featured"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["posts"] ?? null));
            // line 14
            yield "                    <article class=\"post-featured\" data-reveal>
                        <a class=\"post-featured__cover\" href=\"";
            // line 15
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "url", [], "any", false, false, false, 15), "html", null, true);
            yield "\" aria-hidden=\"true\" tabindex=\"-1\">
                            <span class=\"post-featured__issue\">Notes · 01</span>
                            <span class=\"post-featured__letter\">Aa</span>
                            <span class=\"post-featured__cover-bottom\">English,<br>carefully.</span>
                        </a>
                        <div class=\"post-featured__body\">
                            <div class=\"post-meta\">
                                <time datetime=\"";
            // line 22
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "date", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape($this->env->getFilter('ru_date')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "date", [], "any", false, false, false, 22)), "html", null, true);
            yield "</time>
                                <span>";
            // line 23
            yield (string) $this->escaper->escape($this->env->getFilter('reading_time')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "content", [], "any", false, false, false, 23)), "html", null, true);
            yield "</span>
                                ";
            // line 24
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "header", [], "any", false, false, false, 24), "taxonomy", [], "any", false, false, false, 24), "tag", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "                                <span>";
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "header", [], "any", false, false, false, 25), "taxonomy", [], "any", false, false, false, 25), "tag", [], "any", false, false, false, 25)), "html", null, true);
                yield "</span>
                                ";
            }
            // line 27
            yield "                            </div>
                            <h2><a href=\"";
            // line 28
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "url", [], "any", false, false, false, 28), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
            yield "</a></h2>
                            <p class=\"post-featured__summary\">";
            // line 29
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "header", [], "any", false, true, false, 29), "lead", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "header", [], "any", false, false, false, 29), "lead", [], "any", false, false, false, 29), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "summary", [230], "method", false, false, false, 29))))) : (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "summary", [230], "method", false, false, false, 29))))), "html", null, true);
            yield "</p>
                            <a class=\"text-link\" href=\"";
            // line 30
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["featured"] ?? null), "url", [], "any", false, false, false, 30), "html", null, true);
            yield "\">
                                <span>Читать статью</span>
                                ";
            // line 32
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(32))->call("icon", ["arrow-right", "icon icon--sm"], $context, 32, $this->source);
            yield "
                            </a>
                        </div>
                    </article>

                    <div class=\"post-list\">
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["posts"] ?? null), 1));
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 39
                yield "                        <article class=\"post-row\" data-reveal style=\"--d: ";
                yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39) * 0.06), "html", null, true);
                yield "s\">
                            <div class=\"post-row__side\">
                                <span class=\"post-row__number\">0";
                // line 41
                yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41) + 1), "html", null, true);
                yield "</span>
                                <time datetime=\"";
                // line 42
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape($this->env->getFilter('ru_date')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 42)), "html", null, true);
                yield "</time>
                            </div>
                            <div class=\"post-row__body\">
                                <div class=\"post-meta\">
                                    <span>";
                // line 46
                yield (string) $this->escaper->escape($this->env->getFilter('reading_time')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 46)), "html", null, true);
                yield "</span>
                                    ";
                // line 47
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, false, false, 47), "taxonomy", [], "any", false, false, false, 47), "tag", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "                                    <span>";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, false, false, 48), "taxonomy", [], "any", false, false, false, 48), "tag", [], "any", false, false, false, 48)), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 50
                yield "                                </div>
                                <h3><a href=\"";
                // line 51
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 51), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 51), "html", null, true);
                yield "</a></h3>
                                <p>";
                // line 52
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, true, false, 52), "lead", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, false, false, 52), "lead", [], "any", false, false, false, 52), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [190], "method", false, false, false, 52))))) : (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [190], "method", false, false, false, 52))))), "html", null, true);
                yield "</p>
                                <a class=\"text-link text-link--small\" href=\"";
                // line 53
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 53), "html", null, true);
                yield "\">
                                    <span>Читать</span>
                                    ";
                // line 55
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(55))->call("icon", ["arrow-right", "icon icon--sm"], $context, 55, $this->source);
                yield "
                                </a>
                            </div>
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
            unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 60
            yield "                    </div>
                    ";
        }
        // line 62
        yield "                </div>

                <aside class=\"blog-aside\">
                    <div class=\"aside-card\" data-reveal>
                        <p class=\"aside-card__label\">О чём пишу</p>
                        <ul class=\"topic-list\">
                            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 68), "topics", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 69
            yield "                            <li>";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["topic"], "text", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["topic"], "text", [], "any", false, false, false, 69), $context["topic"])) : ($context["topic"])), "html", null, true);
            yield "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['topic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 71
        yield "                        </ul>
                    </div>

                    <div class=\"aside-card aside-card--note\" data-reveal style=\"--d: .08s\">
                        <span class=\"aside-card__monogram\" aria-hidden=\"true\">AB</span>
                        <p class=\"aside-card__quote\">«Язык начинается с любопытства, а не с таблицы неправильных глаголов».</p>
                        <p class=\"aside-card__sign\">Анна Белова</p>
                    </div>

                    <div class=\"aside-card aside-card--cta\" data-reveal style=\"--d: .12s\">
                        <p class=\"aside-card__label\">Нужен план?</p>
                        <p>Разберём вашу цель и составим маршрут на первом уроке.</p>
                        <a class=\"text-link text-link--small\" href=\"";
        // line 83
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/contact\">
                            <span>Записаться</span>
                            ";
        // line 85
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(85))->call("icon", ["arrow-right", "icon icon--sm"], $context, 85, $this->source);
        yield "
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    ";
        // line 93
        yield from $this->load("partials/cta-band.html.twig", 93)->unwrap()->yield($context);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blog.html.twig";
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
        return array (  286 => 93,  275 => 85,  270 => 83,  256 => 71,  246 => 69,  242 => 68,  234 => 62,  230 => 60,  210 => 55,  205 => 53,  201 => 52,  195 => 51,  192 => 50,  186 => 48,  184 => 47,  180 => 46,  171 => 42,  167 => 41,  161 => 39,  144 => 38,  135 => 32,  130 => 30,  126 => 29,  120 => 28,  117 => 27,  111 => 25,  109 => 24,  105 => 23,  99 => 22,  89 => 15,  86 => 14,  83 => 13,  81 => 12,  75 => 8,  73 => 7,  70 => 6,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/icons.html.twig\x27 as ui %}

{% block content %}
    {% include \x27partials/page-hero.html.twig\x27 %}

    {% set posts = page.collection() %}
    <section class=\"section section--blog\">
        <div class=\"container\">
            <div class=\"blog-layout\">
                <div class=\"blog-main\">
                    {% if posts|length %}
                    {% set featured = posts|first %}
                    <article class=\"post-featured\" data-reveal>
                        <a class=\"post-featured__cover\" href=\"{{ featured.url }}\" aria-hidden=\"true\" tabindex=\"-1\">
                            <span class=\"post-featured__issue\">Notes · 01</span>
                            <span class=\"post-featured__letter\">Aa</span>
                            <span class=\"post-featured__cover-bottom\">English,<br>carefully.</span>
                        </a>
                        <div class=\"post-featured__body\">
                            <div class=\"post-meta\">
                                <time datetime=\"{{ featured.date|date(\x27Y-m-d\x27) }}\">{{ featured.date|ru_date }}</time>
                                <span>{{ featured.content|reading_time }}</span>
                                {% if featured.header.taxonomy.tag %}
                                <span>{{ featured.header.taxonomy.tag|first }}</span>
                                {% endif %}
                            </div>
                            <h2><a href=\"{{ featured.url }}\">{{ featured.title }}</a></h2>
                            <p class=\"post-featured__summary\">{{ featured.header.lead|default(featured.summary(230)|striptags|trim) }}</p>
                            <a class=\"text-link\" href=\"{{ featured.url }}\">
                                <span>Читать статью</span>
                                {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                            </a>
                        </div>
                    </article>

                    <div class=\"post-list\">
                        {% for post in posts|slice(1) %}
                        <article class=\"post-row\" data-reveal style=\"--d: {{ loop.index0 * 0.06 }}s\">
                            <div class=\"post-row__side\">
                                <span class=\"post-row__number\">0{{ loop.index + 1 }}</span>
                                <time datetime=\"{{ post.date|date(\x27Y-m-d\x27) }}\">{{ post.date|ru_date }}</time>
                            </div>
                            <div class=\"post-row__body\">
                                <div class=\"post-meta\">
                                    <span>{{ post.content|reading_time }}</span>
                                    {% if post.header.taxonomy.tag %}
                                    <span>{{ post.header.taxonomy.tag|first }}</span>
                                    {% endif %}
                                </div>
                                <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>
                                <p>{{ post.header.lead|default(post.summary(190)|striptags|trim) }}</p>
                                <a class=\"text-link text-link--small\" href=\"{{ post.url }}\">
                                    <span>Читать</span>
                                    {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                                </a>
                            </div>
                        </article>
                        {% endfor %}
                    </div>
                    {% endif %}
                </div>

                <aside class=\"blog-aside\">
                    <div class=\"aside-card\" data-reveal>
                        <p class=\"aside-card__label\">О чём пишу</p>
                        <ul class=\"topic-list\">
                            {% for topic in page.header.topics %}
                            <li>{{ topic.text|default(topic) }}</li>
                            {% endfor %}
                        </ul>
                    </div>

                    <div class=\"aside-card aside-card--note\" data-reveal style=\"--d: .08s\">
                        <span class=\"aside-card__monogram\" aria-hidden=\"true\">AB</span>
                        <p class=\"aside-card__quote\">«Язык начинается с любопытства, а не с таблицы неправильных глаголов».</p>
                        <p class=\"aside-card__sign\">Анна Белова</p>
                    </div>

                    <div class=\"aside-card aside-card--cta\" data-reveal style=\"--d: .12s\">
                        <p class=\"aside-card__label\">Нужен план?</p>
                        <p>Разберём вашу цель и составим маршрут на первом уроке.</p>
                        <a class=\"text-link text-link--small\" href=\"{{ base_url_relative }}/contact\">
                            <span>Записаться</span>
                            {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    {% include \x27partials/cta-band.html.twig\x27 %}
{% endblock %}
", "blog.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\blog.html.twig");
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
