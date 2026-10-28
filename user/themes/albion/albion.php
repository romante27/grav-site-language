<?php

namespace Grav\Theme;

use Grav\Common\Theme;
use Twig\TwigFilter;

class Albion extends Theme
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onTwigInitialized' => ['onTwigInitialized', 0],
        ];
    }

    public function onTwigInitialized(): void
    {
        $twig = $this->grav['twig'];

        $formClasses = [
            'form_outer_classes' => 'site-form',
            'form_button_outer_classes' => 'form-actions',
            'form_button_classes' => 'btn btn--primary',
            'form_errors_classes' => 'form-errors',
            'form_field_outer_classes' => 'field',
            'form_field_outer_label_classes' => 'field__label-wrap',
            'form_field_label_classes' => 'field__label',
            'form_field_input_classes' => 'field__input',
            'form_field_textarea_classes' => 'field__input field__input--textarea',
            'form_field_select_classes' => 'field__input field__input--select',
            'form_field_radio_classes' => 'choice',
            'form_field_checkbox_classes' => 'choice',
        ];

        $twig->twig_vars = array_merge($twig->twig_vars, $formClasses);

        $twig->twig->addFilter(new TwigFilter('reading_time', [$this, 'readingTime']));
        $twig->twig->addFilter(new TwigFilter('ru_date', [$this, 'russianDate']));
        $twig->twig->addFilter(new TwigFilter('ru_month', [$this, 'russianMonth']));
    }

    public function readingTime($content): string
    {
        $text = trim(strip_tags((string) $content));
        if ($text === '') {
            return '1 мин';
        }

        $words = preg_split('/\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
        $count = is_array($words) ? count($words) : 0;
        $minutes = max(1, (int) ceil($count / 180));

        return $minutes . ' мин';
    }

    public function russianDate($date): string
    {
        if (is_numeric($date)) {
            $date = (new \DateTime('@' . (int) $date))->setTimezone(new \DateTimeZone(date_default_timezone_get() ?: 'UTC'));
        } elseif (!$date instanceof \DateTimeInterface) {
            try {
                $date = new \DateTime((string) $date);
            } catch (\Exception $e) {
                return (string) $date;
            }
        }

        return (int) $date->format('j') . ' ' . $this->russianMonth((int) $date->format('n')) . ' ' . $date->format('Y');
    }

    public function russianMonth($month): string
    {
        $months = [
            1 => 'января',
            2 => 'февраля',
            3 => 'марта',
            4 => 'апреля',
            5 => 'мая',
            6 => 'июня',
            7 => 'июля',
            8 => 'августа',
            9 => 'сентября',
            10 => 'октября',
            11 => 'ноября',
            12 => 'декабря',
        ];

        return $months[(int) $month] ?? '';
    }
}
