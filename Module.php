<?php

namespace humhub\modules\lessons;


use humhub\components\Module as ModuleBase;


class Module extends ModuleBase
{
	public $controllerNamespace = 'humhub\modules\lessons\controllers';

    /**
     * On build of the dashboard sidebar widget, add the birthday widget if module is enabled.
     *
     * @param type $event
     */
    public function init()
    {
         parent::init();
    }
}

?>
