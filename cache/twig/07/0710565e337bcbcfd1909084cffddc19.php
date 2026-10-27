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

/* partials/footer.html.twig */
class __TwigTemplate_82e08e035d45e9aa0649a738d9c5e7d2_sourced extends Template
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
        yield "<footer class=\"site-footer\">
    <div class=\"container site-footer__inner\">
        <div class=\"site-footer__grid\">
            <div class=\"site-footer__brand\">
                <a class=\"brand brand--light\" href=\"";
        // line 6
        yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
        yield "\">
                    <span class=\"brand__mark\" aria-hidden=\"true\">AB</span>
                    <span class=\"brand__text\">
                        <strong>";
        // line 9
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "</strong>
                        <small>английский · экзамены</small>
                    </span>
                </a>
                <p class=\"site-footer__claim\">Английский для жизни и экзаменов.<br>Москва и онлайн по всему миру.</p>
                <div class=\"socials\" aria-label=\"Социальные сети\">
                    <a href=\"";
        // line 15
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 15), "telegram_url", [], "any", false, false, false, 15), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\" aria-label=\"Telegram\">
                        ";
        // line 16
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(16))->call("icon", ["telegram", "icon"], $context, 16, $this->source);
        yield "
                    </a>
                    <a href=\"";
        // line 18
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 18), "whatsapp", [], "any", false, false, false, 18), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\" aria-label=\"WhatsApp\">
                        ";
        // line 19
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(19))->call("icon", ["whatsapp", "icon"], $context, 19, $this->source);
        yield "
                    </a>
                    <a href=\"mailto:";
        // line 21
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 21), "email", [], "any", false, false, false, 21), "html", null, true);
        yield "\" aria-label=\"Написать на почту\">
                        ";
        // line 22
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(22))->call("icon", ["mail", "icon"], $context, 22, $this->source);
        yield "
                    </a>
                </div>
            </div>

            <nav class=\"site-footer__col\" aria-label=\"Разделы сайта\">
                <h2>Разделы</h2>
                <ul>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 30), "visible", [], "any", false, false, false, 30), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "home", [], "any", false, false, true, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp); }));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            yield "                    <li><a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 31), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "menu", [], "any", false, false, false, 31), "html", null, true);
            yield "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 33
        yield "                </ul>
            </nav>

            <nav class=\"site-footer__col\" aria-label=\"Программы обучения\">
                <h2>Программы</h2>
                <ul>
                    <li><a href=\"";
        // line 39
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/services#general\">Общий английский</a></li>
                    <li><a href=\"";
        // line 40
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/services#exams\">ЕГЭ и ОГЭ</a></li>
                    <li><a href=\"";
        // line 41
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/services#ielts\">IELTS и TOEFL</a></li>
                    <li><a href=\"";
        // line 42
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/services#business\">Business English</a></li>
                </ul>
            </nav>

            <div class=\"site-footer__col site-footer__contacts\">
                <h2>Связаться</h2>
                <ul>
                    <li>
                        ";
        // line 50
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(50))->call("icon", ["mail", "icon icon--sm"], $context, 50, $this->source);
        yield "
                        <a href=\"mailto:";
        // line 51
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
        yield "</a>
                    </li>
                    <li>
                        ";
        // line 54
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(54))->call("icon", ["telegram", "icon icon--sm"], $context, 54, $this->source);
        yield "
                        <a href=\"";
        // line 55
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 55), "telegram_url", [], "any", false, false, false, 55), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\">@";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 55), "telegram", [], "any", false, false, false, 55), "html", null, true);
        yield "</a>
                    </li>
                    <li>
                        ";
        // line 58
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(58))->call("icon", ["phone", "icon icon--sm"], $context, 58, $this->source);
        yield "
                        <a href=\"tel:";
        // line 59
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 59), "phone_href", [], "any", false, false, false, 59), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 59), "phone", [], "any", false, false, false, 59), "html", null, true);
        yield "</a>
                    </li>
                    <li>
                        ";
        // line 62
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(62))->call("icon", ["pin", "icon icon--sm"], $context, 62, $this->source);
        yield "
                        <span>";
        // line 63
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "contact", [], "any", false, false, false, 63), "location", [], "any", false, false, false, 63), "html", null, true);
        yield "</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class=\"site-footer__bottom\">
            <p>© <span data-year>2026</span> ";
        // line 70
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 70), "html", null, true);
        yield ". Все права защищены.</p>
            <p class=\"site-footer__legal\">
                <a href=\"";
        // line 72
        yield (string) $this->escaper->escape(($context["base_url_relative"] ?? null), "html", null, true);
        yield "/privacy\">Политика конфиденциальности</a>
                <span aria-hidden=\"true\">·</span>
                <span>Сайт работает на Grav</span>
            </p>
        </div>
    </div>
    ";
        // line 78
        yield from $this->load("partials/skyline.html.twig", 78)->unwrap()->yield($context);
        // line 79
        yield "</footer>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
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
        return array (  217 => 79,  215 => 78,  206 => 72,  201 => 70,  191 => 63,  187 => 62,  179 => 59,  175 => 58,  167 => 55,  163 => 54,  155 => 51,  151 => 50,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  120 => 33,  108 => 31,  104 => 30,  93 => 22,  89 => 21,  84 => 19,  80 => 18,  75 => 16,  71 => 15,  62 => 9,  56 => 6,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/icons.html.twig\x27 as ui %}
<footer class=\"site-footer\">
    <div class=\"container site-footer__inner\">
        <div class=\"site-footer__grid\">
            <div class=\"site-footer__brand\">
                <a class=\"brand brand--light\" href=\"{{ base_url_relative ?: \x27/\x27 }}\">
                    <span class=\"brand__mark\" aria-hidden=\"true\">AB</span>
                    <span class=\"brand__text\">
                        <strong>{{ site.title }}</strong>
                        <small>английский · экзамены</small>
                    </span>
                </a>
                <p class=\"site-footer__claim\">Английский для жизни и экзаменов.<br>Москва и онлайн по всему миру.</p>
                <div class=\"socials\" aria-label=\"Социальные сети\">
                    <a href=\"{{ site.contact.telegram_url }}\" target=\"_blank\" rel=\"noopener\" aria-label=\"Telegram\">
                        {{ ui.icon(\x27telegram\x27, \x27icon\x27) }}
                    </a>
                    <a href=\"{{ site.contact.whatsapp }}\" target=\"_blank\" rel=\"noopener\" aria-label=\"WhatsApp\">
                        {{ ui.icon(\x27whatsapp\x27, \x27icon\x27) }}
                    </a>
                    <a href=\"mailto:{{ site.contact.email }}\" aria-label=\"Написать на почту\">
                        {{ ui.icon(\x27mail\x27, \x27icon\x27) }}
                    </a>
                </div>
            </div>

            <nav class=\"site-footer__col\" aria-label=\"Разделы сайта\">
                <h2>Разделы</h2>
                <ul>
                    {% for item in (pages.children.visible)|filter(item => not item.home) %}
                    <li><a href=\"{{ item.url }}\">{{ item.menu }}</a></li>
                    {% endfor %}
                </ul>
            </nav>

            <nav class=\"site-footer__col\" aria-label=\"Программы обучения\">
                <h2>Программы</h2>
                <ul>
                    <li><a href=\"{{ base_url_relative }}/services#general\">Общий английский</a></li>
                    <li><a href=\"{{ base_url_relative }}/services#exams\">ЕГЭ и ОГЭ</a></li>
                    <li><a href=\"{{ base_url_relative }}/services#ielts\">IELTS и TOEFL</a></li>
                    <li><a href=\"{{ base_url_relative }}/services#business\">Business English</a></li>
                </ul>
            </nav>

            <div class=\"site-footer__col site-footer__contacts\">
                <h2>Связаться</h2>
                <ul>
                    <li>
                        {{ ui.icon(\x27mail\x27, \x27icon icon--sm\x27) }}
                        <a href=\"mailto:{{ site.contact.email }}\">{{ site.contact.email }}</a>
                    </li>
                    <li>
                        {{ ui.icon(\x27telegram\x27, \x27icon icon--sm\x27) }}
                        <a href=\"{{ site.contact.telegram_url }}\" target=\"_blank\" rel=\"noopener\">@{{ site.contact.telegram }}</a>
                    </li>
                    <li>
                        {{ ui.icon(\x27phone\x27, \x27icon icon--sm\x27) }}
                        <a href=\"tel:{{ site.contact.phone_href }}\">{{ site.contact.phone }}</a>
                    </li>
                    <li>
                        {{ ui.icon(\x27pin\x27, \x27icon icon--sm\x27) }}
                        <span>{{ site.contact.location }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class=\"site-footer__bottom\">
            <p>© <span data-year>2026</span> {{ site.title }}. Все права защищены.</p>
            <p class=\"site-footer__legal\">
                <a href=\"{{ base_url_relative }}/privacy\">Политика конфиденциальности</a>
                <span aria-hidden=\"true\">·</span>
                <span>Сайт работает на Grav</span>
            </p>
        </div>
    </div>
    {% include \x27partials/skyline.html.twig\x27 %}
</footer>
", "partials/footer.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\partials\\footer.html.twig");
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
