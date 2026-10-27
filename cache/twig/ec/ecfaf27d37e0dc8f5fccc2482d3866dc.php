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

/* @Page:D:/openCodeProject/grav-site-language/user/pages/06.blog/03.speaking-fear */
class __TwigTemplate_5bcd692b83288f49df6911d59d2c053c_sourced extends Template
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
        yield "<p>«Я всё понимаю, но ничего не могу сказать». Эту фразу я слышу чаще всего на первых уроках. Обычно за ней стоит не отсутствие знаний, а опыт: школьные оценки, страх ошибки, привычка сначала строить идеальное предложение в голове — и только потом открывать рот.</p>
<p>Хорошая новость: разговорный английский — это навык, а не талант. Его можно натренировать, даже если вы годами молчали.</p>
<h2>Откуда берётся страх</h2>
<p>Причин обычно три.</p>
<p><strong>Первая — опыт оценки.</strong> В школе за ошибку снижали балл. Мозг запомнил: говорить рискованно.</p>
<p><strong>Вторая — привычка переводить.</strong> Вы строите предложение на русском, переводите по частям, проверяете грамматику — и к моменту, когда готовы сказать, разговор уже ушёл дальше.</p>
<p><strong>Третья — отсутствие практики.</strong> Чтение и аудирование развивают понимание, но не речь. Говорить можно научиться только говоря.</p>
<h2>Правило 60 секунд</h2>
<p>Самое простое упражнение, которое я даю в начале работы: говорите 60 секунд на любую тему без остановки. Не «правильно», а вообще.</p>
<ul>
<li>«Что я ел на завтрак».</li>
<li>«Почему я не люблю понедельники».</li>
<li>«Что было бы, если бы я жил в Лондоне».</li>
</ul>
<p>Задача — не сделать красиво, а пройти минуту, не замолкая. Паузы разрешены. Слова-паразиты разрешены. Ошибки разрешены.</p>
<p>Через неделю таких упражнений появляется главное: вы перестаёте бояться собственного голоса.</p>
<h2>Как перестать переводить</h2>
<p>Полностью перестать переводить не получится — и не нужно. Но можно сократить перевод.</p>
<p>Полезно учить не слова, а фразы: не «decision», а «make a decision»; не «attention», а «pay attention». Тогда речь строится из готовых блоков, и мозгу не нужно каждый раз собирать конструктор.</p>
<p>Ещё один приём — описывать то, что видите, простыми словами. Не вспомнили слово «cupboard»? Скажите «the place where we keep cups». Это и есть живой язык.</p>
<h2>Ошибки — топливо</h2>
<p>Представьте, что вы учитесь играть на пианино. Вы же не ждёте, что первая гамма будет идеальной? С языком так же.</p>
<p>Ошибка показывает, где навык ещё не автоматизирован. Увидели, разобрали, повторили — и идём дальше. Именно поэтому на моих уроках обратная связь всегда конкретная: не «надо лучше», а «вот здесь время, вот здесь артикль, вот здесь лучше звучит по-другому».</p>
<h2>Что помогает на практике</h2>
<ul>
<li>Говорить по 10 минут каждый день, пусть даже с самим собой.</li>
<li>Пересказывать короткие новости или серии, не подглядывая.</li>
<li>Записывать себя на диктофон и слушать без самокритики.</li>
<li>Выбирать темы, которые действительно цепляют.</li>
<li>Сменить установку: цель не «сказать без ошибок», а «быть понятым».</li>
</ul>
<p>Если вы боитесь говорить, вы не одни. Это самый частый запрос взрослых учеников. И это одно из самых благодарных направлений: при регулярной практике через месяц становится заметно легче.</p>
<p>Начните с одной минуты сегодня. Не с идеальной, а с вашей.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:D:/openCodeProject/grav-site-language/user/pages/06.blog/03.speaking-fear";
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
        return new Source("<p>«Я всё понимаю, но ничего не могу сказать». Эту фразу я слышу чаще всего на первых уроках. Обычно за ней стоит не отсутствие знаний, а опыт: школьные оценки, страх ошибки, привычка сначала строить идеальное предложение в голове — и только потом открывать рот.</p>
<p>Хорошая новость: разговорный английский — это навык, а не талант. Его можно натренировать, даже если вы годами молчали.</p>
<h2>Откуда берётся страх</h2>
<p>Причин обычно три.</p>
<p><strong>Первая — опыт оценки.</strong> В школе за ошибку снижали балл. Мозг запомнил: говорить рискованно.</p>
<p><strong>Вторая — привычка переводить.</strong> Вы строите предложение на русском, переводите по частям, проверяете грамматику — и к моменту, когда готовы сказать, разговор уже ушёл дальше.</p>
<p><strong>Третья — отсутствие практики.</strong> Чтение и аудирование развивают понимание, но не речь. Говорить можно научиться только говоря.</p>
<h2>Правило 60 секунд</h2>
<p>Самое простое упражнение, которое я даю в начале работы: говорите 60 секунд на любую тему без остановки. Не «правильно», а вообще.</p>
<ul>
<li>«Что я ел на завтрак».</li>
<li>«Почему я не люблю понедельники».</li>
<li>«Что было бы, если бы я жил в Лондоне».</li>
</ul>
<p>Задача — не сделать красиво, а пройти минуту, не замолкая. Паузы разрешены. Слова-паразиты разрешены. Ошибки разрешены.</p>
<p>Через неделю таких упражнений появляется главное: вы перестаёте бояться собственного голоса.</p>
<h2>Как перестать переводить</h2>
<p>Полностью перестать переводить не получится — и не нужно. Но можно сократить перевод.</p>
<p>Полезно учить не слова, а фразы: не «decision», а «make a decision»; не «attention», а «pay attention». Тогда речь строится из готовых блоков, и мозгу не нужно каждый раз собирать конструктор.</p>
<p>Ещё один приём — описывать то, что видите, простыми словами. Не вспомнили слово «cupboard»? Скажите «the place where we keep cups». Это и есть живой язык.</p>
<h2>Ошибки — топливо</h2>
<p>Представьте, что вы учитесь играть на пианино. Вы же не ждёте, что первая гамма будет идеальной? С языком так же.</p>
<p>Ошибка показывает, где навык ещё не автоматизирован. Увидели, разобрали, повторили — и идём дальше. Именно поэтому на моих уроках обратная связь всегда конкретная: не «надо лучше», а «вот здесь время, вот здесь артикль, вот здесь лучше звучит по-другому».</p>
<h2>Что помогает на практике</h2>
<ul>
<li>Говорить по 10 минут каждый день, пусть даже с самим собой.</li>
<li>Пересказывать короткие новости или серии, не подглядывая.</li>
<li>Записывать себя на диктофон и слушать без самокритики.</li>
<li>Выбирать темы, которые действительно цепляют.</li>
<li>Сменить установку: цель не «сказать без ошибок», а «быть понятым».</li>
</ul>
<p>Если вы боитесь говорить, вы не одни. Это самый частый запрос взрослых учеников. И это одно из самых благодарных направлений: при регулярной практике через месяц становится заметно легче.</p>
<p>Начните с одной минуты сегодня. Не с идеальной, а с вашей.</p>", "@Page:D:/openCodeProject/grav-site-language/user/pages/06.blog/03.speaking-fear", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
