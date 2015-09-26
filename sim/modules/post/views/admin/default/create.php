<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model sim\modules\post\models\Post */

$this->title = Yii::t('post', 'Create Post');
$this->params['breadcrumbs'][] = ['label' => Yii::t('post', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
