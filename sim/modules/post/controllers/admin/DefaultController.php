<?php

namespace sim\modules\post\controllers\admin;


class DefaultController extends \sim\modules\admin\components\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
