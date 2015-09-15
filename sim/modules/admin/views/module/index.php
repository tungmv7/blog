<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('admin', 'Modules');
?>
<div class="panel panel-admin">
    <div class="panel-heading"><strong><?= Html::encode($this->title) ?></strong></div>
    <div class="panel-body">
        <p>Modules extend the functionality of Sim CMS. Here you can install and manage modules from the Sim Marketplace.</p>
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
        </ul>
        <div class="module-index">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="..." alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    ...
                </div>
            </div>

            <?//= GridView::widget([
//                'dataProvider' => $dataProvider,
//                'filterModel' => $searchModel,
//                'columns' => [
//                    ['class' => 'yii\grid\SerialColumn'],
//                    'id',
//                    'uniqueId',
//                    'isCoreModule',
//                    'status',
//                    'createdBy',
//                    ['class' => 'yii\grid\ActionColumn'],
//                ],
//            ]); ?>
        </div>
    </div>
</div>