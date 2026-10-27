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

/* modular/about.html.twig */
class __TwigTemplate_14afd16ff336b0d1edf88cbd03850af6_sourced extends Template
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
        $context["plate"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 2), "plate", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "plate", [], "any", false, false, false, 2), [])) : ([]));
        // line 3
        yield "<section class=\"section section--about\" id=\"about\">
    <div class=\"container\">
        <div class=\"split split--about\">
            <div class=\"about-plate\" data-reveal>
                <div class=\"type-plate\">
                    <span class=\"type-plate__label\">";
        // line 8
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "label", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "label", [], "any", false, false, false, 8), "A note on language")) : ("A note on language")), "html", null, true);
        yield "</span>
                    <span class=\"type-plate__letter\" aria-hidden=\"true\">";
        // line 9
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "letter", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "letter", [], "any", false, false, false, 9), "Aa")) : ("Aa")), "html", null, true);
        yield "</span>
                    <span class=\"type-plate__ipa\">";
        // line 10
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "ipa", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "ipa", [], "any", false, false, false, 10), "/ˈɪŋ.ɡlɪʃ/")) : ("/ˈɪŋ.ɡlɪʃ/")), "html", null, true);
        yield "</span>
                    <span class=\"type-plate__rule\" aria-hidden=\"true\"></span>
                    <blockquote class=\"type-plate__quote\">
                        ";
        // line 13
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "quote", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "quote", [], "any", false, false, false, 13), "Language is the dress of thought.")) : ("Language is the dress of thought.")), "html", null, true);
        yield "
                        <cite>";
        // line 14
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "cite", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["plate"] ?? null), "cite", [], "any", false, false, false, 14), "Samuel Johnson")) : ("Samuel Johnson")), "html", null, true);
        yield "</cite>
                    </blockquote>
                    <span class=\"type-plate__mark\">AB · MMXIV</span>
                </div>
                <span class=\"about-plate__caption\">A room of one’s own — и хороший словарь</span>
            </div>

            <div class=\"about-copy\">
                <p class=\"eyebrow\" data-reveal>";
        // line 22
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 22), "eyebrow", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>
                <h2 data-reveal style=\"--d: .05s\">";
        // line 23
        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 23), "heading", [], "any", false, false, false, 23);
        yield "</h2>
                <div class=\"about-copy__text\" data-reveal style=\"--d: .1s\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 25), "paragraphs", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
            // line 26
            yield "                    <p>";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["paragraph"], "text", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["paragraph"], "text", [], "any", false, false, false, 26), $context["paragraph"])) : ($context["paragraph"])), "html", null, true);
            yield "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['paragraph'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 28
        yield "                </div>
                <div class=\"signature\" data-reveal style=\"--d: .15s\">
                    <span class=\"signature__name\">";
        // line 30
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 30), "signature", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 30), "signature", [], "any", false, false, false, 30), "Анна Белова")) : ("Анна Белова")), "html", null, true);
        yield "</span>
                    <span class=\"signature__role\">";
        // line 31
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 31), "signature_role", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "signature_role", [], "any", false, false, false, 31), "преподаватель английского, CELTA")) : ("преподаватель английского, CELTA")), "html", null, true);
        yield "</span>
                </div>
                <a class=\"text-link\" href=\"";
        // line 33
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 33), "link_url", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 33), "link_url", [], "any", false, false, false, 33), (($context["base_url_relative"] ?? null) . "/about"))) : ((($context["base_url_relative"] ?? null) . "/about"))), "html", null, true);
        yield "\" data-reveal style=\"--d: .2s\">
                    <span>";
        // line 34
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 34), "link_label", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 34), "link_label", [], "any", false, false, false, 34), "Познакомиться ближе")) : ("Познакомиться ближе")), "html", null, true);
        yield "</span>
                    ";
        // line 35
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(35))->call("icon", ["arrow-right", "icon icon--sm"], $context, 35, $this->source);
        yield "
                </a>
            </div>
        </div>

        ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 40), "stats", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "        <ul class=\"stats\" aria-label=\"Ключевые цифры\">
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 42), "stats", [], "any", false, false, false, 42));
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
                // line 43
                yield "            <li class=\"stat\" data-reveal style=\"--d: ";
                yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 43) * 0.08), "html", null, true);
                yield "s\">
                <span class=\"stat__value\">
                    <span data-counter data-value=\"";
                // line 45
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 45), "html", null, true);
                yield "\" data-decimals=\"";
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "decimals", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "decimals", [], "any", false, false, false, 45), 0)) : (0)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 45), "html", null, true);
                yield "</span><span class=\"stat__suffix\">";
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "suffix", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "suffix", [], "any", false, false, false, 45), "")) : ("")), "html", null, true);
                yield "</span>
                </span>
                <span class=\"stat__label\">";
                // line 47
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, false, 47), "html", null, true);
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
            // line 50
            yield "        </ul>
        ";
        }
        // line 52
        yield "    </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/about.html.twig";
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
        return array (  201 => 52,  197 => 50,  179 => 47,  168 => 45,  162 => 43,  145 => 42,  142 => 41,  140 => 40,  132 => 35,  128 => 34,  124 => 33,  119 => 31,  115 => 30,  111 => 28,  101 => 26,  97 => 25,  92 => 23,  88 => 22,  77 => 14,  73 => 13,  67 => 10,  63 => 9,  59 => 8,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
{% set plate = page.header.plate|default({}) %}
<section class=\"section section--about\" id=\"about\">
    <div class=\"container\">
        <div class=\"split split--about\">
            <div class=\"about-plate\" data-reveal>
                <div class=\"type-plate\">
                    <span class=\"type-plate__label\">{{ plate.label|default(\x27A note on language\x27) }}</span>
                    <span class=\"type-plate__letter\" aria-hidden=\"true\">{{ plate.letter|default(\x27Aa\x27) }}</span>
                    <span class=\"type-plate__ipa\">{{ plate.ipa|default(\x27/ˈɪŋ.ɡlɪʃ/\x27) }}</span>
                    <span class=\"type-plate__rule\" aria-hidden=\"true\"></span>
                    <blockquote class=\"type-plate__quote\">
                        {{ plate.quote|default(\x27Language is the dress of thought.\x27) }}
                        <cite>{{ plate.cite|default(\x27Samuel Johnson\x27) }}</cite>
                    </blockquote>
                    <span class=\"type-plate__mark\">AB · MMXIV</span>
                </div>
                <span class=\"about-plate__caption\">A room of one’s own — и хороший словарь</span>
            </div>

            <div class=\"about-copy\">
                <p class=\"eyebrow\" data-reveal>{{ page.header.eyebrow }}</p>
                <h2 data-reveal style=\"--d: .05s\">{{ page.header.heading|raw }}</h2>
                <div class=\"about-copy__text\" data-reveal style=\"--d: .1s\">
                    {% for paragraph in page.header.paragraphs %}
                    <p>{{ paragraph.text|default(paragraph) }}</p>
                    {% endfor %}
                </div>
                <div class=\"signature\" data-reveal style=\"--d: .15s\">
                    <span class=\"signature__name\">{{ page.header.signature|default(\x27Анна Белова\x27) }}</span>
                    <span class=\"signature__role\">{{ page.header.signature_role|default(\x27преподаватель английского, CELTA\x27) }}</span>
                </div>
                <a class=\"text-link\" href=\"{{ page.header.link_url|default(base_url_relative ~ \x27/about\x27) }}\" data-reveal style=\"--d: .2s\">
                    <span>{{ page.header.link_label|default(\x27Познакомиться ближе\x27) }}</span>
                    {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                </a>
            </div>
        </div>

        {% if page.header.stats %}
        <ul class=\"stats\" aria-label=\"Ключевые цифры\">
            {% for stat in page.header.stats %}
            <li class=\"stat\" data-reveal style=\"--d: {{ loop.index0 * 0.08 }}s\">
                <span class=\"stat__value\">
                    <span data-counter data-value=\"{{ stat.value }}\" data-decimals=\"{{ stat.decimals|default(0) }}\">{{ stat.value }}</span><span class=\"stat__suffix\">{{ stat.suffix|default(\x27\x27) }}</span>
                </span>
                <span class=\"stat__label\">{{ stat.label }}</span>
            </li>
            {% endfor %}
        </ul>
        {% endif %}
    </div>
</section>
", "modular/about.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\modular\\about.html.twig");
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
