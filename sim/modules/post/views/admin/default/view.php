<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model sim\modules\post\models\Post */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('post', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('post', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('post', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('post', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'title',
            'description',
            'body:ntext',
            'creator',
            'status',
            'slug',
            'publishedTime:datetime',
            'featuredImage',
            'type',
            'visibility',
            'password',
            'metaData:ntext',
            'note:ntext',
            'createdBy',
            'createdTime:datetime',
            'updatedBy',
            'updatedTime:datetime',
        ],
    ]) ?>

</div>
