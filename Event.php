<?php

namespace humhub\modules\lessons;

use Yii;
use yii\helpers\Url;

class Event
{
	
	/**
     * @todo Tradução Yii::t('LessonsModule.base', 'Lessons'),  
     * 
     * Register menu item
     * 
     */
    public function onTopMenuInit($event)
    {
        // var_dump(Yii::$app->controller->module->id);exit();
        $event->sender->addItem(array(
            'label' => 'Lessons',
            'id' => 'lessons-global',
            'icon' => '<i class="fa fa-tachometer"></i>',
            'url' => Url::toRoute('/lessons/lessons'),
            'sortOrder' => 100,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'lessons'),
        ));
    }
}