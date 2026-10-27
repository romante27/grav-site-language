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

/* partials/page-hero.html.twig */
class __TwigTemplate_90a508d4b9bdb3df76d366a1a92dea78_sourced extends Template
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
        $context["eyebrow"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 1), "hero_eyebrow", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 1), "hero_eyebrow", [], "any", false, false, false, 1), "")) : (""));
        // line 2
        $context["heading"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 2), "hero_heading", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "hero_heading", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 2))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 2)));
        // line 3
        $context["lead"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 3), "hero_lead", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3), "hero_lead", [], "any", false, false, false, 3), "")) : (""));
        // line 4
        $context["meta"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 4), "hero_meta", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 4), "hero_meta", [], "any", false, false, false, 4), [])) : ([]));
        // line 5
        $context["compact"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 5), "hero_compact", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 5), "hero_compact", [], "any", false, false, false, 5), false)) : (false));
        // line 6
        yield "
<section class=\"page-hero";
        // line 7
        if ((($tmp = ($context["compact"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " page-hero--compact";
        }
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "hero_stack", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " page-hero--stack";
        }
        yield "\">
    <div class=\"container\">
        <nav class=\"crumbs\" aria-label=\"Хлебные крошки\">
            <ol>
                <li><a href=\"";
        // line 11
        yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
        yield "\">Главная</a></li>
                ";
        // line 12
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 12), "home", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 12), "visible", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 13
            yield "                <li><a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 13), "menu", [], "any", false, false, false, 13), "html", null, true);
            yield "</a></li>
                ";
        }
        // line 15
        yield "                <li aria-current=\"page\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        yield "</li>
            </ol>
        </nav>

        <div class=\"page-hero__grid\">
            <div class=\"page-hero__heading\">
                ";
        // line 21
        if ((($tmp = ($context["eyebrow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow\" data-reveal>";
            yield (string) $this->escaper->escape(($context["eyebrow"] ?? null), "html", null, true);
            yield "</p>";
        }
        // line 22
        yield "                <h1 data-reveal style=\"--d: .05s\">";
        yield (string) ($context["heading"] ?? null);
        yield "</h1>
            </div>

            ";
        // line 25
        if (((($tmp = ($context["lead"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 26
            yield "            <div class=\"page-hero__aside\">
                ";
            // line 27
            if ((($tmp = ($context["lead"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"lead\" data-reveal style=\"--d: .12s\">";
                yield (string) ($context["lead"] ?? null);
                yield "</p>";
            }
            // line 28
            yield "                ";
            if ((($tmp = ($context["meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "                <ul class=\"meta-list\" data-reveal style=\"--d: .18s\">
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["meta"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 31
                    yield "                    <li>";
                    yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 31), $context["item"])) : ($context["item"])), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 33
                yield "                </ul>
                ";
            }
            // line 35
            yield "            </div>
            ";
        }
        // line 37
        yield "        </div>
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
        return "partials/page-hero.html.twig";
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
        return array (  149 => 37,  145 => 35,  141 => 33,  131 => 31,  127 => 30,  124 => 29,  121 => 28,  115 => 27,  112 => 26,  110 => 25,  103 => 22,  97 => 21,  87 => 15,  79 => 13,  77 => 12,  73 => 11,  61 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set eyebrow = page.header.hero_eyebrow|default(\x27\x27) %}
{% set heading = page.header.hero_heading|default(page.title) %}
{% set lead = page.header.hero_lead|default(\x27\x27) %}
{% set meta = page.header.hero_meta|default([]) %}
{% set compact = page.header.hero_compact|default(false) %}

<section class=\"page-hero{% if compact %} page-hero--compact{% endif %}{% if page.header.hero_stack %} page-hero--stack{% endif %}\">
    <div class=\"container\">
        <nav class=\"crumbs\" aria-label=\"Хлебные крошки\">
            <ol>
                <li><a href=\"{{ base_url_relative ?: \x27/\x27 }}\">Главная</a></li>
                {% if page.parent and not page.parent.home and page.parent.visible %}
                <li><a href=\"{{ page.parent.url }}\">{{ page.parent.menu }}</a></li>
                {% endif %}
                <li aria-current=\"page\">{{ page.title }}</li>
            </ol>
        </nav>

        <div class=\"page-hero__grid\">
            <div class=\"page-hero__heading\">
                {% if eyebrow %}<p class=\"eyebrow\" data-reveal>{{ eyebrow }}</p>{% endif %}
                <h1 data-reveal style=\"--d: .05s\">{{ heading|raw }}</h1>
            </div>

            {% if lead or meta %}
            <div class=\"page-hero__aside\">
                {% if lead %}<p class=\"lead\" data-reveal style=\"--d: .12s\">{{ lead|raw }}</p>{% endif %}
                {% if meta %}
                <ul class=\"meta-list\" data-reveal style=\"--d: .18s\">
                    {% for item in meta %}
                    <li>{{ item.text|default(item) }}</li>
                    {% endfor %}
                </ul>
                {% endif %}
            </div>
            {% endif %}
        </div>
    </div>
</section>
", "partials/page-hero.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\partials\\page-hero.html.twig");
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
