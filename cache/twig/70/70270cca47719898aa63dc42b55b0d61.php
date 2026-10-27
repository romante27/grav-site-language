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

/* modular/results.html.twig */
class __TwigTemplate_689ac24c4840ce44b8a87a86699bfdc4_sourced extends Template
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
        yield "<section class=\"section section--results\" id=\"results\">
    <div class=\"container\">
        <header class=\"section-head section-head--compact\">
            <div class=\"section-head__title\">
                <p class=\"eyebrow\" data-reveal>";
        // line 6
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "eyebrow", [], "any", false, false, false, 6), "html", null, true);
        yield "</p>
                <h2 data-reveal style=\"--d: .05s\">";
        // line 7
        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "heading", [], "any", false, false, false, 7);
        yield "</h2>
            </div>
            ";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "intro", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "            <p class=\"section-head__intro\" data-reveal style=\"--d: .1s\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 10), "intro", [], "any", false, false, false, 10), "html", null, true);
            yield "</p>
            ";
        }
        // line 12
        yield "        </header>

        <div class=\"results\">
            <ul class=\"result-stats\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 16), "stats", [], "any", false, false, false, 16));
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
            // line 17
            yield "                <li class=\"result-stat";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " result-stat--accent";
            }
            yield "\" data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 17) * 0.07), "html", null, true);
            yield "s\">
                    <span class=\"result-stat__value\">
                        <span data-counter data-value=\"";
            // line 19
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 19), "html", null, true);
            yield "\" data-decimals=\"";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "decimals", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "decimals", [], "any", false, false, false, 19), 0)) : (0)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 19), "html", null, true);
            yield "</span><span class=\"result-stat__suffix\">";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "suffix", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "suffix", [], "any", false, false, false, 19), "")) : ("")), "html", null, true);
            yield "</span>
                    </span>
                    <span class=\"result-stat__label\">";
            // line 21
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>
                    ";
            // line 22
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "note", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"result-stat__note\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "note", [], "any", false, false, false, 22), "html", null, true);
                yield "</span>";
            }
            // line 23
            yield "                </li>
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
        // line 25
        yield "            </ul>

            <div class=\"result-panel\" data-reveal style=\"--d: .2s\">
                <p class=\"result-panel__title\">Последние два года</p>
                <ul class=\"tick-list\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 30), "list", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            yield "                    <li>
                        ";
            // line 32
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(32))->call("icon", ["check", "icon icon--sm"], $context, 32, $this->source);
            yield "
                        <span>";
            // line 33
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 33), $context["item"])) : ($context["item"])), "html", null, true);
            yield "</span>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 36
        yield "                </ul>
                ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 37), "link_label", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                <a class=\"text-link\" href=\"";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 38), "link_url", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "link_url", [], "any", false, false, false, 38), (($context["base_url_relative"] ?? null) . "/exams"))) : ((($context["base_url_relative"] ?? null) . "/exams"))), "html", null, true);
            yield "\">
                    <span>";
            // line 39
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 39), "link_label", [], "any", false, false, false, 39), "html", null, true);
            yield "</span>
                    ";
            // line 40
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(40))->call("icon", ["arrow-right", "icon icon--sm"], $context, 40, $this->source);
            yield "
                </a>
                ";
        }
        // line 43
        yield "            </div>
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
        return "modular/results.html.twig";
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
        return array (  191 => 43,  185 => 40,  181 => 39,  176 => 38,  174 => 37,  171 => 36,  161 => 33,  157 => 32,  154 => 31,  150 => 30,  143 => 25,  127 => 23,  121 => 22,  117 => 21,  106 => 19,  96 => 17,  79 => 16,  73 => 12,  67 => 10,  65 => 9,  60 => 7,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
<section class=\"section section--results\" id=\"results\">
    <div class=\"container\">
        <header class=\"section-head section-head--compact\">
            <div class=\"section-head__title\">
                <p class=\"eyebrow\" data-reveal>{{ page.header.eyebrow }}</p>
                <h2 data-reveal style=\"--d: .05s\">{{ page.header.heading|raw }}</h2>
            </div>
            {% if page.header.intro %}
            <p class=\"section-head__intro\" data-reveal style=\"--d: .1s\">{{ page.header.intro }}</p>
            {% endif %}
        </header>

        <div class=\"results\">
            <ul class=\"result-stats\">
                {% for stat in page.header.stats %}
                <li class=\"result-stat{% if loop.first %} result-stat--accent{% endif %}\" data-reveal style=\"--d: {{ loop.index0 * 0.07 }}s\">
                    <span class=\"result-stat__value\">
                        <span data-counter data-value=\"{{ stat.value }}\" data-decimals=\"{{ stat.decimals|default(0) }}\">{{ stat.value }}</span><span class=\"result-stat__suffix\">{{ stat.suffix|default(\x27\x27) }}</span>
                    </span>
                    <span class=\"result-stat__label\">{{ stat.label }}</span>
                    {% if stat.note %}<span class=\"result-stat__note\">{{ stat.note }}</span>{% endif %}
                </li>
                {% endfor %}
            </ul>

            <div class=\"result-panel\" data-reveal style=\"--d: .2s\">
                <p class=\"result-panel__title\">Последние два года</p>
                <ul class=\"tick-list\">
                    {% for item in page.header.list %}
                    <li>
                        {{ ui.icon(\x27check\x27, \x27icon icon--sm\x27) }}
                        <span>{{ item.text|default(item) }}</span>
                    </li>
                    {% endfor %}
                </ul>
                {% if page.header.link_label %}
                <a class=\"text-link\" href=\"{{ page.header.link_url|default(base_url_relative ~ \x27/exams\x27) }}\">
                    <span>{{ page.header.link_label }}</span>
                    {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                </a>
                {% endif %}
            </div>
        </div>
    </div>
</section>
", "modular/results.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\modular\\results.html.twig");
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
