<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/openCodeProject/grav-site-language/user/pages/07.contact/contact.md',
    'modified' => 1793129596,
    'size' => 2455,
    'data' => [
        'header' => [
            'title' => 'Контакты',
            'menu' => 'Контакты',
            'template' => 'contact',
            'hero_eyebrow' => 'Контакты',
            'hero_heading' => 'Давайте <em>познакомимся.</em>',
            'hero_lead' => 'Расскажите о цели — я предложу формат, время и честный план. Отвечаю лично, обычно в течение дня.',
            'hero_meta' => [
                0 => 'Москва · онлайн',
                1 => 'Пн–Пт 10:00–20:00',
                2 => 'Ответ в течение дня'
            ],
            'availability' => 'Свободно 2 места на подготовку к ЕГЭ 2027',
            'form' => [
                'name' => 'contact-form',
                'action' => '/contact',
                'method' => 'POST',
                'fields' => [
                    'name' => [
                        'id' => 'cf-name',
                        'autocomplete' => 'name',
                        'label' => 'Как вас зовут',
                        'placeholder' => 'Имя',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'contact' => [
                        'id' => 'cf-contact',
                        'autocomplete' => 'off',
                        'label' => 'Email или Telegram',
                        'placeholder' => 'you@example.com или @nickname',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'goal' => [
                        'id' => 'cf-goal',
                        'label' => 'Цель',
                        'type' => 'select',
                        'placeholder' => 'Выберите направление',
                        'options' => [
                            'ege' => 'ЕГЭ',
                            'oge' => 'ОГЭ',
                            'ielts' => 'IELTS',
                            'toefl' => 'TOEFL',
                            'general' => 'Общий английский',
                            'business' => 'Business English',
                            'other' => 'Другое'
                        ],
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'message' => [
                        'id' => 'cf-message',
                        'label' => 'Пара слов о задаче',
                        'placeholder' => 'Сроки, уровень, что уже пробовали — всё, что важно',
                        'type' => 'textarea',
                        'rows' => 4
                    ],
                    'consent' => [
                        'id' => 'cf-consent',
                        'type' => 'checkbox',
                        'label' => 'Согласен(-на) с политикой конфиденциальности',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    'website' => [
                        'type' => 'honeypot'
                    ]
                ],
                'buttons' => [
                    'submit' => [
                        'type' => 'submit',
                        'value' => 'Отправить заявку'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'subject' => 'Новая заявка с сайта — Анна Белова'
                        ]
                    ],
                    1 => [
                        'message' => 'Спасибо! Заявка отправлена. Я отвечу лично в течение дня.'
                    ]
                ]
            ],
            'metadata' => [
                'description' => 'Записаться на пробный урок английского к Анне Беловой. Подготовка к ЕГЭ, ОГЭ, IELTS и TOEFL, общий и бизнес-английский. Москва и онлайн.'
            ]
        ],
        'frontmatter' => 'title: \'Контакты\'
menu: \'Контакты\'
template: contact
hero_eyebrow: \'Контакты\'
hero_heading: \'Давайте <em>познакомимся.</em>\'
hero_lead: \'Расскажите о цели — я предложу формат, время и честный план. Отвечаю лично, обычно в течение дня.\'
hero_meta:
  - \'Москва · онлайн\'
  - \'Пн–Пт 10:00–20:00\'
  - \'Ответ в течение дня\'
availability: \'Свободно 2 места на подготовку к ЕГЭ 2027\'
form:
  name: contact-form
  action: /contact
  method: POST
  fields:
    name:
      id: cf-name
      autocomplete: name
      label: \'Как вас зовут\'
      placeholder: \'Имя\'
      type: text
      validate:
        required: true
    contact:
      id: cf-contact
      autocomplete: off
      label: \'Email или Telegram\'
      placeholder: \'you@example.com или @nickname\'
      type: text
      validate:
        required: true
    goal:
      id: cf-goal
      label: \'Цель\'
      type: select
      placeholder: \'Выберите направление\'
      options:
        ege: \'ЕГЭ\'
        oge: \'ОГЭ\'
        ielts: \'IELTS\'
        toefl: \'TOEFL\'
        general: \'Общий английский\'
        business: \'Business English\'
        other: \'Другое\'
      validate:
        required: true
    message:
      id: cf-message
      label: \'Пара слов о задаче\'
      placeholder: \'Сроки, уровень, что уже пробовали — всё, что важно\'
      type: textarea
      rows: 4
    consent:
      id: cf-consent
      type: checkbox
      label: \'Согласен(-на) с политикой конфиденциальности\'
      validate:
        required: true
    website:
      type: honeypot
  buttons:
    submit:
      type: submit
      value: \'Отправить заявку\'
  process:
    - email:
        subject: \'Новая заявка с сайта — Анна Белова\'
    - message: \'Спасибо! Заявка отправлена. Я отвечу лично в течение дня.\'
metadata:
  description: \'Записаться на пробный урок английского к Анне Беловой. Подготовка к ЕГЭ, ОГЭ, IELTS и TOEFL, общий и бизнес-английский. Москва и онлайн.\'',
        'markdown' => ''
    ]
];
