<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'lessons',
    'class' => 'humhub\modules\lessons\Module',
    'namespace' => 'humhub\modules\lessons',
    'events' => [
        [
            'class' => \humhub\widgets\TopMenu::class,
            'event' => \humhub\widgets\TopMenu::EVENT_INIT,
            'callback' => [
                \humhub\modules\lessons\Event::class,
                'onTopMenuInit'
            ]
        ]
    ]
];
?>