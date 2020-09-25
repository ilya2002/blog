<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Create';

?>
<!--форма создания новстей-->
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'post')->textarea(['rows' => 6]) ?>

    <?= Html::submitButton('Создать новость') ?>

    <?php ActiveForm::end(); ?>
