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

/* modular/services.html.twig */
class __TwigTemplate_2a6996f5af6f9ad62221744a9a360d7f_sourced extends Template
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
        yield "<section class=\"section section--services\" id=\"services\">
    <div class=\"container\">
        <header class=\"section-head\">
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

        <div class=\"service-grid\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 15), "items", [], "any", false, false, false, 15));
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
            // line 16
            yield "            <article class=\"service-card\" data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 16) * 0.07), "html", null, true);
            yield "s\">
                <div class=\"service-card__top\">
                    <span class=\"service-card__number\">";
            // line 18
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "number", [], "any", false, false, false, 18), "html", null, true);
            yield "</span>
                    <span class=\"service-card__icon\">";
            // line 19
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(19))->call("icon", [((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 19), "book")) : ("book")), "icon"], $context, 19, $this->source);
            yield "</span>
                </div>
                <h3><a href=\"";
            // line 21
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 21), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 21), "html", null, true);
            yield "</a></h3>
                <p class=\"service-card__text\">";
            // line 22
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
                <div class=\"service-card__meta\">
                    <span>";
            // line 24
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 24), "html", null, true);
            yield "</span>
                </div>
                <div class=\"service-card__foot\">
                    <span class=\"service-card__price\">";
            // line 27
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 27), "html", null, true);
            yield "</span>
                    <a class=\"service-card__arrow\" href=\"";
            // line 28
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 28), "html", null, true);
            yield "\" aria-label=\"Подробнее: ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 28), "html", null, true);
            yield "\">
                        ";
            // line 29
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(29))->call("icon", ["arrow-up-right", "icon"], $context, 29, $this->source);
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 34
        yield "        </div>

        ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 36), "button_label", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "        <div class=\"section-foot\" data-reveal>
            <a class=\"text-link\" href=\"";
            // line 38
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 38), "button_url", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "button_url", [], "any", false, false, false, 38), (($context["base_url_relative"] ?? null) . "/services"))) : ((($context["base_url_relative"] ?? null) . "/services"))), "html", null, true);
            yield "\">
                <span>";
            // line 39
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 39), "button_label", [], "any", false, false, false, 39), "html", null, true);
            yield "</span>
                ";
            // line 40
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(40))->call("icon", ["arrow-right", "icon icon--sm"], $context, 40, $this->source);
            yield "
            </a>
        </div>
        ";
        }
        // line 44
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
        return "modular/services.html.twig";
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
        return array (  181 => 44,  174 => 40,  170 => 39,  166 => 38,  163 => 37,  161 => 36,  157 => 34,  137 => 29,  131 => 28,  127 => 27,  121 => 24,  116 => 22,  110 => 21,  105 => 19,  101 => 18,  95 => 16,  78 => 15,  73 => 12,  67 => 10,  65 => 9,  60 => 7,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
<section class=\"section section--services\" id=\"services\">
    <div class=\"container\">
        <header class=\"section-head\">
            <div class=\"section-head__title\">
                <p class=\"eyebrow\" data-reveal>{{ page.header.eyebrow }}</p>
                <h2 data-reveal style=\"--d: .05s\">{{ page.header.heading|raw }}</h2>
            </div>
            {% if page.header.intro %}
            <p class=\"section-head__intro\" data-reveal style=\"--d: .1s\">{{ page.header.intro }}</p>
            {% endif %}
        </header>

        <div class=\"service-grid\">
            {% for item in page.header.items %}
            <article class=\"service-card\" data-reveal style=\"--d: {{ loop.index0 * 0.07 }}s\">
                <div class=\"service-card__top\">
                    <span class=\"service-card__number\">{{ item.number }}</span>
                    <span class=\"service-card__icon\">{{ ui.icon(item.icon|default(\x27book\x27), \x27icon\x27) }}</span>
                </div>
                <h3><a href=\"{{ item.url }}\">{{ item.title }}</a></h3>
                <p class=\"service-card__text\">{{ item.text }}</p>
                <div class=\"service-card__meta\">
                    <span>{{ item.meta }}</span>
                </div>
                <div class=\"service-card__foot\">
                    <span class=\"service-card__price\">{{ item.price }}</span>
                    <a class=\"service-card__arrow\" href=\"{{ item.url }}\" aria-label=\"Подробнее: {{ item.title }}\">
                        {{ ui.icon(\x27arrow-up-right\x27, \x27icon\x27) }}
                    </a>
                </div>
            </article>
            {% endfor %}
        </div>

        {% if page.header.button_label %}
        <div class=\"section-foot\" data-reveal>
            <a class=\"text-link\" href=\"{{ page.header.button_url|default(base_url_relative ~ \x27/services\x27) }}\">
                <span>{{ page.header.button_label }}</span>
                {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
            </a>
        </div>
        {% endif %}
    </div>
</section>
", "modular/services.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\modular\\services.html.twig");
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
