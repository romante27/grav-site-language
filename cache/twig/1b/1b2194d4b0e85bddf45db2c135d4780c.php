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

/* partials/skyline.html.twig */
class __TwigTemplate_54c621662863ec680468645120d8ce7f_sourced extends Template
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
        yield "<div class=\"footer-skyline\" aria-hidden=\"true\">
    <svg viewBox=\"0 0 1440 160\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMax slice\">
        <g stroke=\"currentColor\" stroke-width=\"1.15\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path d=\"M0 141h1440\" opacity=\".7\"/>
            <path d=\"M0 149h1440\" opacity=\".28\"/>

            <!-- low buildings -->
            <path d=\"M20 141V112h54v29M32 112V97h30v15M46 97V87h12v10\" opacity=\".55\"/>
            <path d=\"M96 141v-22h38v22M104 119v-9h20v9M96 126h38\" opacity=\".4\"/>
            <path d=\"M150 141V96h64v45M162 108h40M162 120h40M162 132h40\" opacity=\".45\"/>
            <path d=\"M232 141v-34h42v34M244 107V94l9-7 9 7v13\" opacity=\".45\"/>
            <path d=\"M288 141v-18h48v18M298 123v-8h9v8M318 123v-8h9v8\" opacity=\".38\"/>
            <path d=\"M360 141v-40h70v40M372 111h16v16h-16zM398 111h20M372 135h46\" opacity=\".45\"/>

            <!-- london eye -->
            <circle cx=\"505\" cy=\"84\" r=\"55\" opacity=\".7\"/>
            <circle cx=\"505\" cy=\"84\" r=\"43\" opacity=\".35\"/>
            <circle cx=\"505\" cy=\"84\" r=\"3\" fill=\"currentColor\" stroke=\"none\"/>
            <path d=\"M505 29v110M450 84h110M466 45l78 78M544 45l-78 78\" opacity=\".35\"/>
            <path d=\"M505 139 470 141M505 139l35 2\" opacity=\".55\"/>
            <circle cx=\"505\" cy=\"29\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"505\" cy=\"139\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"450\" cy=\"84\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"560\" cy=\"84\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"466\" cy=\"45\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"544\" cy=\"123\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"544\" cy=\"45\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"466\" cy=\"123\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>

            <!-- houses -->
            <path d=\"M598 141v-27h44v27M608 114v-9h10v9M622 114v-9h10v9M598 128h44\" opacity=\".4\"/>
            <path d=\"M660 141v-20h30M666 121v-6h8v6M678 121v-6h8v6\" opacity=\".28\"/>

            <!-- st paul\x27s -->
            <path d=\"M624 141v-41h116v41\" opacity=\".8\"/>
            <path d=\"M633 100c8-39 90-39 98 0\" opacity=\".8\"/>
            <path d=\"M646 100c8-22 70-22 78 0\" opacity=\".3\"/>
            <path d=\"M675 63V49h14v14M682 49V38M689 49l7-8\" opacity=\".8\"/>
            <path d=\"M638 141v-33M650 141v-33M662 141v-33M674 141v-33M686 141v-33M698 141v-33M710 141v-33M722 141v-33\" opacity=\".35\"/>
            <path d=\"M616 141h132\" opacity=\".55\"/>

            <!-- big ben -->
            <path d=\"M1000 141V63h44v78\" opacity=\".8\"/>
            <path d=\"M1000 63 1022 27l22 36\" opacity=\".8\"/>
            <path d=\"M1022 27V17\" opacity=\".6\"/>
            <circle cx=\"1022\" cy=\"82\" r=\"10\" opacity=\".8\"/>
            <path d=\"M1022 76v6l4 3\" opacity=\".8\"/>
            <path d=\"M1000 99h44M1008 110v20M1017 110v20M1027 110v20M1036 110v20\" opacity=\".35\"/>
            <path d=\"M992 141h60\" opacity=\".55\"/>

            <!-- tower bridge hint -->
            <path d=\"M1090 141v-48h28v48M1120 141v-48h28v48\" opacity=\".5\"/>
            <path d=\"M1090 99l28-17 30 17M1104 99v42M1134 99v42\" opacity=\".35\"/>
            <path d=\"M1076 108c8 0 10 13 14 13s7-8 14-8 9 9 16 9 9-6 16-6 8 7 14 7 9-9 16-9 8 7 14 7\" opacity=\".3\"/>

            <!-- far right rooftops -->
            <path d=\"M1180 141v-31h52v31M1192 110V99l10-8 10 8v11M1222 110V99l10-8 10 8v11\" opacity=\".42\"/>
            <path d=\"M1252 141v-44h62v44M1264 108h14v14h-14zM1288 108h14v14h-14zM1264 130h38\" opacity=\".4\"/>
            <path d=\"M1330 141v-25h38v25M1340 116v-8h8v8M1354 116v-8h8v8\" opacity=\".35\"/>
            <path d=\"M1380 141v-38h40v38M1390 114h20M1390 126h20\" opacity=\".3\"/>

            <!-- chimneys and details -->
            <path d=\"M540 141v-18M553 141v-27M566 141v-14\" opacity=\".23\"/>
            <path d=\"M640 141v-9M700 141v-9M1022 141v-6M1100 141v-7M1310 141v-11\" opacity=\".2\"/>

            <!-- birds -->
            <path d=\"M820 45c5-5 9-5 14 0M838 40c5-5 9-5 14 0M862 52c4-4 8-4 12 0\" opacity=\".5\"/>
        </g>
        <text x=\"720\" y=\"157\" text-anchor=\"middle\" fill=\"currentColor\" opacity=\".35\" font-family=\"\x27Source Sans 3\x27, sans-serif\" font-size=\"8.5\" letter-spacing=\"5\">LONDON · OXFORD · CAMBRIDGE</text>
    </svg>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/skyline.html.twig";
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
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"footer-skyline\" aria-hidden=\"true\">
    <svg viewBox=\"0 0 1440 160\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMax slice\">
        <g stroke=\"currentColor\" stroke-width=\"1.15\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path d=\"M0 141h1440\" opacity=\".7\"/>
            <path d=\"M0 149h1440\" opacity=\".28\"/>

            <!-- low buildings -->
            <path d=\"M20 141V112h54v29M32 112V97h30v15M46 97V87h12v10\" opacity=\".55\"/>
            <path d=\"M96 141v-22h38v22M104 119v-9h20v9M96 126h38\" opacity=\".4\"/>
            <path d=\"M150 141V96h64v45M162 108h40M162 120h40M162 132h40\" opacity=\".45\"/>
            <path d=\"M232 141v-34h42v34M244 107V94l9-7 9 7v13\" opacity=\".45\"/>
            <path d=\"M288 141v-18h48v18M298 123v-8h9v8M318 123v-8h9v8\" opacity=\".38\"/>
            <path d=\"M360 141v-40h70v40M372 111h16v16h-16zM398 111h20M372 135h46\" opacity=\".45\"/>

            <!-- london eye -->
            <circle cx=\"505\" cy=\"84\" r=\"55\" opacity=\".7\"/>
            <circle cx=\"505\" cy=\"84\" r=\"43\" opacity=\".35\"/>
            <circle cx=\"505\" cy=\"84\" r=\"3\" fill=\"currentColor\" stroke=\"none\"/>
            <path d=\"M505 29v110M450 84h110M466 45l78 78M544 45l-78 78\" opacity=\".35\"/>
            <path d=\"M505 139 470 141M505 139l35 2\" opacity=\".55\"/>
            <circle cx=\"505\" cy=\"29\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"505\" cy=\"139\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"450\" cy=\"84\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"560\" cy=\"84\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"466\" cy=\"45\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"544\" cy=\"123\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"544\" cy=\"45\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>
            <circle cx=\"466\" cy=\"123\" r=\"2.2\" fill=\"currentColor\" stroke=\"none\"/>

            <!-- houses -->
            <path d=\"M598 141v-27h44v27M608 114v-9h10v9M622 114v-9h10v9M598 128h44\" opacity=\".4\"/>
            <path d=\"M660 141v-20h30M666 121v-6h8v6M678 121v-6h8v6\" opacity=\".28\"/>

            <!-- st paul\x27s -->
            <path d=\"M624 141v-41h116v41\" opacity=\".8\"/>
            <path d=\"M633 100c8-39 90-39 98 0\" opacity=\".8\"/>
            <path d=\"M646 100c8-22 70-22 78 0\" opacity=\".3\"/>
            <path d=\"M675 63V49h14v14M682 49V38M689 49l7-8\" opacity=\".8\"/>
            <path d=\"M638 141v-33M650 141v-33M662 141v-33M674 141v-33M686 141v-33M698 141v-33M710 141v-33M722 141v-33\" opacity=\".35\"/>
            <path d=\"M616 141h132\" opacity=\".55\"/>

            <!-- big ben -->
            <path d=\"M1000 141V63h44v78\" opacity=\".8\"/>
            <path d=\"M1000 63 1022 27l22 36\" opacity=\".8\"/>
            <path d=\"M1022 27V17\" opacity=\".6\"/>
            <circle cx=\"1022\" cy=\"82\" r=\"10\" opacity=\".8\"/>
            <path d=\"M1022 76v6l4 3\" opacity=\".8\"/>
            <path d=\"M1000 99h44M1008 110v20M1017 110v20M1027 110v20M1036 110v20\" opacity=\".35\"/>
            <path d=\"M992 141h60\" opacity=\".55\"/>

            <!-- tower bridge hint -->
            <path d=\"M1090 141v-48h28v48M1120 141v-48h28v48\" opacity=\".5\"/>
            <path d=\"M1090 99l28-17 30 17M1104 99v42M1134 99v42\" opacity=\".35\"/>
            <path d=\"M1076 108c8 0 10 13 14 13s7-8 14-8 9 9 16 9 9-6 16-6 8 7 14 7 9-9 16-9 8 7 14 7\" opacity=\".3\"/>

            <!-- far right rooftops -->
            <path d=\"M1180 141v-31h52v31M1192 110V99l10-8 10 8v11M1222 110V99l10-8 10 8v11\" opacity=\".42\"/>
            <path d=\"M1252 141v-44h62v44M1264 108h14v14h-14zM1288 108h14v14h-14zM1264 130h38\" opacity=\".4\"/>
            <path d=\"M1330 141v-25h38v25M1340 116v-8h8v8M1354 116v-8h8v8\" opacity=\".35\"/>
            <path d=\"M1380 141v-38h40v38M1390 114h20M1390 126h20\" opacity=\".3\"/>

            <!-- chimneys and details -->
            <path d=\"M540 141v-18M553 141v-27M566 141v-14\" opacity=\".23\"/>
            <path d=\"M640 141v-9M700 141v-9M1022 141v-6M1100 141v-7M1310 141v-11\" opacity=\".2\"/>

            <!-- birds -->
            <path d=\"M820 45c5-5 9-5 14 0M838 40c5-5 9-5 14 0M862 52c4-4 8-4 12 0\" opacity=\".5\"/>
        </g>
        <text x=\"720\" y=\"157\" text-anchor=\"middle\" fill=\"currentColor\" opacity=\".35\" font-family=\"\x27Source Sans 3\x27, sans-serif\" font-size=\"8.5\" letter-spacing=\"5\">LONDON · OXFORD · CAMBRIDGE</text>
    </svg>
</div>
", "partials/skyline.html.twig", "D:\\openCodeProject\\grav-site-language\\user\\themes\\albion\\templates\\partials\\skyline.html.twig");
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
