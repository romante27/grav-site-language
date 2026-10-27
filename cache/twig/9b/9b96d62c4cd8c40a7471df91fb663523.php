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

/* item.html.twig */
class __TwigTemplate_852e70cccb1744c7f286730dae5bb7ca_sourced extends Template
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
        yield "<div class=\"reading-progress\" aria-hidden=\"true\"><span data-reading-progress></span></div>

<article class=\"article\">
    <header class=\"article-hero\">
        <div class=\"container\">
            <nav class=\"crumbs\" aria-label=\"Хлебные крошки\">
                <ol>
                    <li><a href=\"";
        // line 12
        yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
        yield "\">Главная</a></li>
                    <li><a href=\"";
        // line 13
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 13), "menu", [], "any", false, false, false, 13), "html", null, true);
        yield "</a></li>
                    <li aria-current=\"page\">";
        // line 14
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "</li>
                </ol>
            </nav>

            <div class=\"article-hero__inner\">
                <div class=\"post-meta\">
                    <time datetime=\"";
        // line 20
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape($this->env->getFilter('ru_date')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 20)), "html", null, true);
        yield "</time>
                    <span>";
        // line 21
        yield (string) $this->escaper->escape($this->env->getFilter('reading_time')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 21)), "html", null, true);
        yield "</span>
                    ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 22), "taxonomy", [], "any", false, false, false, 22), "tag", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                    <span>";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 23), "taxonomy", [], "any", false, false, false, 23), "tag", [], "any", false, false, false, 23)), "html", null, true);
            yield "</span>
                    ";
        }
        // line 25
        yield "                </div>
                <h1>";
        // line 26
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
        yield "</h1>
                ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 27), "lead", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                <p class=\"lead article-hero__lead\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "lead", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                ";
        }
        // line 30
        yield "                <div class=\"article-hero__foot\">
                    <span class=\"article-hero__author\">Анна Белова</span>
                    ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 32), "taxonomy", [], "any", false, false, false, 32), "tag", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                    <ul class=\"tag-list\">
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 34), "taxonomy", [], "any", false, false, false, 34), "tag", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 35
                yield "                        <li>";
                yield (string) $this->escaper->escape($context["tag"], "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 37
            yield "                    </ul>
                    ";
        }
        // line 39
        yield "                </div>
            </div>
        </div>
    </header>

    <div class=\"container article-layout\">
        <div class=\"article-body prose\">
            ";
        // line 46
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 46), "takeaways", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "            <aside class=\"takeaways\" data-reveal>
                <p class=\"takeaways__label\">Коротко</p>
                <ul>
                    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 50), "takeaways", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 51
                yield "                    <li>";
                yield (string) $this->escaper->escape($context["item"], "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 53
            yield "                </ul>
            </aside>
            ";
        }
        // line 56
        yield "
            ";
        // line 57
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 57);
        yield "
        </div>

        <aside class=\"article-aside\">
            <div class=\"author-card\" data-reveal>
                <span class=\"author-card__mark\" aria-hidden=\"true\">AB</span>
                <div class=\"author-card__body\">
                    <strong>Анна Белова</strong>
                    <p>Преподаватель английского, CELTA. Помогаю говорить уверенно и сдавать экзамены без паники.</p>
                    <a class=\"text-link text-link--small\" href=\"";
        // line 66
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/about\">
                        <span>Об авторе</span>
                        ";
        // line 68
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(68))->call("icon", ["arrow-right", "icon icon--sm"], $context, 68, $this->source);
        yield "
                    </a>
                </div>
            </div>

            <div class=\"article-aside__note\" data-reveal style=\"--d: .08s\">
                <p class=\"aside-card__label\">Начать</p>
                <p>Хотите обсудить подготовку к экзамену или просто разобраться, с чего начать?</p>
                <a class=\"text-link text-link--small\" href=\"";
        // line 76
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/contact\">
                    <span>Пробный урок</span>
                    ";
        // line 78
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(78))->call("icon", ["arrow-right", "icon icon--sm"], $context, 78, $this->source);
        yield "
                </a>
            </div>
        </aside>
    </div>

    <div class=\"container\">
        ";
        // line 85
        $context["related"] = [];
        // line 86
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 86), "collection", [], "method", false, false, false, 86), function ($__post__) use ($context, $macros) { $context["post"] = $__post__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, true, 86), 86, $this->source) != $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, true, 86), 86, $this->source)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 87
            yield "            ";
            $context["related"] = Twig\Extension\CoreExtension::merge(($context["related"] ?? null), [$context["post"]]);
            // line 88
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 89
        yield "
        ";
        // line 90
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["related"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "        <section class=\"related\" aria-labelledby=\"related-title\">
            <header class=\"related__head\">
                <p class=\"eyebrow\">Ещё по теме</p>
                <h2 id=\"related-title\">Читать <em>дальше.</em></h2>
            </header>
            <div class=\"related__grid\">
                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["related"] ?? null), 0, 2));
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
                // line 98
                yield "                <article class=\"related-card\" data-reveal style=\"--d: ";
                yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 98) * 0.06), "html", null, true);
                yield "s\">
                    <time datetime=\"";
                // line 99
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 99), "Y-m-d"), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape($this->env->getFilter('ru_date')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 99)), "html", null, true);
                yield "</time>
                    <h3><a href=\"";
                // line 100
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 100), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 100), "html", null, true);
                yield "</a></h3>
                    <p>";
                // line 101
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, true, false, 101), "lead", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "header", [], "any", false, false, false, 101), "lead", [], "any", false, false, false, 101), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [150], "method", false, false, false, 101))))) : (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [150], "method", false, false, false, 101))))), "html", null, true);
                yield "</p>
                    <a class=\"text-link text-link--small\" href=\"";
                // line 102
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 102), "html", null, true);
                yield "\">
                        <span>Читать</span>
                        ";
                // line 104
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(104))->call("icon", ["arrow-right", "icon icon--sm"], $context, 104, $this->source);
                yield "
                    </a>
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
            // line 108
            yield "            </div>
        </section>
        ";
        }
        // line 111
        yield "    </div>
</article>

";
        // line 114
        yield from $this->load("partials/cta-band.html.twig", 114)->unwrap()->yield($context);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "item.html.twig";
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
        return array (  338 => 114,  333 => 111,  328 => 108,  309 => 104,  304 => 102,  300 => 101,  294 => 100,  288 => 99,  283 => 98,  266 => 97,  258 => 91,  256 => 90,  253 => 89,  246 => 88,  243 => 87,  238 => 86,  236 => 85,  226 => 78,  221 => 76,  210 => 68,  205 => 66,  193 => 57,  190 => 56,  185 => 53,  175 => 51,  171 => 50,  166 => 47,  164 => 46,  155 => 39,  151 => 37,  141 => 35,  137 => 34,  134 => 33,  132 => 32,  128 => 30,  122 => 28,  120 => 27,  116 => 26,  113 => 25,  107 => 23,  105 => 22,  101 => 21,  95 => 20,  86 => 14,  80 => 13,  76 => 12,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/icons.html.twig\x27 as ui %}

{% block content %}
<div class=\"reading-progress\" aria-hidden=\"true\"><span data-reading-progress></span></div>

<article class=\"article\">
    <header class=\"article-hero\">
        <div class=\"container\">
            <nav class=\"crumbs\" aria-label=\"Хлебные крошки\">
                <ol>
                    <li><a href=\"{{ base_url_relative ?: \x27/\x27 }}\">Главная</a></li>
                    <li><a href=\"{{ page.parent.url }}\">{{ page.parent.menu }}</a></li>
                    <li aria-current=\"page\">{{ page.title }}</li>
                </ol>
            </nav>

            <div class=\"article-hero__inner\">
                <div class=\"post-meta\">
                    <time datetime=\"{{ page.date|date(\x27Y-m-d\x27) }}\">{{ page.date|ru_date }}</time>
                    <span>{{ page.content|reading_time }}</span>
                    {% if page.header.taxonomy.tag %}
                    <span>{{ page.header.taxonomy.tag|first }}</span>
                    {% endif %}
                </div>
                <h1>{{ page.title }}</h1>
                {% if page.header.lead %}
                <p class=\"lead article-hero__lead\">{{ page.header.lead }}</p>
                {% endif %}
                <div class=\"article-hero__foot\">
                    <span class=\"article-hero__author\">Анна Белова</span>
                    {% if page.header.taxonomy.tag %}
                    <ul class=\"tag-list\">
                        {% for tag in page.header.taxonomy.tag %}
                        <li>{{ tag }}</li>
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>
            </div>
        </div>
    </header>

    <div class=\"container article-layout\">
        <div class=\"article-body prose\">
            {% if page.header.takeaways %}
            <aside class=\"takeaways\" data-reveal>
                <p class=\"takeaways__label\">Коротко</p>
                <ul>
                    {% for item in page.header.takeaways %}
                    <li>{{ item }}</li>
                    {% endfor %}
                </ul>
            </aside>
            {% endif %}

            {{ page.content|raw }}
        </div>

        <aside class=\"article-aside\">
            <div class=\"author-card\" data-reveal>
                <span class=\"author-card__mark\" aria-hidden=\"true\">AB</span>
                <div class=\"author-card__body\">
                    <strong>Анна Белова</strong>
                    <p>Преподаватель английского, CELTA. Помогаю говорить уверенно и сдавать экзамены без паники.</p>
                    <a class=\"text-link text-link--small\" href=\"{{ base_url_relative }}/about\">
                        <span>Об авторе</span>
                        {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                    </a>
                </div>
            </div>

            <div class=\"article-aside__note\" data-reveal style=\"--d: .08s\">
                <p class=\"aside-card__label\">Начать</p>
                <p>Хотите обсудить подготовку к экзамену или просто разобраться, с чего начать?</p>
                <a class=\"text-link text-link--small\" href=\"{{ base_url_relative }}/contact\">
                    <span>Пробный урок</span>
                    {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                </a>
            </div>
        </aside>
    </div>

    <div class=\"container\">
        {% set related = [] %}
        {% for post in (page.parent.collection())|filter(post => post.id != page.id) %}
            {% set related = related|merge([post]) %}
        {% endfor %}

        {% if related|length %}
        <section class=\"related\" aria-labelledby=\"related-title\">
            <header class=\"related__head\">
                <p class=\"eyebrow\">Ещё по теме</p>
                <h2 id=\"related-title\">Читать <em>дальше.</em></h2>
            </header>
            <div class=\"related__grid\">
                {% for post in related|slice(0, 2) %}
                <article class=\"related-card\" data-reveal style=\"--d: {{ loop.index0 * 0.06 }}s\">
                    <time datetime=\"{{ post.date|date(\x27Y-m-d\x27) }}\">{{ post.date|ru_date }}</time>
                    <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>
                    <p>{{ post.header.lead|default(post.summary(150)|striptags|trim) }}</p>
                    <a class=\"text-link text-link--small\" href=\"{{ post.url }}\">
                        <span>Читать</span>
                        {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                    </a>
                </article>
                {% endfor %}
            </div>
        </section>
        {% endif %}
    </div>
</article>

{% include \x27partials/cta-band.html.twig\x27 %}
{% endblock %}
", "item.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\item.html.twig");
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
