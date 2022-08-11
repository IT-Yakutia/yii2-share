<?php

namespace ityakutia\share;

use yii\base\Widget;

class ShareWidget extends Widget
{
    public $url = null;
    public $title = null;
    public $desc = null;
    public $buttons = [
        [
            'key' => 'vk',
            'label' => 'VK',
            'icon' => 'fab fa-vk',
            'color' => '#45668e',
        ],
        // [
        //     'key' => 'fb',
        //     'label' => 'Facebook',
        //     'icon' => 'fab fa-facebook-f',
        //     'color' => '#1877f2',
        // ],
        // [
        //     'key' => 'tw',
        //     'label' => 'Twitter',
        //     'icon' => 'fab fa-twitter',
        //     'color' => '#1da1f2',
        // ],
        [
            'key' => 'tg',
            'label' => 'Telegram',
            'icon' => 'fab fa-telegram',
            'color' => '#0088cc',
        ],
        [
            'key' => 'mail',
            'label' => 'EMail',
            'icon' => 'fas fa-envelope',
            'color' => '#ffa930',
        ],
        // [
        //     'key' => 're',
        //     'label' => 'Reddit',
        //     'icon' => 'fab fa-reddit',
        //     'color' => '#ff4500',
        // ],
        // [
        //     'key' => 'ev',
        //     'label' => 'Evernote',
        //     'icon' => 'fab fa-evernote',
        //     'color' => '#2dbe60',
        // ],
        // [
        //     'key' => 'in',
        //     'label' => 'LinkedIn',
        //     'icon' => 'fab fa-linkedin',
        //     'color' => '#0077b5',
        // ],
        // [
        //     'key' => 'pi',
        //     'label' => 'Pinterest',
        //     'icon' => 'fab fa-pinterest',
        //     'color' => '#e60023',
        // ],
        // [
        //     'key' => 'sk',
        //     'label' => 'Skype',
        //     'icon' => 'fab fa-skype',
        //     'color' => '#00aff0',
        // ],
        [
            'key' => 'wa',
            'label' => 'WhatsApp',
            'icon' => 'fab fa-whatsapp',
            'color' => '#075e54',
        ],
        [
            'key' => 'ok',
            'label' => 'Odnoklassniki',
            'icon' => 'fab fa-odnoklassniki',
            'color' => '#ed812b',
        ],
        // [
        //     'key' => 'tu',
        //     'label' => 'Tumblr',
        //     'icon' => 'fab fa-tumblr',
        //     'color' => '#35465c',
        // ],
        // [
        //     'key' => 'xi',
        //     'label' => 'Xing',
        //     'icon' => 'fab fa-xing',
        //     'color' => '#026466',
        // ],
        // [
        //     'key' => 'print',
        //     'label' => 'Print',
        //     'icon' => 'fas fa-print',
        //     'color' => '#00112c',
        // ],
        [
            'key' => 'copy',
            'label' => 'Copy',
            'icon' => 'fas fa-copy',
            'color' => '#00112c',
        ],
        [
            'key' => 'share',
            'label' => 'WebShare API',
            'icon' => 'fas fa-share',
            'color' => '#00112c',
        ],
    ];

    public function run()
    {
        ShareAsset::register($this->getView());
        return $this->render('index', [
            'url' => $this->url,
            'title' => $this->title,
            'desc' => $this->desc,
            'buttons' => $this->buttons,
        ]);
    }
}