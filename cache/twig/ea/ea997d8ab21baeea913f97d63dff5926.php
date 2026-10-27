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

/* modular/faq.html.twig */
class __TwigTemplate_7269cbd363705e43b851fdd020ba6110_sourced extends Template
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
        $context["questions"] = [];
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3), "items", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            yield "    ";
            $context["questions"] = Twig\Extension\CoreExtension::merge(($context["questions"] ?? null), [["@type" => "Question", "name" => CoreExtension::getAttribute($this->env, $this->source,             // line 6
$context["item"], "question", [], "any", false, false, false, 6), "acceptedAnswer" => ["@type" => "Answer", "text" => CoreExtension::getAttribute($this->env, $this->source,             // line 7
$context["item"], "answer", [], "any", false, false, false, 7)]]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 10
        yield "
<section class=\"section section--faq\" id=\"faq\">
    <div class=\"container\">
        <div class=\"faq-layout\">
            <div class=\"faq-intro\">
                <p class=\"eyebrow\" data-reveal>";
        // line 15
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 15), "eyebrow", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
                <h2 data-reveal style=\"--d: .05s\">";
        // line 16
        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 16), "heading", [], "any", false, false, false, 16);
        yield "</h2>
                ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 17), "intro", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                <p class=\"faq-intro__text\" data-reveal style=\"--d: .1s\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 18), "intro", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                ";
        }
        // line 20
        yield "                <div class=\"faq-intro__note\" data-reveal style=\"--d: .15s\">
                    <p>Не нашли свой вопрос?</p>
                    <a class=\"text-link\" href=\"";
        // line 22
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/contact\">
                        <span>Напишите мне</span>
                        ";
        // line 24
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(24))->call("icon", ["arrow-right", "icon icon--sm"], $context, 24, $this->source);
        yield "
                    </a>
                </div>
            </div>

            <div class=\"faq-list\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 30), "items", [], "any", false, false, false, 30));
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
            // line 31
            yield "                <details class=\"faq-item\" data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 31) * 0.04), "html", null, true);
            yield "s\">
                    <summary class=\"faq-item__summary\">
                        <span class=\"faq-item__question\">";
            // line 33
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "question", [], "any", false, false, false, 33), "html", null, true);
            yield "</span>
                        <span class=\"faq-item__icon\" aria-hidden=\"true\">";
            // line 34
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(34))->call("icon", ["plus", "icon"], $context, 34, $this->source);
            yield "</span>
                    </summary>
                    <div class=\"faq-item__answer\">
                        <div class=\"faq-item__answer-inner\">
                            <p>";
            // line 38
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "answer", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </details>
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
        // line 43
        yield "            </div>
        </div>
    </div>
    <script type=\"application/ld+json\">";
        // line 46
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, ["@context" => "https://schema.org", "@type" => "FAQPage", "mainEntity" => ($context["questions"] ?? null)]);
        yield "</script>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/faq.html.twig";
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
        return array (  166 => 46,  161 => 43,  141 => 38,  134 => 34,  130 => 33,  124 => 31,  107 => 30,  98 => 24,  93 => 22,  89 => 20,  83 => 18,  81 => 17,  77 => 16,  73 => 15,  66 => 10,  59 => 7,  58 => 6,  56 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
{% set questions = [] %}
{% for item in page.header.items %}
    {% set questions = questions|merge([{
        \x27@type\x27: \x27Question\x27,
        \x27name\x27: item.question,
        \x27acceptedAnswer\x27: {\x27@type\x27: \x27Answer\x27, \x27text\x27: item.answer}
    }]) %}
{% endfor %}

<section class=\"section section--faq\" id=\"faq\">
    <div class=\"container\">
        <div class=\"faq-layout\">
            <div class=\"faq-intro\">
                <p class=\"eyebrow\" data-reveal>{{ page.header.eyebrow }}</p>
                <h2 data-reveal style=\"--d: .05s\">{{ page.header.heading|raw }}</h2>
                {% if page.header.intro %}
                <p class=\"faq-intro__text\" data-reveal style=\"--d: .1s\">{{ page.header.intro }}</p>
                {% endif %}
                <div class=\"faq-intro__note\" data-reveal style=\"--d: .15s\">
                    <p>Не нашли свой вопрос?</p>
                    <a class=\"text-link\" href=\"{{ base_url_relative }}/contact\">
                        <span>Напишите мне</span>
                        {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                    </a>
                </div>
            </div>

            <div class=\"faq-list\">
                {% for item in page.header.items %}
                <details class=\"faq-item\" data-reveal style=\"--d: {{ loop.index0 * 0.04 }}s\">
                    <summary class=\"faq-item__summary\">
                        <span class=\"faq-item__question\">{{ item.question }}</span>
                        <span class=\"faq-item__icon\" aria-hidden=\"true\">{{ ui.icon(\x27plus\x27, \x27icon\x27) }}</span>
                    </summary>
                    <div class=\"faq-item__answer\">
                        <div class=\"faq-item__answer-inner\">
                            <p>{{ item.answer }}</p>
                        </div>
                    </div>
                </details>
                {% endfor %}
            </div>
        </div>
    </div>
    <script type=\"application/ld+json\">{{ {\x27@context\x27: \x27https://schema.org\x27, \x27@type\x27: \x27FAQPage\x27, \x27mainEntity\x27: questions}|json_encode|raw }}</script>
</section>
", "modular/faq.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\modular\\faq.html.twig");
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
