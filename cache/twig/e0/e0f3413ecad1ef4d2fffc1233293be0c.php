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

/* error.html.twig */
class __TwigTemplate_0f48f22eda2b45d3611ca1e74df86712_sourced extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("partials/base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/icons.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<section class=\"error-page\">
    <div class=\"container error-page__grid\">
        <div class=\"error-page__content\">
            <p class=\"eyebrow\">Ошибка 404</p>
            <h1>Страница потерялась <em>между Лондоном и Москвой.</em></h1>
            <p class=\"lead\">Возможно, ссылка устарела, а может, в адресе закралась лишняя буква. Давайте вернёмся туда, где всё на месте.</p>
            <div class=\"error-page__actions\">
                <a class=\"btn btn--primary\" href=\"";
        // line 12
        yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
        yield "\">
                    <span>На главную</span>
                    ";
        // line 14
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(14))->call("icon", ["arrow-right", "icon icon--sm"], $context, 14, $this->source);
        yield "
                </a>
                <a class=\"btn btn--ghost\" href=\"";
        // line 16
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/contact\">
                    <span>Написать мне</span>
                </a>
            </div>
            <nav class=\"error-page__links\" aria-label=\"Полезные разделы\">
                <a href=\"";
        // line 21
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/services\">Программы</a>
                <a href=\"";
        // line 22
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/exams\">Экзамены</a>
                <a href=\"";
        // line 23
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/blog\">Блог</a>
            </nav>
        </div>
        <div class=\"error-page__art\" aria-hidden=\"true\">
            <span class=\"error-page__num\">404</span>
            <div class=\"error-page__stamp\">Lost<br>in<br>translation</div>
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
        return "error.html.twig";
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
        return array (  102 => 23,  98 => 22,  94 => 21,  86 => 16,  81 => 14,  76 => 12,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/icons.html.twig\x27 as ui %}

{% block content %}
<section class=\"error-page\">
    <div class=\"container error-page__grid\">
        <div class=\"error-page__content\">
            <p class=\"eyebrow\">Ошибка 404</p>
            <h1>Страница потерялась <em>между Лондоном и Москвой.</em></h1>
            <p class=\"lead\">Возможно, ссылка устарела, а может, в адресе закралась лишняя буква. Давайте вернёмся туда, где всё на месте.</p>
            <div class=\"error-page__actions\">
                <a class=\"btn btn--primary\" href=\"{{ base_url_relative ?: \x27/\x27 }}\">
                    <span>На главную</span>
                    {{ ui.icon(\x27arrow-right\x27, \x27icon icon--sm\x27) }}
                </a>
                <a class=\"btn btn--ghost\" href=\"{{ base_url_relative }}/contact\">
                    <span>Написать мне</span>
                </a>
            </div>
            <nav class=\"error-page__links\" aria-label=\"Полезные разделы\">
                <a href=\"{{ base_url_relative }}/services\">Программы</a>
                <a href=\"{{ base_url_relative }}/exams\">Экзамены</a>
                <a href=\"{{ base_url_relative }}/blog\">Блог</a>
            </nav>
        </div>
        <div class=\"error-page__art\" aria-hidden=\"true\">
            <span class=\"error-page__num\">404</span>
            <div class=\"error-page__stamp\">Lost<br>in<br>translation</div>
        </div>
    </div>
</section>
{% endblock %}
", "error.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\error.html.twig");
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
