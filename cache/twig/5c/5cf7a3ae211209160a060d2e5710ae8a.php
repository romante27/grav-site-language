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

/* modular/cta.html.twig */
class __TwigTemplate_7f1e760d41cb5647b8db823c6b5da4aa_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->load("partials/cta-band.html.twig", 1)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 2
($context["page"] ?? null), "header", [], "any", false, false, false, 2), "eyebrow", [], "any", false, false, false, 2), "heading" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 3
($context["page"] ?? null), "header", [], "any", false, false, false, 3), "heading", [], "any", false, false, false, 3), "text" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["page"] ?? null), "header", [], "any", false, false, false, 4), "text", [], "any", false, false, false, 4), "note" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["page"] ?? null), "header", [], "any", false, false, false, 5), "note", [], "any", false, false, false, 5), "primary_label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["page"] ?? null), "header", [], "any", false, false, false, 6), "primary_label", [], "any", false, false, false, 6), "primary_url" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["page"] ?? null), "header", [], "any", false, false, false, 7), "primary_url", [], "any", false, false, false, 7), "secondary_label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["page"] ?? null), "header", [], "any", false, false, false, 8), "secondary_label", [], "any", false, false, false, 8), "secondary_url" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["page"] ?? null), "header", [], "any", false, false, false, 9), "secondary_url", [], "any", false, false, false, 9), "availability" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 10
($context["page"] ?? null), "header", [], "any", false, false, false, 10), "availability", [], "any", false, false, false, 10)]));
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/cta.html.twig";
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
        return array (  54 => 10,  53 => 9,  52 => 8,  51 => 7,  50 => 6,  49 => 5,  48 => 4,  47 => 3,  46 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% include \x27partials/cta-band.html.twig\x27 with {
    eyebrow: page.header.eyebrow,
    heading: page.header.heading,
    text: page.header.text,
    note: page.header.note,
    primary_label: page.header.primary_label,
    primary_url: page.header.primary_url,
    secondary_label: page.header.secondary_label,
    secondary_url: page.header.secondary_url,
    availability: page.header.availability
} %}
", "modular/cta.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\modular\\cta.html.twig");
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
