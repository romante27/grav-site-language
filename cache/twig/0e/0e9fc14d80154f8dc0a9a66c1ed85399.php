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

/* partials/header.html.twig */
class __TwigTemplate_e284d9dda1d660c434f02b3a76b2f56e_sourced extends Template
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
        yield "<header class=\"site-header\" data-header>
    <div class=\"container site-header__inner\">
        <a class=\"brand\" href=\"";
        // line 4
        yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
        yield "\" aria-label=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        yield " — на главную\">
            <span class=\"brand__mark\" aria-hidden=\"true\">AB</span>
            <span class=\"brand__text\">
                <strong>";
        // line 7
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</strong>
                <small>английский · экзамены</small>
            </span>
        </a>

        <nav class=\"primary-nav\" aria-label=\"Основная навигация\">
            <ul>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 14), "visible", [], "any", false, false, false, 14), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "home", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp); }));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            yield "                <li>
                    <a href=\"";
            // line 16
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 16), "html", null, true);
            yield "\"";
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "activeChild", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                yield " class=\"is-active\" aria-current=\"page\"";
            }
            yield ">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "menu", [], "any", false, false, false, 16), "html", null, true);
            yield "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 19
        yield "            </ul>
        </nav>

        <div class=\"site-header__actions\">
            <a class=\"btn btn--small btn--primary header-cta\" href=\"";
        // line 23
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/contact\">
                <span>Пробный урок</span>
                ";
        // line 25
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(25))->call("icon", ["arrow-up-right", "icon icon--sm"], $context, 25, $this->source);
        yield "
            </a>
            <button class=\"menu-toggle\" type=\"button\" data-menu-open aria-controls=\"mobile-menu\" aria-expanded=\"false\">
                <span class=\"menu-toggle__label\">Меню</span>
                ";
        // line 29
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(29))->call("icon", ["menu", "icon"], $context, 29, $this->source);
        yield "
            </button>
        </div>
    </div>
</header>

<dialog class=\"mobile-menu\" id=\"mobile-menu\" aria-label=\"Меню сайта\">
    <div class=\"mobile-menu__inner\">
        <div class=\"mobile-menu__top\">
            <a class=\"brand brand--light\" href=\"";
        // line 38
        yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
        yield "\">
                <span class=\"brand__mark\" aria-hidden=\"true\">AB</span>
                <span class=\"brand__text\">
                    <strong>";
        // line 41
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 41), "html", null, true);
        yield "</strong>
                    <small>английский · экзамены</small>
                </span>
            </a>
            <button class=\"mobile-menu__close\" type=\"button\" data-menu-close aria-label=\"Закрыть меню\" autofocus>
                ";
        // line 46
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(46))->call("icon", ["close", "icon"], $context, 46, $this->source);
        yield "
            </button>
        </div>

        <nav class=\"mobile-menu__nav\" aria-label=\"Мобильная навигация\">
            <ul>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 52), "visible", [], "any", false, false, false, 52), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "home", [], "any", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp); }));
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
            // line 53
            yield "                <li style=\"--i: ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
                    <a href=\"";
            // line 54
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 54), "html", null, true);
            yield "\"";
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "activeChild", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                yield " class=\"is-active\"";
            }
            yield ">
                        <span class=\"mobile-menu__index\">0";
            // line 55
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55), "html", null, true);
            yield "</span>
                        ";
            // line 56
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "menu", [], "any", false, false, false, 56), "html", null, true);
            yield "
                    </a>
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 60
        yield "            </ul>
        </nav>

        <div class=\"mobile-menu__foot\">
            <a class=\"btn btn--primary\" href=\"";
        // line 64
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/contact\">
                <span>Записаться на пробный</span>
                ";
        // line 66
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(66))->call("icon", ["arrow-up-right", "icon icon--sm"], $context, 66, $this->source);
        yield "
            </a>
            <div class=\"mobile-menu__contacts\">
                <a href=\"mailto:";
        // line 69
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 69), "email", [], "any", false, false, false, 69), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 69), "email", [], "any", false, false, false, 69), "html", null, true);
        yield "</a>
                <a href=\"";
        // line 70
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 70), "telegram_url", [], "any", false, false, false, 70), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\">@";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 70), "telegram", [], "any", false, false, false, 70), "html", null, true);
        yield "</a>
            </div>
        </div>
    </div>
</dialog>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.html.twig";
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
        return array (  224 => 70,  218 => 69,  212 => 66,  207 => 64,  201 => 60,  182 => 56,  178 => 55,  170 => 54,  165 => 53,  148 => 52,  139 => 46,  131 => 41,  125 => 38,  113 => 29,  106 => 25,  101 => 23,  95 => 19,  79 => 16,  76 => 15,  72 => 14,  62 => 7,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
<header class=\"site-header\" data-header>
    <div class=\"container site-header__inner\">
        <a class=\"brand\" href=\"{{ base_url_relative ?: \x27/\x27 }}\" aria-label=\"{{ site.title }} — на главную\">
            <span class=\"brand__mark\" aria-hidden=\"true\">AB</span>
            <span class=\"brand__text\">
                <strong>{{ site.title }}</strong>
                <small>английский · экзамены</small>
            </span>
        </a>

        <nav class=\"primary-nav\" aria-label=\"Основная навигация\">
            <ul>
                {% for item in (pages.children.visible)|filter(item => not item.home) %}
                <li>
                    <a href=\"{{ item.url }}\"{% if item.active or item.activeChild %} class=\"is-active\" aria-current=\"page\"{% endif %}>{{ item.menu }}</a>
                </li>
                {% endfor %}
            </ul>
        </nav>

        <div class=\"site-header__actions\">
            <a class=\"btn btn--small btn--primary header-cta\" href=\"{{ base_url_relative }}/contact\">
                <span>Пробный урок</span>
                {{ ui.icon(\x27arrow-up-right\x27, \x27icon icon--sm\x27) }}
            </a>
            <button class=\"menu-toggle\" type=\"button\" data-menu-open aria-controls=\"mobile-menu\" aria-expanded=\"false\">
                <span class=\"menu-toggle__label\">Меню</span>
                {{ ui.icon(\x27menu\x27, \x27icon\x27) }}
            </button>
        </div>
    </div>
</header>

<dialog class=\"mobile-menu\" id=\"mobile-menu\" aria-label=\"Меню сайта\">
    <div class=\"mobile-menu__inner\">
        <div class=\"mobile-menu__top\">
            <a class=\"brand brand--light\" href=\"{{ base_url_relative ?: \x27/\x27 }}\">
                <span class=\"brand__mark\" aria-hidden=\"true\">AB</span>
                <span class=\"brand__text\">
                    <strong>{{ site.title }}</strong>
                    <small>английский · экзамены</small>
                </span>
            </a>
            <button class=\"mobile-menu__close\" type=\"button\" data-menu-close aria-label=\"Закрыть меню\" autofocus>
                {{ ui.icon(\x27close\x27, \x27icon\x27) }}
            </button>
        </div>

        <nav class=\"mobile-menu__nav\" aria-label=\"Мобильная навигация\">
            <ul>
                {% for item in (pages.children.visible)|filter(item => not item.home) %}
                <li style=\"--i: {{ loop.index0 }}\">
                    <a href=\"{{ item.url }}\"{% if item.active or item.activeChild %} class=\"is-active\"{% endif %}>
                        <span class=\"mobile-menu__index\">0{{ loop.index }}</span>
                        {{ item.menu }}
                    </a>
                </li>
                {% endfor %}
            </ul>
        </nav>

        <div class=\"mobile-menu__foot\">
            <a class=\"btn btn--primary\" href=\"{{ base_url_relative }}/contact\">
                <span>Записаться на пробный</span>
                {{ ui.icon(\x27arrow-up-right\x27, \x27icon icon--sm\x27) }}
            </a>
            <div class=\"mobile-menu__contacts\">
                <a href=\"mailto:{{ site.contact.email }}\">{{ site.contact.email }}</a>
                <a href=\"{{ site.contact.telegram_url }}\" target=\"_blank\" rel=\"noopener\">@{{ site.contact.telegram }}</a>
            </div>
        </div>
    </div>
</dialog>
", "partials/header.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\partials\\header.html.twig");
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
