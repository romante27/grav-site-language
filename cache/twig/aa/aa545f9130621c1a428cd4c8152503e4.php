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

/* partials/schema.html.twig */
class __TwigTemplate_168ab3fb6652cf06f6bc234d6bd0b05b_sourced extends Template
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
        $context["base"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("/", true);
        // line 2
        $context["person_id"] = (($context["base"] ?? null) . "#person");
        // line 3
        $context["website_id"] = (($context["base"] ?? null) . "#website");
        // line 4
        $context["canonical"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 4);
        // line 5
        $context["web_description"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 5), "metadata", [], "any", false, true, false, 5), "description", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 5), "metadata", [], "any", false, false, false, 5), "description", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 5), "description", [], "any", false, false, false, 5))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "metadata", [], "any", false, false, false, 5), "description", [], "any", false, false, false, 5)));
        // line 6
        $context["page_type"] = "WebPage";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 7) == "about")) {
            $context["page_type"] = "AboutPage";
        }
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 8) == "contact")) {
            $context["page_type"] = "ContactPage";
        }
        // line 9
        yield "
";
        // line 10
        $context["graph"] = [["@type" => "WebSite", "@id" =>         // line 13
($context["website_id"] ?? null), "url" =>         // line 14
($context["base"] ?? null), "name" => CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["site"] ?? null), "title", [], "any", false, false, false, 15), "description" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 16
($context["site"] ?? null), "metadata", [], "any", false, false, false, 16), "description", [], "any", false, false, false, 16), "inLanguage" => "ru-RU", "publisher" => ["@id" =>         // line 18
($context["person_id"] ?? null)]], ["@type" => "Person", "@id" =>         // line 22
($context["person_id"] ?? null), "name" => CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["site"] ?? null), "title", [], "any", false, false, false, 23), "jobTitle" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["site"] ?? null), "schema", [], "any", false, false, false, 24), "job_title", [], "any", false, false, false, 24), "url" =>         // line 25
($context["base"] ?? null), "image" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/og-default.png", true), "email" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 27
($context["site"] ?? null), "contact", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), "telephone" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["site"] ?? null), "contact", [], "any", false, false, false, 28), "phone_href", [], "any", false, false, false, 28), "knowsLanguage" => ["ru", "en"], "alumniOf" => ["@type" => "CollegeOrUniversity", "name" => "МГУ им. М. В. Ломоносова"], "hasCredential" => ["@type" => "EducationalOccupationalCredential", "credentialCategory" => "CELTA, Cambridge"], "sameAs" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["site"] ?? null), "schema", [], "any", false, false, false, 32), "same_as", [], "any", false, false, false, 32)], ["@type" =>         // line 35
($context["page_type"] ?? null), "@id" => (        // line 36
($context["canonical"] ?? null) . "#page"), "url" =>         // line 37
($context["canonical"] ?? null), "name" => CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["page"] ?? null), "title", [], "any", false, false, false, 38), "description" =>         // line 39
($context["web_description"] ?? null), "inLanguage" => "ru-RU", "isPartOf" => ["@id" =>         // line 41
($context["website_id"] ?? null)], "about" => ["@id" =>         // line 42
($context["person_id"] ?? null)]]];
        // line 45
        yield "
";
        // line 46
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "    ";
            $context["crumbs"] = [["@type" => "ListItem", "position" => 1, "name" => "Главная", "item" =>             // line 48
($context["base"] ?? null)], ["@type" => "ListItem", "position" => 2, "name" => CoreExtension::getAttribute($this->env, $this->source,             // line 49
($context["page"] ?? null), "title", [], "any", false, false, false, 49), "item" => ($context["canonical"] ?? null)]];
            // line 51
            yield "    ";
            $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => "BreadcrumbList", "@id" => (            // line 53
($context["canonical"] ?? null) . "#breadcrumb"), "itemListElement" =>             // line 54
($context["crumbs"] ?? null)]]);
        }
        // line 57
        yield "
";
        // line 58
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "    ";
            $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => "ProfessionalService", "@id" => (            // line 61
($context["base"] ?? null) . "#service"), "name" => (CoreExtension::getAttribute($this->env, $this->source,             // line 62
($context["site"] ?? null), "title", [], "any", false, false, false, 62) . " — преподаватель английского языка"), "description" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 63
($context["site"] ?? null), "metadata", [], "any", false, false, false, 63), "description", [], "any", false, false, false, 63), "url" =>             // line 64
($context["base"] ?? null), "image" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/og-default.png", true), "email" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 66
($context["site"] ?? null), "contact", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), "telephone" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 67
($context["site"] ?? null), "contact", [], "any", false, false, false, 67), "phone_href", [], "any", false, false, false, 67), "priceRange" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 68
($context["site"] ?? null), "schema", [], "any", false, false, false, 68), "price_range", [], "any", false, false, false, 68), "areaServed" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["site"] ?? null), "schema", [], "any", false, false, false, 69), "area_served", [], "any", false, false, false, 69), "address" => ["@type" => "PostalAddress", "addressLocality" => "Москва", "addressCountry" => "RU"], "founder" => ["@id" =>             // line 71
($context["person_id"] ?? null)], "sameAs" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 72
($context["site"] ?? null), "schema", [], "any", false, false, false, 72), "same_as", [], "any", false, false, false, 72), "knowsLanguage" => ["ru", "en"]]]);
        }
        // line 76
        yield "
";
        // line 77
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 77) == "services") || (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 77) == "exams"))) {
            // line 78
            yield "    ";
            $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => "Service", "@id" => (            // line 80
($context["canonical"] ?? null) . "#service"), "name" => CoreExtension::getAttribute($this->env, $this->source,             // line 81
($context["page"] ?? null), "title", [], "any", false, false, false, 81), "serviceType" => "Обучение английскому языку и подготовка к экзаменам", "description" =>             // line 83
($context["web_description"] ?? null), "provider" => ["@id" =>             // line 84
($context["person_id"] ?? null)], "areaServed" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 85
($context["site"] ?? null), "schema", [], "any", false, false, false, 85), "area_served", [], "any", false, false, false, 85), "offers" => ["@type" => "Offer", "priceCurrency" => "RUB", "price" => "3500", "description" => "Индивидуальное занятие, 60 минут"]]]);
        }
        // line 94
        yield "
";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 95) == "item")) {
            // line 96
            yield "    ";
            $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => "BlogPosting", "@id" => (            // line 98
($context["canonical"] ?? null) . "#article"), "headline" => CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["page"] ?? null), "title", [], "any", false, false, false, 99), "description" =>             // line 100
($context["web_description"] ?? null), "datePublished" => $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,             // line 101
($context["page"] ?? null), "date", [], "any", false, false, false, 101), "c"), "dateModified" => $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["page"] ?? null), "modified", [], "any", false, false, false, 102), "c"), "inLanguage" => "ru-RU", "mainEntityOfPage" => ["@id" => (            // line 104
($context["canonical"] ?? null) . "#page")], "image" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/og-default.png", true), "author" => ["@id" =>             // line 106
($context["person_id"] ?? null)], "publisher" => ["@id" =>             // line 107
($context["person_id"] ?? null)]]]);
        }
        // line 110
        yield "
<script type=\"application/ld+json\">";
        // line 111
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, ["@context" => "https://schema.org", "@graph" => ($context["graph"] ?? null)]);
        yield "</script>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/schema.html.twig";
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
        return array (  158 => 111,  155 => 110,  152 => 107,  151 => 106,  150 => 104,  149 => 102,  148 => 101,  147 => 100,  146 => 99,  145 => 98,  143 => 96,  141 => 95,  138 => 94,  135 => 85,  134 => 84,  133 => 83,  132 => 81,  131 => 80,  129 => 78,  127 => 77,  124 => 76,  121 => 72,  120 => 71,  119 => 69,  118 => 68,  117 => 67,  116 => 66,  115 => 64,  114 => 63,  113 => 62,  112 => 61,  110 => 59,  108 => 58,  105 => 57,  102 => 54,  101 => 53,  99 => 51,  97 => 49,  96 => 48,  94 => 47,  92 => 46,  89 => 45,  87 => 42,  86 => 41,  85 => 39,  84 => 38,  83 => 37,  82 => 36,  81 => 35,  80 => 32,  79 => 28,  78 => 27,  77 => 25,  76 => 24,  75 => 23,  74 => 22,  73 => 18,  72 => 16,  71 => 15,  70 => 14,  69 => 13,  68 => 10,  65 => 9,  61 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set base = url(\x27/\x27, true) %}
{% set person_id = base ~ \x27#person\x27 %}
{% set website_id = base ~ \x27#website\x27 %}
{% set canonical = page.url(true, true) %}
{% set web_description = page.header.metadata.description|default(site.metadata.description) %}
{% set page_type = \x27WebPage\x27 %}
{% if page.template == \x27about\x27 %}{% set page_type = \x27AboutPage\x27 %}{% endif %}
{% if page.template == \x27contact\x27 %}{% set page_type = \x27ContactPage\x27 %}{% endif %}

{% set graph = [
    {
        \x27@type\x27: \x27WebSite\x27,
        \x27@id\x27: website_id,
        \x27url\x27: base,
        \x27name\x27: site.title,
        \x27description\x27: site.metadata.description,
        \x27inLanguage\x27: \x27ru-RU\x27,
        \x27publisher\x27: {\x27@id\x27: person_id}
    },
    {
        \x27@type\x27: \x27Person\x27,
        \x27@id\x27: person_id,
        \x27name\x27: site.title,
        \x27jobTitle\x27: site.schema.job_title,
        \x27url\x27: base,
        \x27image\x27: url(\x27theme://images/og-default.png\x27, true),
        \x27email\x27: site.contact.email,
        \x27telephone\x27: site.contact.phone_href,
        \x27knowsLanguage\x27: [\x27ru\x27, \x27en\x27],
        \x27alumniOf\x27: {\x27@type\x27: \x27CollegeOrUniversity\x27, \x27name\x27: \x27МГУ им. М. В. Ломоносова\x27},
        \x27hasCredential\x27: {\x27@type\x27: \x27EducationalOccupationalCredential\x27, \x27credentialCategory\x27: \x27CELTA, Cambridge\x27},
        \x27sameAs\x27: site.schema.same_as
    },
    {
        \x27@type\x27: page_type,
        \x27@id\x27: canonical ~ \x27#page\x27,
        \x27url\x27: canonical,
        \x27name\x27: page.title,
        \x27description\x27: web_description,
        \x27inLanguage\x27: \x27ru-RU\x27,
        \x27isPartOf\x27: {\x27@id\x27: website_id},
        \x27about\x27: {\x27@id\x27: person_id}
    }
] %}

{% if not page.home %}
    {% set crumbs = [
        {\x27@type\x27: \x27ListItem\x27, \x27position\x27: 1, \x27name\x27: \x27Главная\x27, \x27item\x27: base},
        {\x27@type\x27: \x27ListItem\x27, \x27position\x27: 2, \x27name\x27: page.title, \x27item\x27: canonical}
    ] %}
    {% set graph = graph|merge([{
        \x27@type\x27: \x27BreadcrumbList\x27,
        \x27@id\x27: canonical ~ \x27#breadcrumb\x27,
        \x27itemListElement\x27: crumbs
    }]) %}
{% endif %}

{% if page.home %}
    {% set graph = graph|merge([{
        \x27@type\x27: \x27ProfessionalService\x27,
        \x27@id\x27: base ~ \x27#service\x27,
        \x27name\x27: site.title ~ \x27 — преподаватель английского языка\x27,
        \x27description\x27: site.metadata.description,
        \x27url\x27: base,
        \x27image\x27: url(\x27theme://images/og-default.png\x27, true),
        \x27email\x27: site.contact.email,
        \x27telephone\x27: site.contact.phone_href,
        \x27priceRange\x27: site.schema.price_range,
        \x27areaServed\x27: site.schema.area_served,
        \x27address\x27: {\x27@type\x27: \x27PostalAddress\x27, \x27addressLocality\x27: \x27Москва\x27, \x27addressCountry\x27: \x27RU\x27},
        \x27founder\x27: {\x27@id\x27: person_id},
        \x27sameAs\x27: site.schema.same_as,
        \x27knowsLanguage\x27: [\x27ru\x27, \x27en\x27]
    }]) %}
{% endif %}

{% if page.template == \x27services\x27 or page.template == \x27exams\x27 %}
    {% set graph = graph|merge([{
        \x27@type\x27: \x27Service\x27,
        \x27@id\x27: canonical ~ \x27#service\x27,
        \x27name\x27: page.title,
        \x27serviceType\x27: \x27Обучение английскому языку и подготовка к экзаменам\x27,
        \x27description\x27: web_description,
        \x27provider\x27: {\x27@id\x27: person_id},
        \x27areaServed\x27: site.schema.area_served,
        \x27offers\x27: {
            \x27@type\x27: \x27Offer\x27,
            \x27priceCurrency\x27: \x27RUB\x27,
            \x27price\x27: \x273500\x27,
            \x27description\x27: \x27Индивидуальное занятие, 60 минут\x27
        }
    }]) %}
{% endif %}

{% if page.template == \x27item\x27 %}
    {% set graph = graph|merge([{
        \x27@type\x27: \x27BlogPosting\x27,
        \x27@id\x27: canonical ~ \x27#article\x27,
        \x27headline\x27: page.title,
        \x27description\x27: web_description,
        \x27datePublished\x27: page.date|date(\x27c\x27),
        \x27dateModified\x27: page.modified|date(\x27c\x27),
        \x27inLanguage\x27: \x27ru-RU\x27,
        \x27mainEntityOfPage\x27: {\x27@id\x27: canonical ~ \x27#page\x27},
        \x27image\x27: url(\x27theme://images/og-default.png\x27, true),
        \x27author\x27: {\x27@id\x27: person_id},
        \x27publisher\x27: {\x27@id\x27: person_id}
    }]) %}
{% endif %}

<script type=\"application/ld+json\">{{ {\x27@context\x27: \x27https://schema.org\x27, \x27@graph\x27: graph}|json_encode|raw }}</script>
", "partials/schema.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\partials\\schema.html.twig");
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
