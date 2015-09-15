<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\module\ModuleQuery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="module-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'uniqueId') ?>

    <?= $form->field($model, 'isCoreModule') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'createdBy') ?>

    <?php // echo $form->field($model, 'createdTime') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('admin', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('admin', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
