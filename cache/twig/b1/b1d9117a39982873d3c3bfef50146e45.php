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

/* macros/icons.html.twig */
class __TwigTemplate_71dd850fbfa452cdbe7c149b4946e55c_sourced extends Template
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
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "icon" => new \Twig\TwigMacro("icon", function ($name = null, $class = "icon", ...$varargs): string|Markup {
                // line 1
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "class" => $class,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 2
                    if ((($context["name"] ?? null) == "arrow-right")) {
                        // line 3
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M4 12h15\"/><path d=\"m13 6 6 6-6 6\"/></svg>";
                    } elseif ((                    // line 4
($context["name"] ?? null) == "arrow-left")) {
                        // line 5
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M20 12H5\"/><path d=\"m11 18-6-6 6-6\"/></svg>";
                    } elseif ((                    // line 6
($context["name"] ?? null) == "arrow-up-right")) {
                        // line 7
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M6 18 18 6\"/><path d=\"M8 6h10v10\"/></svg>";
                    } elseif ((                    // line 8
($context["name"] ?? null) == "arrow-down")) {
                        // line 9
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M12 4v15\"/><path d=\"m6 13 6 6 6-6\"/></svg>";
                    } elseif ((                    // line 10
($context["name"] ?? null) == "check")) {
                        // line 11
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"m5 12.5 4.5 4.5L19 7\"/></svg>";
                    } elseif ((                    // line 12
($context["name"] ?? null) == "plus")) {
                        // line 13
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M12 5v14M5 12h14\"/></svg>";
                    } elseif ((                    // line 14
($context["name"] ?? null) == "minus")) {
                        // line 15
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M5 12h14\"/></svg>";
                    } elseif ((                    // line 16
($context["name"] ?? null) == "quote")) {
                        // line 17
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 32 24\" fill=\"currentColor\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M0 24V13.8C0 6.2 4.5 1.5 12 0l1.4 3.7C8.6 5.3 6.1 8 6.2 11.3H12V24H0Zm19 0V13.8C19 6.2 23.5 1.5 31 0l1 3.7c-4.8 1.6-7.3 4.3-7.2 7.6H31V24H19Z\"/></svg>";
                    } elseif ((                    // line 18
($context["name"] ?? null) == "mail")) {
                        // line 19
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><rect x=\"3\" y=\"5\" width=\"18\" height=\"14\" rx=\"1.5\"/><path d=\"m4 7 8 6 8-6\"/></svg>";
                    } elseif ((                    // line 20
($context["name"] ?? null) == "phone")) {
                        // line 21
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M7.5 3h-3A1.5 1.5 0 0 0 3 4.5C3 13.6 10.4 21 19.5 21a1.5 1.5 0 0 0 1.5-1.5v-3l-4.2-1.4-2 2a15.5 15.5 0 0 1-7.9-7.9l2-2L7.5 3Z\"/></svg>";
                    } elseif ((                    // line 22
($context["name"] ?? null) == "pin")) {
                        // line 23
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z\"/><circle cx=\"12\" cy=\"10\" r=\"2.5\"/></svg>";
                    } elseif ((                    // line 24
($context["name"] ?? null) == "clock")) {
                        // line 25
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 2\"/></svg>";
                    } elseif ((                    // line 26
($context["name"] ?? null) == "calendar")) {
                        // line 27
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><rect x=\"3\" y=\"5\" width=\"18\" height=\"16\" rx=\"1.5\"/><path d=\"M8 3v4M16 3v4M3 10h18\"/></svg>";
                    } elseif ((                    // line 28
($context["name"] ?? null) == "book")) {
                        // line 29
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M4 4.5A2.5 2.5 0 0 1 6.5 2H20v17H6.5A2.5 2.5 0 0 0 4 21.5v-17Z\"/><path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/><path d=\"M8 6h8M8 9.5h5\"/></svg>";
                    } elseif ((                    // line 30
($context["name"] ?? null) == "target")) {
                        // line 31
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><circle cx=\"12\" cy=\"12\" r=\"5\"/><circle cx=\"12\" cy=\"12\" r=\"1.2\" fill=\"currentColor\" stroke=\"none\"/></svg>";
                    } elseif ((                    // line 32
($context["name"] ?? null) == "globe")) {
                        // line 33
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M3.6 9h16.8M3.6 15h16.8M12 3c2.4 2.5 3.7 5.5 3.7 9S14.4 18.5 12 21M12 3c-2.4 2.5-3.7 5.5-3.7 9S9.6 18.5 12 21\"/></svg>";
                    } elseif ((                    // line 34
($context["name"] ?? null) == "briefcase")) {
                        // line 35
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"1.5\"/><path d=\"M8 7V5.5A1.5 1.5 0 0 1 9.5 4h5A1.5 1.5 0 0 1 16 5.5V7M3 12h18M11 12v2h2v-2\"/></svg>";
                    } elseif ((                    // line 36
($context["name"] ?? null) == "compass")) {
                        // line 37
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"m15.5 8.5-2 5-5 2 2-5 5-2Z\"/></svg>";
                    } elseif ((                    // line 38
($context["name"] ?? null) == "chat")) {
                        // line 39
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M21 11.5a8.4 8.4 0 0 1-9 8.4 9 9 0 0 1-3.5-.7L3 21l1.8-4.5A8.4 8.4 0 1 1 21 11.5Z\"/><path d=\"M8 10h8M8 13.5h5\"/></svg>";
                    } elseif ((                    // line 40
($context["name"] ?? null) == "menu")) {
                        // line 41
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M4 8h16M4 16h16\"/></svg>";
                    } elseif ((                    // line 42
($context["name"] ?? null) == "close")) {
                        // line 43
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"m6 6 12 12M18 6 6 18\"/></svg>";
                    } elseif ((                    // line 44
($context["name"] ?? null) == "telegram")) {
                        // line 45
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M21.9 4.3 18.6 19c-.2 1.1-.9 1.4-1.8.9l-4.9-3.6-2.4 2.3c-.3.3-.5.5-1 .5l.4-5 9.1-8.2c.4-.3-.1-.5-.6-.2L6.2 12.7 1.4 11.2c-1-.3-1-1 .2-1.5l19.3-7.4c.9-.3 1.6.2 1 2Z\"/></svg>";
                    } elseif ((                    // line 46
($context["name"] ?? null) == "whatsapp")) {
                        // line 47
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M12 2a10 10 0 0 0-8.6 15L2 22l5.1-1.3A10 10 0 1 0 12 2Zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-3-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4 0-.5.1-.6l.4-.5c.1-.2.1-.3 0-.5l-.7-1.7c-.2-.4-.4-.4-.5-.4h-.5c-.2 0-.5.1-.7.3-.3.3-.9.9-.9 2.1s.9 2.4 1 2.6c.1.2 1.8 2.8 4.4 3.8 2.1.8 2.5.7 3 .6.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.1-1.2l-.5-.3Z\"/></svg>";
                    } elseif ((                    // line 48
($context["name"] ?? null) == "external")) {
                        // line 49
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M14 4h6v6M20 4l-9 9\"/><path d=\"M18 14v5.5A1.5 1.5 0 0 1 16.5 21h-12A1.5 1.5 0 0 1 3 19.5v-12A1.5 1.5 0 0 1 4.5 6H10\"/></svg>";
                    } elseif ((                    // line 50
($context["name"] ?? null) == "star")) {
                        // line 51
                        yield "<svg class=\"";
                        yield (string) $this->escaper->escape(($context["class"] ?? null), "html", null, true);
                        yield "\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\" focusable=\"false\"><path d=\"m12 2.5 2.9 6 6.6.9-4.8 4.6 1.2 6.5-5.9-3.1-5.9 3.1 1.2-6.5L2.5 9.4l6.6-.9 2.9-6Z\"/></svg>";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "class" => true], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/icons.html.twig";
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
        return array (  212 => 51,  210 => 50,  206 => 49,  204 => 48,  200 => 47,  198 => 46,  194 => 45,  192 => 44,  188 => 43,  186 => 42,  182 => 41,  180 => 40,  176 => 39,  174 => 38,  170 => 37,  168 => 36,  164 => 35,  162 => 34,  158 => 33,  156 => 32,  152 => 31,  150 => 30,  146 => 29,  144 => 28,  140 => 27,  138 => 26,  134 => 25,  132 => 24,  128 => 23,  126 => 22,  122 => 21,  120 => 20,  116 => 19,  114 => 18,  110 => 17,  108 => 16,  104 => 15,  102 => 14,  98 => 13,  96 => 12,  92 => 11,  90 => 10,  86 => 9,  84 => 8,  80 => 7,  78 => 6,  74 => 5,  72 => 4,  68 => 3,  66 => 2,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro icon(name, class = \x27icon\x27) %}
{%- if name == \x27arrow-right\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M4 12h15\"/><path d=\"m13 6 6 6-6 6\"/></svg>
{%- elseif name == \x27arrow-left\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M20 12H5\"/><path d=\"m11 18-6-6 6-6\"/></svg>
{%- elseif name == \x27arrow-up-right\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M6 18 18 6\"/><path d=\"M8 6h10v10\"/></svg>
{%- elseif name == \x27arrow-down\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M12 4v15\"/><path d=\"m6 13 6 6 6-6\"/></svg>
{%- elseif name == \x27check\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"m5 12.5 4.5 4.5L19 7\"/></svg>
{%- elseif name == \x27plus\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M12 5v14M5 12h14\"/></svg>
{%- elseif name == \x27minus\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M5 12h14\"/></svg>
{%- elseif name == \x27quote\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 32 24\" fill=\"currentColor\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M0 24V13.8C0 6.2 4.5 1.5 12 0l1.4 3.7C8.6 5.3 6.1 8 6.2 11.3H12V24H0Zm19 0V13.8C19 6.2 23.5 1.5 31 0l1 3.7c-4.8 1.6-7.3 4.3-7.2 7.6H31V24H19Z\"/></svg>
{%- elseif name == \x27mail\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><rect x=\"3\" y=\"5\" width=\"18\" height=\"14\" rx=\"1.5\"/><path d=\"m4 7 8 6 8-6\"/></svg>
{%- elseif name == \x27phone\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M7.5 3h-3A1.5 1.5 0 0 0 3 4.5C3 13.6 10.4 21 19.5 21a1.5 1.5 0 0 0 1.5-1.5v-3l-4.2-1.4-2 2a15.5 15.5 0 0 1-7.9-7.9l2-2L7.5 3Z\"/></svg>
{%- elseif name == \x27pin\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M20 10c0 5.5-8 12-8 12S4 15.5 4 10a8 8 0 1 1 16 0Z\"/><circle cx=\"12\" cy=\"10\" r=\"2.5\"/></svg>
{%- elseif name == \x27clock\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M12 7v5l3 2\"/></svg>
{%- elseif name == \x27calendar\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><rect x=\"3\" y=\"5\" width=\"18\" height=\"16\" rx=\"1.5\"/><path d=\"M8 3v4M16 3v4M3 10h18\"/></svg>
{%- elseif name == \x27book\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M4 4.5A2.5 2.5 0 0 1 6.5 2H20v17H6.5A2.5 2.5 0 0 0 4 21.5v-17Z\"/><path d=\"M4 19.5A2.5 2.5 0 0 1 6.5 17H20\"/><path d=\"M8 6h8M8 9.5h5\"/></svg>
{%- elseif name == \x27target\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><circle cx=\"12\" cy=\"12\" r=\"5\"/><circle cx=\"12\" cy=\"12\" r=\"1.2\" fill=\"currentColor\" stroke=\"none\"/></svg>
{%- elseif name == \x27globe\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"M3.6 9h16.8M3.6 15h16.8M12 3c2.4 2.5 3.7 5.5 3.7 9S14.4 18.5 12 21M12 3c-2.4 2.5-3.7 5.5-3.7 9S9.6 18.5 12 21\"/></svg>
{%- elseif name == \x27briefcase\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><rect x=\"3\" y=\"7\" width=\"18\" height=\"13\" rx=\"1.5\"/><path d=\"M8 7V5.5A1.5 1.5 0 0 1 9.5 4h5A1.5 1.5 0 0 1 16 5.5V7M3 12h18M11 12v2h2v-2\"/></svg>
{%- elseif name == \x27compass\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><circle cx=\"12\" cy=\"12\" r=\"9\"/><path d=\"m15.5 8.5-2 5-5 2 2-5 5-2Z\"/></svg>
{%- elseif name == \x27chat\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M21 11.5a8.4 8.4 0 0 1-9 8.4 9 9 0 0 1-3.5-.7L3 21l1.8-4.5A8.4 8.4 0 1 1 21 11.5Z\"/><path d=\"M8 10h8M8 13.5h5\"/></svg>
{%- elseif name == \x27menu\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M4 8h16M4 16h16\"/></svg>
{%- elseif name == \x27close\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"m6 6 12 12M18 6 6 18\"/></svg>
{%- elseif name == \x27telegram\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M21.9 4.3 18.6 19c-.2 1.1-.9 1.4-1.8.9l-4.9-3.6-2.4 2.3c-.3.3-.5.5-1 .5l.4-5 9.1-8.2c.4-.3-.1-.5-.6-.2L6.2 12.7 1.4 11.2c-1-.3-1-1 .2-1.5l19.3-7.4c.9-.3 1.6.2 1 2Z\"/></svg>
{%- elseif name == \x27whatsapp\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M12 2a10 10 0 0 0-8.6 15L2 22l5.1-1.3A10 10 0 1 0 12 2Zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-3-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4 0-.5.1-.6l.4-.5c.1-.2.1-.3 0-.5l-.7-1.7c-.2-.4-.4-.4-.5-.4h-.5c-.2 0-.5.1-.7.3-.3.3-.9.9-.9 2.1s.9 2.4 1 2.6c.1.2 1.8 2.8 4.4 3.8 2.1.8 2.5.7 3 .6.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.1-1.2l-.5-.3Z\"/></svg>
{%- elseif name == \x27external\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\" aria-hidden=\"true\" focusable=\"false\"><path d=\"M14 4h6v6M20 4l-9 9\"/><path d=\"M18 14v5.5A1.5 1.5 0 0 1 16.5 21h-12A1.5 1.5 0 0 1 3 19.5v-12A1.5 1.5 0 0 1 4.5 6H10\"/></svg>
{%- elseif name == \x27star\x27 -%}
<svg class=\"{{ class }}\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\" focusable=\"false\"><path d=\"m12 2.5 2.9 6 6.6.9-4.8 4.6 1.2 6.5-5.9-3.1-5.9 3.1 1.2-6.5L2.5 9.4l6.6-.9 2.9-6Z\"/></svg>
{%- endif -%}
{% endmacro %}
", "macros/icons.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\macros\\icons.html.twig");
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
