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

/* reviews.html.twig */
class __TwigTemplate_37bd6bbc778c824a2e11964b57903e4f_sourced extends Template
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
    <section class=\"section section--reviews\">
        <div class=\"container\">
            <ul class=\"review-stats\" aria-label=\"Результаты учеников\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 10), "stats", [], "any", false, false, false, 10));
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
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 11
            yield "                <li class=\"review-stat\" data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 11) * 0.06), "html", null, true);
            yield "s\">
                    <span class=\"review-stat__value\"><span data-counter data-value=\"";
            // line 12
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 12), "html", null, true);
            yield "\" data-decimals=\"";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "decimals", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "decimals", [], "any", false, false, false, 12), 0)) : (0)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 12), "html", null, true);
            yield "</span>";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "suffix", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "suffix", [], "any", false, false, false, 12), "")) : ("")), "html", null, true);
            yield "</span>
                    <span class=\"review-stat__label\">";
            // line 13
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, false, 13), "html", null, true);
            yield "</span>
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
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 16
        yield "            </ul>

            <div class=\"case-grid\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 19), "cases", [], "any", false, false, false, 19));
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
        foreach ($context['_seq'] as $context["_key"] => $context["case"]) {
            // line 20
            yield "                <article class=\"case-card\" data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20) * 0.07), "html", null, true);
            yield "s\">
                    <header class=\"case-card__head\">
                        <div>
                            <h2>";
            // line 23
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["case"], "name", [], "any", false, false, false, 23), "html", null, true);
            yield "</h2>
                            <p>";
            // line 24
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["case"], "exam", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>
                        </div>
                        <span class=\"case-card__badge\">";
            // line 26
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["case"], "result", [], "any", false, false, false, 26), "html", null, true);
            yield "</span>
                    </header>

                    <div class=\"case-card__score\" aria-label=\"Результат: ";
            // line 29
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["case"], "before", [], "any", false, false, false, 29), "html", null, true);
            yield " → ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["case"], "after", [], "any", false, false, false, 29), "html", null, true);
            yield "\">
                        <span class=\"case-card__before\">";
            // line 30
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["case"], "before", [], "any", false, false, false, 30), "html", null, true);
            yield "</span>
                        ";
            // line 31
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(31))->call("icon", ["arrow-right", "icon"], $context, 31, $this->source);
            yield "
                        <span class=\"case-card__after\">";
            // line 32
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["case"], "after", [], "any", false, false, false, 32), "html", null, true);
            yield "</span>
                    </div>

                    <p class=\"case-card__text\">";
            // line 35
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["case"], "text", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>

                    <blockquote class=\"case-card__quote\">
                        ";
            // line 38
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(38))->call("icon", ["quote", "quote-mark"], $context, 38, $this->source);
            yield "
                        <p>";
            // line 39
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["case"], "quote", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>
                    </blockquote>
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
        unset($context['_seq'], $context['_key'], $context['case'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 43
        yield "            </div>
        </div>
    </section>

    <section class=\"section section--quotes\">
        <div class=\"container\">
            <header class=\"section-head section-head--compact\">
                <div class=\"section-head__title\">
                    <p class=\"eyebrow\" data-reveal>Ещё голоса</p>
                    <h2 data-reveal style=\"--d: .05s\">Коротко и <em>по делу.</em></h2>
                </div>
                <p class=\"section-head__intro\" data-reveal style=\"--d: .1s\">Отзывы учеников и родителей — без редактуры и обещаний, которых не было.</p>
            </header>

            <div class=\"quote-grid\">
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 58), "quotes", [], "any", false, false, false, 58));
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
            // line 59
            yield "                <figure class=\"quote-card\" data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 59) * 0.04), "html", null, true);
            yield "s\">
                    <blockquote>
                        ";
            // line 61
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(61))->call("icon", ["quote", "quote-mark"], $context, 61, $this->source);
            yield "
                        <p>";
            // line 62
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quote", [], "any", false, false, false, 62), "html", null, true);
            yield "</p>
                    </blockquote>
                    <figcaption>
                        <strong>";
            // line 65
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 65), "html", null, true);
            yield "</strong>
                        <span>";
            // line 66
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
                    </figcaption>
                </figure>
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
        // line 70
        yield "            </div>
        </div>
    </section>

    ";
        // line 74
        yield from $this->load("partials/cta-band.html.twig", 74)->unwrap()->yield($context);
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reviews.html.twig";
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
        return array (  298 => 74,  292 => 70,  273 => 66,  269 => 65,  263 => 62,  259 => 61,  253 => 59,  236 => 58,  219 => 43,  200 => 39,  196 => 38,  190 => 35,  184 => 32,  180 => 31,  176 => 30,  170 => 29,  164 => 26,  159 => 24,  155 => 23,  148 => 20,  131 => 19,  126 => 16,  108 => 13,  98 => 12,  93 => 11,  76 => 10,  70 => 6,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/icons.html.twig\x27 as ui %}

{% block content %}
    {% include \x27partials/page-hero.html.twig\x27 %}

    <section class=\"section section--reviews\">
        <div class=\"container\">
            <ul class=\"review-stats\" aria-label=\"Результаты учеников\">
                {% for stat in page.header.stats %}
                <li class=\"review-stat\" data-reveal style=\"--d: {{ loop.index0 * 0.06 }}s\">
                    <span class=\"review-stat__value\"><span data-counter data-value=\"{{ stat.value }}\" data-decimals=\"{{ stat.decimals|default(0) }}\">{{ stat.value }}</span>{{ stat.suffix|default(\x27\x27) }}</span>
                    <span class=\"review-stat__label\">{{ stat.label }}</span>
                </li>
                {% endfor %}
            </ul>

            <div class=\"case-grid\">
                {% for case in page.header.cases %}
                <article class=\"case-card\" data-reveal style=\"--d: {{ loop.index0 * 0.07 }}s\">
                    <header class=\"case-card__head\">
                        <div>
                            <h2>{{ case.name }}</h2>
                            <p>{{ case.exam }}</p>
                        </div>
                        <span class=\"case-card__badge\">{{ case.result }}</span>
                    </header>

                    <div class=\"case-card__score\" aria-label=\"Результат: {{ case.before }} → {{ case.after }}\">
                        <span class=\"case-card__before\">{{ case.before }}</span>
                        {{ ui.icon(\x27arrow-right\x27, \x27icon\x27) }}
                        <span class=\"case-card__after\">{{ case.after }}</span>
                    </div>

                    <p class=\"case-card__text\">{{ case.text }}</p>

                    <blockquote class=\"case-card__quote\">
                        {{ ui.icon(\x27quote\x27, \x27quote-mark\x27) }}
                        <p>{{ case.quote }}</p>
                    </blockquote>
                </article>
                {% endfor %}
            </div>
        </div>
    </section>

    <section class=\"section section--quotes\">
        <div class=\"container\">
            <header class=\"section-head section-head--compact\">
                <div class=\"section-head__title\">
                    <p class=\"eyebrow\" data-reveal>Ещё голоса</p>
                    <h2 data-reveal style=\"--d: .05s\">Коротко и <em>по делу.</em></h2>
                </div>
                <p class=\"section-head__intro\" data-reveal style=\"--d: .1s\">Отзывы учеников и родителей — без редактуры и обещаний, которых не было.</p>
            </header>

            <div class=\"quote-grid\">
                {% for item in page.header.quotes %}
                <figure class=\"quote-card\" data-reveal style=\"--d: {{ loop.index0 * 0.04 }}s\">
                    <blockquote>
                        {{ ui.icon(\x27quote\x27, \x27quote-mark\x27) }}
                        <p>{{ item.quote }}</p>
                    </blockquote>
                    <figcaption>
                        <strong>{{ item.name }}</strong>
                        <span>{{ item.meta }}</span>
                    </figcaption>
                </figure>
                {% endfor %}
            </div>
        </div>
    </section>

    {% include \x27partials/cta-band.html.twig\x27 %}
{% endblock %}
", "reviews.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\reviews.html.twig");
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
