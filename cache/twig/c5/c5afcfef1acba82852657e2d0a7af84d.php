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

/* modular/ribbon.html.twig */
class __TwigTemplate_24db21e17d086d1cd7f79325f2a3e8be_sourced extends Template
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
        yield "<div class=\"ribbon\" aria-label=\"Направления обучения\">
    <div class=\"ribbon__track\">
        <div class=\"ribbon__group\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 4), "items", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            yield "            <span class=\"ribbon__item\">";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 5), $context["item"])) : ($context["item"])), "html", null, true);
            yield "</span>
            <span class=\"ribbon__sep\" aria-hidden=\"true\"></span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 8
        yield "        </div>
        <div class=\"ribbon__group\" aria-hidden=\"true\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 10), "items", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            yield "            <span class=\"ribbon__item\">";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 11), $context["item"])) : ($context["item"])), "html", null, true);
            yield "</span>
            <span class=\"ribbon__sep\" aria-hidden=\"true\"></span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 14
        yield "        </div>
    </div>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/ribbon.html.twig";
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
        return array (  87 => 14,  76 => 11,  72 => 10,  68 => 8,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"ribbon\" aria-label=\"Направления обучения\">
    <div class=\"ribbon__track\">
        <div class=\"ribbon__group\">
            {% for item in page.header.items %}
            <span class=\"ribbon__item\">{{ item.text|default(item) }}</span>
            <span class=\"ribbon__sep\" aria-hidden=\"true\"></span>
            {% endfor %}
        </div>
        <div class=\"ribbon__group\" aria-hidden=\"true\">
            {% for item in page.header.items %}
            <span class=\"ribbon__item\">{{ item.text|default(item) }}</span>
            <span class=\"ribbon__sep\" aria-hidden=\"true\"></span>
            {% endfor %}
        </div>
    </div>
</div>
", "modular/ribbon.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\modular\\ribbon.html.twig");
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
