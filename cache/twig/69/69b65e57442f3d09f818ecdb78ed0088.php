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

/* modular/testimonials.html.twig */
class __TwigTemplate_6e27fa8a047799fd3e94d7596f6ea841_sourced extends Template
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
        yield "<section class=\"section section--testimonials\" id=\"testimonials\">
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

        <div class=\"slider\" data-slider role=\"region\" aria-roledescription=\"карусель\" aria-label=\"Отзывы учеников\" data-reveal>
            <div class=\"slider__viewport\">
                <div class=\"slider__track\" data-track>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 17), "items", [], "any", false, false, false, 17));
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
            // line 18
            yield "                    <article class=\"testimonial\" data-slide role=\"group\" aria-roledescription=\"слайд\" aria-label=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18), "html", null, true);
            yield " из ";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 18), "items", [], "any", false, false, false, 18)), "html", null, true);
            yield "\">
                        <span class=\"testimonial__mark\" aria-hidden=\"true\">";
            // line 19
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(19))->call("icon", ["quote", "quote-mark"], $context, 19, $this->source);
            yield "</span>
                        <blockquote class=\"testimonial__quote\">";
            // line 20
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quote", [], "any", false, false, false, 20), "html", null, true);
            yield "</blockquote>
                        <footer class=\"testimonial__author\">
                            <span class=\"testimonial__initial\" aria-hidden=\"true\">";
            // line 22
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 22), 0, 1), "html", null, true);
            yield "</span>
                            <span class=\"testimonial__who\">
                                <strong>";
            // line 24
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "</strong>
                                <span>";
            // line 25
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "meta", [], "any", false, false, false, 25), "html", null, true);
            yield "</span>
                            </span>
                            ";
            // line 27
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "result", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "                            <span class=\"testimonial__result\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "result", [], "any", false, false, false, 28), "html", null, true);
                yield "</span>
                            ";
            }
            // line 30
            yield "                        </footer>
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
        // line 33
        yield "                </div>
            </div>

            <div class=\"slider__controls\">
                <div class=\"slider__progress\" aria-hidden=\"true\"><span data-progress></span></div>
                <span class=\"slider__count\" aria-live=\"polite\"><span data-current>01</span> <span class=\"slider__count-total\">/ ";
        // line 38
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::sprintf("%02d", Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "items", [], "any", false, false, false, 38))), "html", null, true);
        yield "</span></span>
                <div class=\"slider__buttons\">
                    <button class=\"slider__button\" type=\"button\" data-prev aria-label=\"Предыдущий отзыв\">
                        ";
        // line 41
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(41))->call("icon", ["arrow-left", "icon"], $context, 41, $this->source);
        yield "
                    </button>
                    <button class=\"slider__button\" type=\"button\" data-next aria-label=\"Следующий отзыв\">
                        ";
        // line 44
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(44))->call("icon", ["arrow-right", "icon"], $context, 44, $this->source);
        yield "
                    </button>
                </div>
            </div>
        </div>

        ";
        // line 50
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 50), "link_label", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        <div class=\"section-foot\" data-reveal>
            <a class=\"text-link\" href=\"";
            // line 52
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 52), "link_url", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 52), "link_url", [], "any", false, false, false, 52), (($context["base_url_relative"] ?? null) . "/reviews"))) : ((($context["base_url_relative"] ?? null) . "/reviews"))), "html", null, true);
            yield "\">
                <span>";
            // line 53
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 53), "link_label", [], "any", false, false, false, 53), "html", null, true);
            yield "</span>
                ";
            // line 54
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(54))->call("icon", ["arrow-right", "icon icon--sm"], $context, 54, $this->source);
            yield "
            </a>
        </div>
        ";
        }
        // line 58
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
        return "modular/testimonials.html.twig";
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
        return array (  200 => 58,  193 => 54,  189 => 53,  185 => 52,  182 => 51,  180 => 50,  171 => 44,  165 => 41,  159 => 38,  152 => 33,  135 => 30,  129 => 28,  127 => 27,  122 => 25,  118 => 24,  113 => 22,  108 => 20,  104 => 19,  97 => 18,  80 => 17,  73 => 12,  67 => 10,  65 => 9,  60 => 7,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
<section class=\"section section--testimonials\" id=\"testimonials\">
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

        <div class=\"slider\" data-slider role=\"region\" aria-roledescription=\"карусель\" aria-label=\"Отзывы учеников\" data-reveal>
            <div class=\"slider__viewport\">
                <div class=\"slider__track\" data-track>
                    {% for item in page.header.items %}
                    <article class=\"testimonial\" data-slide role=\"group\" aria-roledescription=\"слайд\" aria-label=\"{{ loop.index }} из {{ page.header.items|length }}\">
                        <span class=\"testimonial__mark\" aria-hidden=\"true\">{{ ui.icon(\x27quote\x27, \x27quote-mark\x27) }}</span>
                        <blockquote class=\"testimonial__quote\">{{ item.quote }}</blockquote>
                        <footer class=\"testimonial__author\">
                            <span class=\"testimonial__initial\" aria-hidden=\"true\">{{ item.name|slice(0, 1) }}</span>
                            <span class=\"testimonial__who\">
                                <strong>{{ item.name }}</strong>
                                <span>{{ item.meta }}</span>
                            </span>
                            {% if item.result %}
                            <span class=\"testimonial__result\">{{ item.result }}</span>
                            {% endif %}
                        </footer>
                    </article>
                    {% endfor %}
                </div>
            </div>

            <div class=\"slider__controls\">
                <div class=\"slider__progress\" aria-hidden=\"true\"><span data-progress></span></div>
                <span class=\"slider__count\" aria-live=\"polite\"><span data-current>01</span> <span class=\"slider__count-total\">/ {{ \x27%02d\x27|format(page.header.items|length) }}</span></span>
                <div class=\"slider__buttons\">
                    <button class=\"slider__button\" type=\"button\" data-prev aria-label=\"Предыдущий отзыв\">
                        {{ ui.icon(\x27arrow-left\x27, \x27icon\x27) }}
                    </button>
                    <button class=\"slider__button\" type=\"button\" data-next aria-label=\"Следующий отзыв\">
                        {{ ui.icon(\x27arrow-right\x27, \x27icon\x27) }}
                    </button>
                </div>
            </div>
        </div>

        {% if page.header.link_label %}
        <div class=\"section-foot\" data-reveal>
            <a class=\"text-link\" href=\"{{ page.header.link_url|default(base_url_relative ~ \x27/reviews\x27) }}\">
                <span>{{ page.header.link_label }}</span>
                {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
            </a>
        </div>
        {% endif %}
    </div>
</section>
", "modular/testimonials.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\modular\\testimonials.html.twig");
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
