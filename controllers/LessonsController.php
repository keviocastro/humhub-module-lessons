<?php

namespace humhub\modules\lessons\controllers;

use humhub\modules\content\components\ContentContainerController;
use Yii;
use yii\helpers\Url;
use humhub\modules\directory\widgets\Sidebar;

class LessonsController extends \humhub\components\Controller
{
	
	public function actionIndex()
	{
		return $this->render('index');
	}
}