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

/* partials/base.html.twig */
class __TwigTemplate_cb86a2983cff063f4d64804a10d8e8ad_sourced extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["meta"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 1), "metadata", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 1), "metadata", [], "any", false, false, false, 1), [])) : ([]));
        // line 2
        $context["site_description"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, true, false, 2), "description", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 2), "description", [], "any", false, false, false, 2), "Английский язык для жизни и экзаменов.")) : ("Английский язык для жизни и экзаменов."));
        // line 3
        $context["description"] = Twig\Extension\CoreExtension::default(((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3), "description", [], "any", false, false, false, 3))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3), "description", [], "any", false, false, false, 3))), ($context["site_description"] ?? null));
        // line 4
        $context["canonical"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 4);
        // line 5
        $context["og_image"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/og-default.png", true);
        // line 6
        $context["og_type"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "og_type", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "og_type", [], "any", false, false, false, 6), (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 6) == "item")) ? ("article") : ("website")))) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 6) == "item")) ? ("article") : ("website"))));
        // line 7
        $context["robots"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["meta"] ?? null), "robots", [], "any", false, false, false, 7), "index, follow, max-image-preview:large")) : ("index, follow, max-image-preview:large"));
        // line 8
        $context["page_title"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 8), "meta_title", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 8) . " — преподаватель английского языка")) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 8) . " — ") . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 8)))))) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 8) . " — преподаватель английского языка")) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 8) . " — ") . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 8))))));
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 9) == "error")) {
            // line 10
            yield "    ";
            $context["robots"] = "noindex, nofollow";
            // line 11
            yield "    ";
            $context["page_title"] = ("Страница не найдена — " . CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 11));
        }
        // line 13
        yield "<!DOCTYPE html>
<html lang=\"ru\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <script>document.documentElement.classList.remove(\x27no-js\x27);document.documentElement.classList.add(\x27js\x27);</script>

    <title>";
        // line 22
        yield (string) $this->escaper->escape(($context["page_title"] ?? null));
        yield "</title>
    <meta name=\"description\" content=\"";
        // line 23
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(($context["description"] ?? null))), "html_attr");
        yield "\">
    <meta name=\"robots\" content=\"";
        // line 24
        yield (string) $this->escaper->escape(($context["robots"] ?? null), "html_attr");
        yield "\">
    <meta name=\"author\" content=\"";
        // line 25
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 25), "name", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 25))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 25))), "html_attr");
        yield "\">
    <meta name=\"theme-color\" content=\"#F7F2E8\">
    <meta name=\"format-detection\" content=\"telephone=no\">

    ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 29) != "error")) {
            yield "<link rel=\"canonical\" href=\"";
            yield (string) $this->escaper->escape(($context["canonical"] ?? null), "html", null, true);
            yield "\">";
        }
        // line 30
        yield "    <link rel=\"icon\" type=\"image/svg+xml\" href=\"";
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.svg"), "html", null, true);
        yield "\">

    <link rel=\"preload\" href=\"";
        // line 32
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/source-sans/source-sans-cyrillic-normal.woff2"), "html", null, true);
        yield "\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" href=\"";
        // line 33
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/playfair/playfair-cyrillic-normal.woff2"), "html", null, true);
        yield "\" as=\"font\" type=\"font/woff2\" crossorigin>

    <meta property=\"og:locale\" content=\"ru_RU\">
    <meta property=\"og:type\" content=\"";
        // line 36
        yield (string) $this->escaper->escape(($context["og_type"] ?? null), "html_attr");
        yield "\">
    <meta property=\"og:site_name\" content=\"";
        // line 37
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 37), "html_attr");
        yield "\">
    <meta property=\"og:title\" content=\"";
        // line 38
        yield (string) $this->escaper->escape(($context["page_title"] ?? null), "html_attr");
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 39
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(($context["description"] ?? null))), "html_attr");
        yield "\">
    <meta property=\"og:url\" content=\"";
        // line 40
        yield (string) $this->escaper->escape(($context["canonical"] ?? null), "html", null, true);
        yield "\">
    <meta property=\"og:image\" content=\"";
        // line 41
        yield (string) $this->escaper->escape(($context["og_image"] ?? null), "html", null, true);
        yield "\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"630\">
    <meta property=\"og:image:alt\" content=\"Анна Белова — преподаватель английского языка\">
    ";
        // line 45
        if ((($context["og_type"] ?? null) == "article")) {
            // line 46
            yield "    <meta property=\"article:published_time\" content=\"";
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 46), "c"), "html", null, true);
            yield "\">
    <meta property=\"article:author\" content=\"";
            // line 47
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html_attr");
            yield "\">
    ";
        }
        // line 49
        yield "
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"";
        // line 51
        yield (string) $this->escaper->escape(($context["page_title"] ?? null), "html_attr");
        yield "\">
    <meta name=\"twitter:description\" content=\"";
        // line 52
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(($context["description"] ?? null))), "html_attr");
        yield "\">
    <meta name=\"twitter:image\" content=\"";
        // line 53
        yield (string) $this->escaper->escape(($context["og_image"] ?? null), "html", null, true);
        yield "\">

    ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 55) != "error")) {
            // line 56
            yield "        ";
            yield from $this->load("partials/schema.html.twig", 56)->unwrap()->yield($context);
            // line 57
            yield "    ";
        }
        // line 58
        yield "
    ";
        // line 59
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 63
        yield "    ";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 63);
        yield "

    ";
        // line 65
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 68
        yield "</head>
<body class=\"page-";
        // line 69
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 69), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " is-home";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 69), "body_classes", [], "any", true, true, false, 69)) {
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 69), "body_classes", [], "any", false, false, false, 69), "html", null, true);
        }
        yield "\">
    <a class=\"skip-link\" href=\"#main\">Перейти к содержанию</a>

    ";
        // line 72
        yield from $this->load("partials/header.html.twig", 72)->unwrap()->yield($context);
        // line 73
        yield "
    <main id=\"main\">
        ";
        // line 75
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 76
        yield "    </main>

    ";
        // line 78
        yield from $this->load("partials/footer.html.twig", 78)->unwrap()->yield($context);
        // line 79
        yield "
    ";
        // line 80
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 80);
        yield "
</body>
</html>
";
        return; yield;
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/fonts.css", 100], "method", false, false, false, 60);
        // line 61
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/main.css", 90], "method", false, false, false, 61);
        // line 62
        yield "    ";
        return; yield;
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/main.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 66);
        // line 67
        yield "    ";
        return; yield;
    }

    // line 75
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
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
        return array (  280 => 75,  275 => 67,  272 => 66,  265 => 65,  260 => 62,  257 => 61,  254 => 60,  247 => 59,  238 => 80,  235 => 79,  233 => 78,  229 => 76,  227 => 75,  223 => 73,  221 => 72,  208 => 69,  205 => 68,  203 => 65,  197 => 63,  195 => 59,  192 => 58,  189 => 57,  186 => 56,  184 => 55,  179 => 53,  175 => 52,  171 => 51,  167 => 49,  162 => 47,  157 => 46,  155 => 45,  148 => 41,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  128 => 36,  122 => 33,  118 => 32,  112 => 30,  106 => 29,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  76 => 13,  72 => 11,  69 => 10,  67 => 9,  65 => 8,  63 => 7,  61 => 6,  59 => 5,  57 => 4,  55 => 3,  53 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set meta = page.header.metadata|default({}) %}
{% set site_description = site.metadata.description|default(\x27Английский язык для жизни и экзаменов.\x27) %}
{% set description = meta.description|default(page.header.description)|default(site_description) %}
{% set canonical = page.url(true, true) %}
{% set og_image = url(\x27theme://images/og-default.png\x27, true) %}
{% set og_type = meta.og_type|default(page.template == \x27item\x27 ? \x27article\x27 : \x27website\x27) %}
{% set robots = meta.robots|default(\x27index, follow, max-image-preview:large\x27) %}
{% set page_title = page.header.meta_title|default(page.home ? site.title ~ \x27 — преподаватель английского языка\x27 : page.title ~ \x27 — \x27 ~ site.title) %}
{% if page.template == \x27error\x27 %}
    {% set robots = \x27noindex, nofollow\x27 %}
    {% set page_title = \x27Страница не найдена — \x27 ~ site.title %}
{% endif %}
<!DOCTYPE html>
<html lang=\"ru\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <script>document.documentElement.classList.remove(\x27no-js\x27);document.documentElement.classList.add(\x27js\x27);</script>

    <title>{{ page_title|e }}</title>
    <meta name=\"description\" content=\"{{ description|striptags|trim|e(\x27html_attr\x27) }}\">
    <meta name=\"robots\" content=\"{{ robots|e(\x27html_attr\x27) }}\">
    <meta name=\"author\" content=\"{{ site.author.name|default(site.title)|e(\x27html_attr\x27) }}\">
    <meta name=\"theme-color\" content=\"#F7F2E8\">
    <meta name=\"format-detection\" content=\"telephone=no\">

    {% if page.template != \x27error\x27 %}<link rel=\"canonical\" href=\"{{ canonical }}\">{% endif %}
    <link rel=\"icon\" type=\"image/svg+xml\" href=\"{{ url(\x27theme://images/favicon.svg\x27) }}\">

    <link rel=\"preload\" href=\"{{ url(\x27theme://fonts/source-sans/source-sans-cyrillic-normal.woff2\x27) }}\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" href=\"{{ url(\x27theme://fonts/playfair/playfair-cyrillic-normal.woff2\x27) }}\" as=\"font\" type=\"font/woff2\" crossorigin>

    <meta property=\"og:locale\" content=\"ru_RU\">
    <meta property=\"og:type\" content=\"{{ og_type|e(\x27html_attr\x27) }}\">
    <meta property=\"og:site_name\" content=\"{{ site.title|e(\x27html_attr\x27) }}\">
    <meta property=\"og:title\" content=\"{{ page_title|e(\x27html_attr\x27) }}\">
    <meta property=\"og:description\" content=\"{{ description|striptags|trim|e(\x27html_attr\x27) }}\">
    <meta property=\"og:url\" content=\"{{ canonical }}\">
    <meta property=\"og:image\" content=\"{{ og_image }}\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"630\">
    <meta property=\"og:image:alt\" content=\"Анна Белова — преподаватель английского языка\">
    {% if og_type == \x27article\x27 %}
    <meta property=\"article:published_time\" content=\"{{ page.date|date(\x27c\x27) }}\">
    <meta property=\"article:author\" content=\"{{ site.author.name|e(\x27html_attr\x27) }}\">
    {% endif %}

    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"{{ page_title|e(\x27html_attr\x27) }}\">
    <meta name=\"twitter:description\" content=\"{{ description|striptags|trim|e(\x27html_attr\x27) }}\">
    <meta name=\"twitter:image\" content=\"{{ og_image }}\">

    {% if page.template != \x27error\x27 %}
        {% include \x27partials/schema.html.twig\x27 %}
    {% endif %}

    {% block stylesheets %}
        {% do assets.addCss(\x27theme://css/fonts.css\x27, 100) %}
        {% do assets.addCss(\x27theme://css/main.css\x27, 90) %}
    {% endblock %}
    {{ assets.css()|raw }}

    {% block javascripts %}
        {% do assets.addJs(\x27theme://js/main.js\x27, {group: \x27bottom\x27, loading: \x27defer\x27}) %}
    {% endblock %}
</head>
<body class=\"page-{{ page.template }}{% if page.home %} is-home{% endif %}{% if page.header.body_classes is defined %} {{ page.header.body_classes }}{% endif %}\">
    <a class=\"skip-link\" href=\"#main\">Перейти к содержанию</a>

    {% include \x27partials/header.html.twig\x27 %}

    <main id=\"main\">
        {% block content %}{% endblock %}
    </main>

    {% include \x27partials/footer.html.twig\x27 %}

    {{ assets.js(\x27bottom\x27)|raw }}
</body>
</html>
", "partials/base.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\partials\\base.html.twig");
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
