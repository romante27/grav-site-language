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

/* modular/approach.html.twig */
class __TwigTemplate_d72d37637e58416d17c2504b126c5017_sourced extends Template
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
        yield "<section class=\"section section--approach\" id=\"approach\">
    <span class=\"section-watermark\" aria-hidden=\"true\">Method</span>
    <div class=\"container\">
        <div class=\"approach\">
            <div class=\"approach__intro\">
                <p class=\"eyebrow eyebrow--light\" data-reveal>";
        // line 7
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "eyebrow", [], "any", false, false, false, 7), "html", null, true);
        yield "</p>
                <h2 data-reveal style=\"--d: .05s\">";
        // line 8
        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 8), "heading", [], "any", false, false, false, 8);
        yield "</h2>
                <p class=\"approach__lead\" data-reveal style=\"--d: .1s\">";
        // line 9
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "intro", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
                ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 10), "quote", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "                <blockquote class=\"approach__quote\" data-reveal style=\"--d: .15s\">
                    ";
            // line 12
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(12))->call("icon", ["quote", "quote-mark"], $context, 12, $this->source);
            yield "
                    <p>";
            // line 13
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "quote", [], "any", false, false, false, 13), "html", null, true);
            yield "</p>
                </blockquote>
                ";
        }
        // line 16
        yield "            </div>

            <ol class=\"steps\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 19), "steps", [], "any", false, false, false, 19));
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
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 20
            yield "                <li class=\"step\" data-reveal style=\"--d: ";
            yield (string) $this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20) * 0.08), "html", null, true);
            yield "s\">
                    <span class=\"step__number\">";
            // line 21
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "number", [], "any", false, false, false, 21), "html", null, true);
            yield "</span>
                    <div class=\"step__body\">
                        <h3>";
            // line 23
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "title", [], "any", false, false, false, 23), "html", null, true);
            yield "</h3>
                        <p>";
            // line 24
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "text", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>
                    </div>
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
        unset($context['_seq'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 28
        yield "            </ol>
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
        return "modular/approach.html.twig";
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
        return array (  139 => 28,  120 => 24,  116 => 23,  111 => 21,  106 => 20,  89 => 19,  84 => 16,  78 => 13,  74 => 12,  71 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
<section class=\"section section--approach\" id=\"approach\">
    <span class=\"section-watermark\" aria-hidden=\"true\">Method</span>
    <div class=\"container\">
        <div class=\"approach\">
            <div class=\"approach__intro\">
                <p class=\"eyebrow eyebrow--light\" data-reveal>{{ page.header.eyebrow }}</p>
                <h2 data-reveal style=\"--d: .05s\">{{ page.header.heading|raw }}</h2>
                <p class=\"approach__lead\" data-reveal style=\"--d: .1s\">{{ page.header.intro }}</p>
                {% if page.header.quote %}
                <blockquote class=\"approach__quote\" data-reveal style=\"--d: .15s\">
                    {{ ui.icon(\x27quote\x27, \x27quote-mark\x27) }}
                    <p>{{ page.header.quote }}</p>
                </blockquote>
                {% endif %}
            </div>

            <ol class=\"steps\">
                {% for step in page.header.steps %}
                <li class=\"step\" data-reveal style=\"--d: {{ loop.index0 * 0.08 }}s\">
                    <span class=\"step__number\">{{ step.number }}</span>
                    <div class=\"step__body\">
                        <h3>{{ step.title }}</h3>
                        <p>{{ step.text }}</p>
                    </div>
                </li>
                {% endfor %}
            </ol>
        </div>
    </div>
</section>
", "modular/approach.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\modular\\approach.html.twig");
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
