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

/* modular/hero.html.twig */
class __TwigTemplate_b9b9b85723d07db52fc852eebc2b966e_sourced extends Template
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
        yield "<section class=\"hero\" id=\"hero\">
    <div class=\"container hero__grid\">
        <div class=\"hero__content\">
            <div class=\"hero__kicker\" data-reveal>
                <p class=\"eyebrow\">";
        // line 6
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "eyebrow", [], "any", false, false, false, 6), "html", null, true);
        yield "</p>
                ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "availability", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "                <span class=\"availability availability--dark\"><span class=\"availability__dot\" aria-hidden=\"true\"></span>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 8), "availability", [], "any", false, false, false, 8), "html", null, true);
            yield "</span>
                ";
        }
        // line 10
        yield "            </div>

            <h1 class=\"hero__title\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "heading_lines", [], "any", false, false, false, 13));
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
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 14
            yield "                <span class=\"hero__line\">
                    <span style=\"--i: ";
            // line 15
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 15), "html", null, true);
            yield "\"";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "accent", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "accent", [], "any", false, false, false, 15), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " class=\"is-accent\"";
            }
            yield ">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "text", [], "any", false, false, false, 15), "html", null, true);
            yield "</span>
                </span>
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
        unset($context['_seq'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 18
        yield "            </h1>

            <p class=\"lead hero__lead\" data-reveal style=\"--d: .24s\">";
        // line 20
        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 20), "lead", [], "any", false, false, false, 20);
        yield "</p>

            <div class=\"hero__actions\" data-reveal style=\"--d: .32s\">
                <a class=\"btn btn--primary\" href=\"";
        // line 23
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 23), "primary_url", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 23), "primary_url", [], "any", false, false, false, 23), (($context["base_url_relative"] ?? null) . "/contact"))) : ((($context["base_url_relative"] ?? null) . "/contact"))), "html", null, true);
        yield "\">
                    <span>";
        // line 24
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 24), "primary_label", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 24), "primary_label", [], "any", false, false, false, 24), "Записаться на пробный урок")) : ("Записаться на пробный урок")), "html", null, true);
        yield "</span>
                    ";
        // line 25
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(25))->call("icon", ["arrow-up-right", "icon icon--sm"], $context, 25, $this->source);
        yield "
                </a>
                <a class=\"btn btn--ghost\" href=\"";
        // line 27
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 27), "secondary_url", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 27), "secondary_url", [], "any", false, false, false, 27), (($context["base_url_relative"] ?? null) . "/services"))) : ((($context["base_url_relative"] ?? null) . "/services"))), "html", null, true);
        yield "\">
                    <span>";
        // line 28
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 28), "secondary_label", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "secondary_label", [], "any", false, false, false, 28), "Смотреть программы")) : ("Смотреть программы")), "html", null, true);
        yield "</span>
                    ";
        // line 29
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(29))->call("icon", ["arrow-down", "icon icon--sm"], $context, 29, $this->source);
        yield "
                </a>
            </div>

            ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 33), "meta", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "            <ul class=\"hero__meta\" data-reveal style=\"--d: .4s\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 35), "meta", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 36
                yield "                <li>";
                yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 36), $context["item"])) : ($context["item"])), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 38
            yield "            </ul>
            ";
        }
        // line 40
        yield "        </div>

        <div class=\"hero__visual\" data-reveal style=\"--d: .15s\">
            ";
        // line 43
        yield from $this->load("partials/hero-art.html.twig", 43)->unwrap()->yield(CoreExtension::toArray(["badge_kicker" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["page"] ?? null), "header", [], "any", false, true, false, 44), "badge_kicker", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 44), "badge_kicker", [], "any", false, false, false, 44), "ЕГЭ · 2026")) : ("ЕГЭ · 2026")), "badge_value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["page"] ?? null), "header", [], "any", false, true, false, 45), "badge_value", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 45), "badge_value", [], "any", false, false, false, 45), "91")) : ("91")), "badge_caption" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["page"] ?? null), "header", [], "any", false, true, false, 46), "badge_caption", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 46), "badge_caption", [], "any", false, false, false, 46), "средний балл учеников")) : ("средний балл учеников"))]));
        // line 48
        yield "        </div>
    </div>

    <div class=\"hero__edge\">
        <span>English · Est. 2014 · Moscow</span>
    </div>

    <a class=\"hero__scroll\" href=\"#about\" aria-label=\"Прокрутить к разделу обо мне\">
        <span>Листайте</span>
        <span class=\"hero__scroll-line\" aria-hidden=\"true\"></span>
    </a>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/hero.html.twig";
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
        return array (  188 => 48,  186 => 46,  185 => 45,  184 => 44,  183 => 43,  178 => 40,  174 => 38,  164 => 36,  160 => 35,  157 => 34,  155 => 33,  148 => 29,  144 => 28,  140 => 27,  135 => 25,  131 => 24,  127 => 23,  121 => 20,  117 => 18,  93 => 15,  90 => 14,  73 => 13,  68 => 10,  62 => 8,  60 => 7,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
<section class=\"hero\" id=\"hero\">
    <div class=\"container hero__grid\">
        <div class=\"hero__content\">
            <div class=\"hero__kicker\" data-reveal>
                <p class=\"eyebrow\">{{ page.header.eyebrow }}</p>
                {% if page.header.availability %}
                <span class=\"availability availability--dark\"><span class=\"availability__dot\" aria-hidden=\"true\"></span>{{ page.header.availability }}</span>
                {% endif %}
            </div>

            <h1 class=\"hero__title\">
                {% for line in page.header.heading_lines %}
                <span class=\"hero__line\">
                    <span style=\"--i: {{ loop.index0 }}\"{% if line.accent|default(false) %} class=\"is-accent\"{% endif %}>{{ line.text }}</span>
                </span>
                {% endfor %}
            </h1>

            <p class=\"lead hero__lead\" data-reveal style=\"--d: .24s\">{{ page.header.lead|raw }}</p>

            <div class=\"hero__actions\" data-reveal style=\"--d: .32s\">
                <a class=\"btn btn--primary\" href=\"{{ page.header.primary_url|default(base_url_relative ~ \x27/contact\x27) }}\">
                    <span>{{ page.header.primary_label|default(\x27Записаться на пробный урок\x27) }}</span>
                    {{ ui.icon(\x27arrow-up-right\x27, \x27icon icon--sm\x27) }}
                </a>
                <a class=\"btn btn--ghost\" href=\"{{ page.header.secondary_url|default(base_url_relative ~ \x27/services\x27) }}\">
                    <span>{{ page.header.secondary_label|default(\x27Смотреть программы\x27) }}</span>
                    {{ ui.icon(\x27arrow-down\x27, \x27icon icon--sm\x27) }}
                </a>
            </div>

            {% if page.header.meta %}
            <ul class=\"hero__meta\" data-reveal style=\"--d: .4s\">
                {% for item in page.header.meta %}
                <li>{{ item.text|default(item) }}</li>
                {% endfor %}
            </ul>
            {% endif %}
        </div>

        <div class=\"hero__visual\" data-reveal style=\"--d: .15s\">
            {% include \x27partials/hero-art.html.twig\x27 with {
                badge_kicker: page.header.badge_kicker|default(\x27ЕГЭ · 2026\x27),
                badge_value: page.header.badge_value|default(\x2791\x27),
                badge_caption: page.header.badge_caption|default(\x27средний балл учеников\x27)
            } only %}
        </div>
    </div>

    <div class=\"hero__edge\">
        <span>English · Est. 2014 · Moscow</span>
    </div>

    <a class=\"hero__scroll\" href=\"#about\" aria-label=\"Прокрутить к разделу обо мне\">
        <span>Листайте</span>
        <span class=\"hero__scroll-line\" aria-hidden=\"true\"></span>
    </a>
</section>
", "modular/hero.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\modular\\hero.html.twig");
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
